<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Review;

class VoteController extends Controller
{
    public function add($movie_id, $review_id)
    {
        $review = Review::findOrFail($review_id);
        $review->increment('positive_vote_count');
        return back();
    }

    public function subtract($movie_id, $review_id)
    {
        $review = Review::findOrFail($review_id);
        $review->increment('negative_vote_count');
        return back();
    }
}
