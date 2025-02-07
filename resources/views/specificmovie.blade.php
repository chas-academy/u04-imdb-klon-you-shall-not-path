@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Left Section: Movie & Image Slideshow -->
    <div class="bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-lg p-4 text-white">
        <!-- Image Slideshow -->
        <div class="relative">
            <div class="w-full h-64 overflow-hidden rounded-lg">
                <img id="slide" src="{{ asset('images/movie1.jpg') }}" alt="Movie Image" class="w-full h-full object-cover">
            </div>
        </div>
+
        <!-- Movie Info -->
        <div class="mt-4">
            <div class="flex items-center gap-2">
                <span class="text-white text-lg font-bold">{{ $movie->vote_avr }} / 10</span>
                <h2 class="text-xl font-semibold">{{ $movie->title }}</h2>
            </div>
            <p class="mt-2 text-sm"><strong>Actors:</strong> 
                {{ $movie->actor->pluck('name')->join(', ') }}
            </p>
            <p class="text-sm"><strong>Genre:</strong> 
                {{ $movie->genre->pluck('title')->join(', ') }}
            </p>
            <p class="text-sm"><strong>Release Date:</strong> {{ $movie->release_date ?? 'Unknown' }}</p>
            <p class="mt-2 text-sm">{{ $movie->overview ?? 'No description available.' }}</p>
        </div>
    </div>

    <!-- Right Section: Trailer & Reviews -->
    <div class="flex flex-col gap-4">
        <!-- Trailer Section -->
        <div class="bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-lg p-4 text-white">
            <h3 class="text-lg font-semibold mb-2">Trailer</h3>
            <iframe class="w-full h-48 md:h-64 rounded-lg" src="https://www.youtube.com/embed/your-video-id" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <!-- Review Section -->
        <div class="bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-lg p-4 text-white">
            <h3 class="text-lg font-semibold mb-2">Reviews</h3>
            <div class="space-y-4">
                <!-- Sample Reviews -->
                @foreach ($reviews->take(3) as $review)
                <div class="bg-[#0b1a3a] border-2 border-white p-2 rounded-lg">
                    <p class="text-sm"><strong>{{ $review->user->name }}:</strong> {{ $review->review }}</p>
                    @php
                        $ReviewVote = $vote->where('user_id', $review->user_id)->first();
                    @endphp
                    <p class="text-xs text-gray-400">{{ $ReviewVote->vote }}</p>
                </div>
                <div class="flex flex-row"> 
                    <form method="POST" action="{{ route('vote.add', ['movie_id' => $movie->movie_id, 'review_id' => $review->review_id]) }}">
                        @csrf
                        <button type="submit" class="px-2"> &#128077; </button>
                    </form>
                    {{ $review->positive_vote_count }}
                    <form method="POST" action="{{ route('vote.subtract', ['movie_id' => $movie->movie_id, 'review_id' => $review->review_id]) }}">
                        @csrf
                        <button type="submit" class="px-2"> &#128078; </button>
                    </form>
                    {{ $review->negative_vote_count }}
                </div>
                @endforeach
                <br>
                <a href="">
                    <x-button class="mt-4 bg-yellow-500 px-4 py-2 rounded text-black">
                        See All Reviews
                    </x-button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
