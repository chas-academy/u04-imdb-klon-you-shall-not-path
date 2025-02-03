<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class TestController extends Controller
{
    public function test()
    {
        // Fetch movies with their genres
        $movies = Movie::with('genres')->get();

        // Pass the data to the Blade view
        return view('testfile', compact('movies'));
    }

    public function show($title)
    {
        // Find the genre by title
        $genre = Genre::where('title', $title)->firstOrFail();

        // Retrieve all movies associated with this genre
        $movies = $genre->movie()->get();

        // Pass the genre and movies data to the Blade view
        return view('displaytest', compact('genre', 'movies'));
    }

    public function showTop()
    {
        // Fetch movies with their genres
        $movies = Movie::with('genres')->get();

        // Pass the data to the Blade view
        return view('top-rated-movies', compact('movies'));
    }
}