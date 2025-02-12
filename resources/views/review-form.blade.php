@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-white text-3xl font-bold mb-8">Reviews</h2>
    
    <!-- Visa recensioner -->
    <div class="review-container">
        <div class="p-4 text-white rounded-lg bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-lg">
            <h3 class="text-highlight text-xl font-semibold mb-4">User Reviews</h3>
            <div class="space-y-4">
                @foreach ($reviews as $review)
                <div class="bg-[#0b1a3a] border-2 border-white p-2 rounded-lg">
                    <p class="text-sm"><strong>{{ $review->user->name }}:</strong> {{ $review->review }}</p>
                    <p class="text-xs text-gray-400">{{ $review->rating }} / 10</p>
                </div>
                @endforeach
            </div>
        </div>
    </div> 
    

    <!-- Skicka recension -->
    <div class="mt-8 review-container">
        <div class="p-4 text-white rounded-lg bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-lg">
            <h3 class="text-highlight text-xl font-semibold mb-4">Add Your Review</h3>
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                
                <!-- Skicka med movie_id -->
                <input type="hidden" name="movie_id" value="{{ $movie->movie_id }}">

                <!-- Ny titel ruta -->
                <input type="text" name="title" placeholder="Title" required class="w-full p-2 rounded bg-gray-800 text-white mb-2" required>

                <!-- Större review ruta -->
                <textarea name="review" class="w-full p-2 rounded bg-gray-800 text-white mt-2" rows="6" placeholder="Write your review here..." required></textarea>
                
                <!-- Rating -->
                <div class="text-highlight text-xl font-semibold mb-4">
                    <label for="rating" class="mr-2 font-semibold ">Rating:</label>
                    <select name="rating" id="rating" class="p-2 rounded bg-gray-800 text-white">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <x-button>
                    Vote
                </x-button>
            </form>
        </div>
    </div>
</div>
@endsection