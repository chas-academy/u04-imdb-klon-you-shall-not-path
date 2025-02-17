<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\User;
use App\Models\Vote;
use App\Models\Actor;
use App\Models\Review;
use App\Models\WatchList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
// Testing
use Intervention\Image\Drivers\Gd\Driver; // Testing
use Intervention\Image\Encoders\AutoEncoder;

class MovieController extends Controller
{
    public function show($movie_id)
    {

        // Fetch Review Data based on movie_id and user_id
        $reviews = Review::where('movie_id', $movie_id)
                         ->where('approved', true)
                         ->with('user')
                         ->take(3)
                         ->get();

        // Fetch Vote Data based on movie_id and user_id
        $vote = Vote::whereIn('user_id', $reviews->pluck('user_id'))
                    ->where('movie_id', $movie_id)
                    ->get();

        // Fetches movie data based on movie_id
        $movie = Movie::where('movie_id', $movie_id)->first();

        return view('specificmovie', compact('movie', 'reviews', 'vote'));
    }

    public function create_watchlist()
    {
        $lists = Watchlist::all();

        $movies = Movie::with('genre')->get();

        return view('create-watchlist', compact('movies', 'lists'));
    }

    public function storeWatchlist(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'selected_movies' => 'required|array',
            'selected_movies.*' => 'exists:movie,movie_id',
        ]);

        try {
            // Start a database transaction
            DB::beginTransaction();

            // Get the authenticated user
            $user = Auth::user();

            // Insert into lists table manually
            $watchlistId = DB::table('list')->insertGetId([
                'title' => $request->name,
                'overview' => $request->description,
                'user_id' => $user->user_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert selected movies into pivot table (list_movie)
            $moviesToInsert = [];
            foreach ($request->selected_movies as $movie_id) {
                $moviesToInsert[] = [
                    'list_id' => $watchlistId,
                    'movie_id' => $movie_id,
                ];
            }

            // Insert movies into pivot table
            DB::table('movie_list')->insert($moviesToInsert);

            // Commit transaction
            DB::commit();

            return redirect()->back()->with('success', 'Watchlist created successfully!');
        } catch (Exception $e) {
            // Rollback transaction in case of error
            DB::rollBack();

            // Log the error for debugging
            \Log::error('Failed to create watchlist: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to create the list');
        }
    }

    public function showWatchlist($list_id)
    {
        // Fetch the selected watchlist
        $selectedlist = DB::table('list')->where('list_id', $list_id)->first();

        // If the list does not exist, return to the empty watchlist page
        if (!$selectedlist) {
            return redirect()->route('watchlist.empty')->with('error', 'Watchlist not found.');
        }

        // Fetch movies for the selected watchlist
        $movies = DB::table('movie')
            ->join('movie_list', 'movie.movie_id', '=', 'movie_list.movie_id')
            ->where('movie_list.list_id', $list_id)
            ->select('movie.*')
            ->get();

        // Fetch all lists for the sidebar
        $lists = DB::table('list')->get();

        return view('watchlist', compact('selectedlist', 'movies', 'lists'));
    }




    public function showEmptyWatchlist()
    {
        $lists = DB::table('list')->get();

        return view('watchlist', ['lists' => $lists, 'selectedlist' => null, 'movies' => collect([])]);
    }

    public function selectWatchlist(Request $request)
    {
        // Validate input to make sure list_id is provided and exists
        $request->validate([
            'list_id' => 'required|exists:list,list_id',
        ]);

        return redirect()->route('watchlist.view', ['list_id' => $request->list_id])->with('debug_list', $request->list_id);
    }


    public function destroy($list_id)
    {
        try {

            $watchlist = DB::table('list')->where('list_id', $list_id)->first();


            if (!$watchlist) {
                return redirect()->route('watchlist.empty')->with('error', 'Watchlist not found.');
            }

            DB::table('list')->where('list_id', $list_id)->delete();

            return redirect()->route('watchlist.empty')->with('success', 'Watchlist deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('watchlist.empty')->with('error', 'Failed to delete watchlist. Please try again.');
        }
    }


    public function editWatchlist($list_id)
    {

        $watchlist = DB::table('list')->where('list_id', $list_id)->first();


        if (!$watchlist) {
            return redirect()->route('watchlist.empty')->with('error', 'Watchlist not found.');
        }


        $lists = DB::table('list')->get();


        $movies = DB::table('movie')->get();


        $selectedMovies = DB::table('movie_list')
            ->where('list_id', $list_id)
            ->pluck('movie_id')
            ->toArray();

        return view('edit-watchlist', compact('watchlist', 'lists', 'movies', 'selectedMovies'));
    }


    public function updateWatchlist(Request $request, $list_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'selected_movies' => 'required|array',
            'selected_movies.*' => 'exists:movie,movie_id',
        ]);

        try {
            DB::beginTransaction();

            DB::table('list')->where('list_id', $list_id)->update([
                'title' => $request->name,
                'updated_at' => now(),
            ]);


            DB::table('movie_list')->where('list_id', $list_id)->delete();


            $moviesToInsert = [];
            foreach ($request->selected_movies as $movie_id) {
                $moviesToInsert[] = [
                    'list_id' => $list_id,
                    'movie_id' => $movie_id,
                ];
            }

            DB::table('movie_list')->insert($moviesToInsert);

            DB::commit();

            return redirect()->route('watchlist.view', ['list_id' => $list_id])->with('success', 'Watchlist updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update watchlist. Please try again.');
        }
    }

    public function showMovie()
    {
        // Fetch all genres with their respective movies
        $genres = Genre::with('movie')->get();

        $user = Auth::user();

        // Pass the data to the Blade view
        return view('movie', compact('genres', 'user'));
    }

    public function editMovie($movie_id)
    {
        // Fetch the movie data
        $movie = Movie::where('movie_id', $movie_id)->with(['actor', 'genre'])->firstOrFail();

        // Fetch all actors and genres from the database
        $actors = Actor::all();
        $genre = Genre::all();

        // Get selected actors and genres for the movie
        $selectedActors = $movie->actor->pluck('actor_id')->toArray();
        $selectedGenres = $movie->genre->pluck('genre_id')->toArray();

        return view('movie-form', compact('movie', 'actors', 'genre', 'selectedActors', 'selectedGenres'));
    }

    public function updateMovie(Request $request, $movie_id)
    {
        try {
            // Validate the form data
            $request->validate([
                'title' => 'nullable|string|max:255',
                'overview' => 'nullable|string',
                'poster' => 'nullable|string',
                'trailer' => 'nullable|string',
                'actors' => 'nullable|array',
                'actors.*' => 'exists:actor,actor_id',
                'genres' => 'nullable|array',
                'genres.*' => 'exists:genre,genre_id',
                'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Image validation
            ]);

            // Find the movie by ID
            $movie = Movie::where('movie_id', $movie_id)->firstOrFail();

            // Update movie fields only if they are provided
            $updateData = array_filter($request->only(['title', 'overview', 'poster', 'trailer']), fn ($value) => !is_null($value));
            $movie->update($updateData);

            // Handle image upload with compression
            if ($request->hasFile('image')) {
                $image = $request->file('image');

                // Generate a new filename using movie title or unique ID if no title is provided
                $filename = ($request->title ? str_replace(' ', '_', strtolower($request->title)) : uniqid()) . '.' . $image->getClientOriginalExtension();
                $filepath = 'uploads/' . $filename;

                // Get original image dimensions
                $data = getimagesize($image);
                $imageHeight = 1000;

                // Initialize Image Manager
                $manager = new ImageManager(new Driver());

                // Compress and resize image
                $compressedImage = $manager->read($image)
                    ->scale(height: 800) // Resize image to height 800px (keeping aspect ratio)
                    ->encode(new AutoEncoder(quality: 75)); // 75% quality compression

                // Save compressed image to storage
                Storage::disk('public')->put($filepath, $compressedImage);

                // Update movie with new poster path
                $movie->update([
                    'poster_file_path' => $filepath
                ]);
            }

            // Sync actors and genres only if provided
            if ($request->has('actors')) {
                $movie->actor()->sync($request->actors);
            }
            if ($request->has('genres')) {
                $movie->genre()->sync($request->genres);
            }

            // Redirect with success message
            return redirect()->back()->with('success', 'Movie updated successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to updated movie. Please try again.');
        }
    }


    public function deleteMovie($movie_id)
    {
        try {

            $movie = DB::table('movie')->where('movie_id', $movie_id)->first();


            if (!$movie) {
                return redirect()->route('allmovies.show')->with('error', 'Movie not found.');
            }

            DB::table('movie')->where('movie_id', $movie_id)->delete();

            return redirect()->route('allmovies.show')->with('success', 'Watchlist deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('allmovies.show')->with('error', 'Failed to delete watchlist. Please try again.');
        }
    }

    public function createMovie(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'release_date' => 'required|date', // Ensure the release_date is a valid date
            'actors' => 'required|array',
            'actors.*' => 'required|exists:actor,actor_id',
            'genres' => 'required|array',
            'genres.*' => 'exists:genre,genre_id',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trailer' => 'required|nullable|url',
        ]);

        // Handle poster upload
        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
        } else {
            return back()->with('error', 'Poster upload failed.');
        }

        // Create the movie
        $movie = Movie::create([
            'title' => $validatedData['title'],
            'overview' => $validatedData['overview'],
            'release_date' => $validatedData['release_date'],
            'poster_file_path' => $posterPath,
            'trailer_file_path' => $validatedData['trailer'],
        ]);

        // Attach actors and genres
        $movie->actor()->attach($validatedData['actors']);
        $movie->genre()->attach($validatedData['genres']);

        return redirect()->route('allmovies.show')->with('success', 'Movie created successfully.');
    }
}
