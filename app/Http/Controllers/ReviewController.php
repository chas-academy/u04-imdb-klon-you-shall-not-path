<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Vote;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        try {

            $user = Auth::user();

            // Issue with the validation
            $request->validate([
                'title' => 'required|string|max:255',
                'review' => 'required|string',
                'movie_id' => 'required|exists:movie,movie_id',
                'vote' => 'required|integer',
            ]);

            $review = Review::create([
                'title' => $request->title,
                'review' => $request->review,
                'movie_id' => $request->movie_id,
                'user_id' => $user->user_id,
            ]);

            $vote = Vote::create([
                'vote' => $request->vote,
                'movie_id' => $request->movie_id,
                'user_id' => $user->user_id,
            ]);

            // Fetch both the vote_id and the review_id from the creates and put them into the pivot table (review_vote)
            DB::table('review_vote')->insert([
                'review_id' => $review->review_id,
                'vote_id' => $vote->vote_id,
            ]);

            return redirect()->back()->with('success', 'The Review have been succefully created.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create the review. Please try again.');
        }

    }

    public function approveReview($review_id)
    {
        try {
            $review = Review::findOrFail($review_id);
            $review->approved = true;
            $review->save();

            return back()->with('success', 'Review approved successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed too approve review, try again!');
        }
    }

    public function deleteReview($review_id)
    {
        try {

            $review = Review::findOrFail($review_id);
            $review->delete();

            return back()->with('success', 'Review deleted successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Failed too approve review, try again!');
        }
    }

    public function adminIndex()
    {
        $reviews = Review::where('is_approved', false)->get();
        return view('admin-dashboard', compact('reviews'));
    }


    public function showReviewForm($movie_id)
    {
        $movie = Movie::findOrFail($movie_id);
        return view('review-form', compact('movie'));
    }

    public function show()
    {

        $id = Auth::user();
        // Fetch reviews where approved = false and include related votes
        $reviews = Review::with('votes')->get();

        return view('admin-dashboard-reviews', compact('reviews', 'id'));
    }
}
