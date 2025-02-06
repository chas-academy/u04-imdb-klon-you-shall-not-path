@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-white text-3xl font-bold mb-8">Actors</h2>
    
    <!-- Actor Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach ($actors as $actor)
            <a href="{{ url('/actors/' . urlencode($actor->actor_id)) }}">
                <div class="p-4 text-white rounded-lg transition-transform transform hover:scale-105 cursor-pointer bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70]">
                    <div class="w-full h-48 bg-gray-700 rounded-lg">
                        <img src=""> 
                        <!-- Headshot file path in src ^ -->
                    </div>
                    <p class="text-center mt-2 text-white">{{ $actor->name }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
