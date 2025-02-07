@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-white text-center">Movies in {{ $genre->title }} Genre</h1>

        <!-- Movie Grid with specific Genre-->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach ($movies as $movie)
        <a href="{{ url('/movie/' . urlencode($movie->movie_id)) }}">
            <div class="p-4 text-white bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-lg transform transition-transform duration-300 ease-in-out cursor-pointer hover:scale-105">
                <div class="w-full h-48 bg-white rounded-lg">
                    <img src="{{ url('storage/' . $movie->poster_file_path) }}" alt="Uploaded Image" class="w-full h-full object-cover">
                </div>
                <p class="text-center mt-2 text-white">{{ $movie->title }}</p>
            </div>
        </a>
        @endforeach
    </div>
    

</div>
@endsection