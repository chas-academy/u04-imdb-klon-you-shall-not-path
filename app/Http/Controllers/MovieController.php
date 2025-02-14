<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\User;
use App\Models\Vote;
use App\Models\Review;
use App\Models\WatchList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    // Hämta den aktuella watchlisten
    $watchlist = DB::table('list')->where('list_id', $list_id)->first();

    // Kontrollera om listan finns
    if (!$watchlist) {
        return redirect()->route('watchlist.empty')->with('error', 'Watchlist not found.');
    }

    // Hämta alla watchlists för sidomenyn
    $lists = DB::table('list')->get();

    // Hämta alla filmer
    $movies = DB::table('movie')->get();

    // Hämta de filmer som redan finns i denna lista
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
    
            // Uppdatera listans namn
            DB::table('list')->where('list_id', $list_id)->update([
                'title' => $request->name,
                'updated_at' => now(),
            ]);
    
            // Radera gamla filmer från listan
            DB::table('movie_list')->where('list_id', $list_id)->delete();
    
            // Lägg till nya filmer i listan
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
}