<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        // Fetch all genres
        $genres = Genre::all();
        
        // Pass genres to the Blade view
        return view('genre', compact('genres'));
    }
}
