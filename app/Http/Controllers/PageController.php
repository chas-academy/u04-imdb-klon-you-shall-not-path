<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class PageController extends Controller
{
    public function homepage()
    {
        // Fetch all genres with their respective movies
        $genres = Genre::with('movie')->get();

        // Pass the data to the Blade view
        return view('homepage', compact('genres'));
    }
}
