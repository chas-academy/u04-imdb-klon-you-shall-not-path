@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Left Section: Actor image & info -->
    <div class="p-4 text-white rounded-lg bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70]">
        <!-- Image Slideshow -->
        <div class="relative">
            <div class="w-full h-64 overflow-hidden rounded-lg">
                <img id="slide" src="{{ asset('images/movie1.jpg') }}" alt="Actor Image" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Actor Info -->
        <div class="mt-4">
            <div class="flex items-center gap-2">
                <h2 class="text-xl font-semibold">{{ $actor->name }}</h2>
            </div>
            <div class="mt-2 text-sm flex flex-row">
                <strong>Movies:</strong> 
                @foreach ($movies as $movie)
                    <p class="px-1">{{ $movie->title }}</p>
                @endforeach
            </div>
            <div class="mt-2 text-sm flex flex-row">
                <strong>Genres:</strong>
                @foreach ($genres as $genre)
                    <p class="px-1">{{ $genre->title }}</p>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Right Section: Actor Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-3 gap-2">
        @foreach ($movies as $movie)
        <a href="{{ url('/movie/' . urlencode($movie->movie_id)) }}">
            <div class="p-4 text-white rounded-lg transition-transform transform hover:scale-105 cursor-pointer bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70]">
                <div class="w-full h-48 bg-gray-700 rounded-lg">
                    <img src="">
                    <!-- Add {{ $movie->poster_file_path }} in later after the images has been added -->
                </div>
                <p class="text-center mt-2 text-white">{{ $movie->title }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
