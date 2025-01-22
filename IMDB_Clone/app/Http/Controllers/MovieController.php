<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Retrive Movie by id
    public function getMovie($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        // Return the movie details
        // return response()->json([
        return view('movie', [
            'movie' => $movie,
            // 'id' => $movie->movie_id,
            // 'title' => $movie->title,
            // 'overview' => $movie->overview,
            // 'vote_count' => $movie->vote_count,
            // 'vote_average' => $movie->vote_avr,
            // 'release_date' => $movie->realse_date
        ]);

    }
}
