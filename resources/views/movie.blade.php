@extends('layouts.app')

@section('content')


<div class="container mx-auto px-4 py-8">
<a class="text-white text-xl border-white border rounded p-2 hover:bg-white hover:text-blue-500 transition duration-700" href="{{ route('createform') }}">
    Create Movie &#43;
</a>
    @foreach ($genres as $genre)
        <h2 class="text-center text-white text-3xl font-bold mb-8 mt-4">{{ $genre->title }}</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach ($genre->movie ?? [] as $movie)
            <div class="p-4 text-white bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-lg transform transition-transform duration-300 ease-in-out cursor-pointer hover:scale-105">
                    
                <a href="{{ url('/movie/' . urlencode($movie->movie_id)) }}"> 
                    <div class="w-full h-48 bg-white rounded-lg">
                        <img src="{{ url('storage/' . $movie->poster_file_path) }}" alt="Uploaded Image" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center mt-2 text-white">{{ $movie->title }}</p>
                </a>

                <div class="flex justify-center gap-2 mt-4">
                    <x-edit-movie-button :movie=$movie />
                    <x-delete-movie-button :movie=$movie />
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
</div>

@endsection
