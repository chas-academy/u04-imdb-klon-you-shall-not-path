<?php

namespace App\Http\Controllers;

use App\Models\Actor;

class ActorController extends Controller
{
    public function ShowActor()
    {
        // Fetch Actors
        $actors = Actor::all();

        // return view with actors
        return view('actor', compact('actors'));
    }

    public function ShowSpecificActor($id)
    {
        // Find the actor by ID
        $actor = Actor::where('actor_id', $id)->firstOrFail();

        // // Retrive all movies
        $movies = $actor->movie()->get();

        // // Retrive all genres
        $genres = $actor->genre()->get();

        return view('specificactor', compact('actor', 'movies', 'genres'));
    }
}
