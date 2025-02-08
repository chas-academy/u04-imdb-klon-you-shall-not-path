<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Movie $movie)
    {
        $reviews = Review::where('movie_id', $movie->movie_id)->get();
        return view('review', compact('reviews'));
    }
}
