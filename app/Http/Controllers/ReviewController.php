<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index($movie_id)
    {
        // Visa endast godkända recensioner
        $reviews = Review::where('movie_id', $movie_id)->where('is_approved', true)->get();
        return view('review.index', compact('reviews', 'movie_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'review' => 'required|string',
            'movie_id' => 'required|exists:movies,id',
            'user_id' => 'required|exists:users,id',
            'vote' => 'required|integer|min:1|max:10'
        ]);

        $review = Review::create([
            'title' => $request->title,
            'review' => $request->review,
            'movie_id' => $request->movie_id,
            'user_id' => auth()->id(),
            'vote'=> $request->vote,
            'positive_vote_count' => 0,
            'negative_vote_count' => 0,
            'is_approved' => false, // Väntar på godkännande
            
        ]);

        return back()->with('success', 'Recensionen har skickats in och väntar på godkännande.');
    }

    public function approve($review_id)
    {
        $review = Review::findOrFail($review_id);
        $review->update(['is_approved' => false]);

        return back()->with('success', 'Recensionen har godkänts.');
    }

    public function adminIndex()
    {
        $reviews = Review::where('is_approved', false)->get();
        return view('admin-dashboard', compact('reviews'));
    }


    public function showReviewForm($movie_id)    
    {
    $movie = Movie::findOrFail($movie_id);
    return view('review-form', compact('movie','reviews'));
    }



}
