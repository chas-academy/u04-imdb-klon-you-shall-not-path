@extends('layouts.movielayout')

@section('content')    
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-indigo-600">Movie Details</h1>
        <div class="space-y-4">
            <p class="text-lg"><strong class="text-gray-700">Title:</strong> <span class="text-indigo-500">{{ $movie['title'] }}</span></p>
            <p class="text-lg"><strong class="text-gray-700">Overview:</strong> <span class="text-gray-600">{{ $movie['overview'] }}</span></p>
            <p class="text-lg"><strong class="text-gray-700">Vote Count:</strong> <span class="text-green-500">{{ $movie['vote_count'] }}</span></p>
            <p class="text-lg"><strong class="text-gray-700">Vote Average:</strong> <span class="text-yellow-500">{{ $movie['vote_avr'] }}</span></p>
            <p class="text-lg"><strong class="text-gray-700">Release Date:</strong> <span class="text-blue-500">{{ $movie['realse_date'] }}</span></p>
        </div>
    </div>
@endsection
