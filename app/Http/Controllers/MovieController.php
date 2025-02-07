<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\User;
use App\Models\Vote;
use App\Models\Review;
use App\Models\WatchList;

class MovieController extends Controller
{
    public function show($movie_id)
    {

        // Fetch Review Data based on movie_id and user_id
        $reviews = Review::where('movie_id', $movie_id)
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
}