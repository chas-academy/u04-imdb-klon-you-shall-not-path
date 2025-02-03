@extends('layouts.app')

@section('content')
<style>
    .genre-container {
        background: linear-gradient(145deg, #0b1a3a, #142d5c);
        box-shadow: 5px 5px 15px #0a1329, -5px -5px 15px #1c3e70;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }
    .genre-container:hover {
        transform: scale(1.05);
    }
    .text-highlight {
        color:rgb(255, 255, 255);
    }
</style>

<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-white text-3xl font-bold mb-8">Genres</h2>
    
    <!-- Genre Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach ($genres as $genre)
            <div class="genre-container p-4 text-white">
                <div class="w-full h-48 bg-gray-700 rounded-lg flex items-center justify-center">
                    <p class="text-center font-bold text-highlight">{{ $genre->title }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
