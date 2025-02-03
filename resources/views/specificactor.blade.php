@extends('layouts.app')

@section('content')
<style>
    .movie-container {
        background: linear-gradient(145deg, #0b1a3a, #012169);
        box-shadow: 5px 5px 15px #0a1329, -5px -5px 15px #1c3e70;
        border-radius: 10px;
    }
    .text-highlight {
        color: #FFFFFF;
    }
    .review-container {
        background: #0b1a3a;
        border: 2px solid #FFFFFF;
        padding: 10px;
        border-radius: 10px;
    }
</style>

<div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Left Section: Actor image & info -->
    <div class="movie-container p-4 text-white">
        <!-- Image Slideshow -->
        <div class="relative">
            <div class="w-full h-64 overflow-hidden rounded-lg">
                <img id="slide" src="{{ asset('images/movie1.jpg') }}" alt="Actor Image" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Actor Info -->
        <div class="mt-4">
            <div class="flex items-center gap-2">
                <h2 class="text-xl font-semibold">Actor name</h2>
            </div>
            <p class="mt-2 text-sm"><strong>Movies:</strong> Movies 1, Movies 2, Movies 3</p>
            <p class="mt-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam...</p>
        </div>
    </div>

    <!-- Right Section: Actor Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-8 gap-2">
        @for ($i = 0; $i < 6; $i++)
            <div class="actor-container p-4 text-white">
                <div class="w-full h-48 bg-gray-700 rounded-lg"></div>
                <p class="text-center mt-2">Movie {{$i + 1}}</p>
            </div>
        @endfor
    </div>
</div>
@endsection
