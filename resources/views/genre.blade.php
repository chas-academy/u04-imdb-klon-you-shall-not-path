@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-white text-3xl font-bold mb-8">Genres</h2>
    
    <!-- Genre Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach ($genres as $genre)
        <a href="{{ url('/genre/' . urlencode($genre->title)) }}">
            <div class="bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-lg transition-transform duration-300 ease-in-out cursor-pointer transition-transform duration-200 hover:scale-105 p-4 text-white">
                <div class="w-full h-48 bg-gray-700 rounded-lg flex items-center justify-center">
                    <p class="text-center font-bold text-white">{{ $genre->title }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
