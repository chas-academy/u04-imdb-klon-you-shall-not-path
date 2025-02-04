@extends('layouts.app')

@section('content')
<style>
    .actor-container {
        background: linear-gradient(145deg, #0b1a3a, #142d5c);
        box-shadow: 5px 5px 15px #0a1329, -5px -5px 15px #1c3e70;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }
    .actor-container:hover {
        transform: scale(1.05);
    }
    .text-highlight {
        color: #ffd700;
    }

</style>

<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-white text-3xl font-bold mb-8">Actors</h2>
    
    <!-- Actor Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @for ($i = 0; $i < 12; $i++)
            <div class="actor-container p-4 text-white" onclick="openModal('Actor {{$i + 1}}')">
                <div class="w-full h-48 bg-gray-700 rounded-lg"></div>
                <p class="text-center mt-2">Actor {{$i + 1}}</p>
            </div>
        @endfor
    </div>
</div>


@endsection
