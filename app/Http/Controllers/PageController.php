<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Actor;

class PageController extends Controller
{
    public function homepage()
    {
        // Fetch all genres with their respective movies
        $genres = Genre::with('movie')->get();

        // Pass the data to the Blade view
        return view('homepage', compact('genres'));
    }

    public function showCreateMovie()
    {
        $actors = Actor::all();
        $genres = Genre::all(); // Corrected variable name to plural for clarity

        return view('createform', compact('actors', 'genres'));
    }


}
