<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class SpecificMovieController extends Controller
{
    public function show()
    {
        // Fetch a temporary movie (e.g., "Gladiator II")
        $movie = Movie::where('title', 'Gladiator II')->with(['genre', 'actor'])->first();

        if (!$movie) {
            abort(404, 'Movie not found');
        }

        return view('specificmovie', compact('movie'));
    }
}
