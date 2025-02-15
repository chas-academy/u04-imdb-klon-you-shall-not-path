<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        // Fetch all genres
        $genres = Genre::all();
        
        // Pass genres to the Blade view
        return view('genre', compact('genres'));
    }

    public function show($title)
    {
        // Find the genre by title
        $genre = Genre::where('title', $title)->firstOrFail();

        // Retrieve all movies associated with this genre
        $movies = $genre->movie()->get();

        // Pass the genre and movies data to the Blade view
        return view('genreMovies', compact('genre', 'movies', 'title'));
    }
}
