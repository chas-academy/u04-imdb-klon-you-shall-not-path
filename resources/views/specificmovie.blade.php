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
    <!-- Left Section: Movie & Image Slideshow -->
    <div class="movie-container p-4 text-white">
        <!-- Image Slideshow -->
        <div class="relative">
            <div class="w-full h-64 overflow-hidden rounded-lg">
                <img id="slide" src="{{ asset('images/movie1.jpg') }}" alt="Movie Image" class="w-full h-full object-cover">
            </div>
            <button onclick="prevSlide()" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 px-3 py-2 rounded-full">❮</button>
            <button onclick="nextSlide()" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 px-3 py-2 rounded-full">❯</button>
        </div>
+
        <!-- Movie Info -->
        <div class="mt-4">
            <div class="flex items-center gap-2">
                <span class="text-highlight text-lg font-bold">8.5/10</span>
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
        <div class="movie-container p-4 text-white">
            <h3 class="text-lg font-semibold mb-2">Trailer</h3>
            <iframe class="w-full h-48 md:h-64 rounded-lg" src="https://www.youtube.com/embed/your-video-id" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <!-- Review Section -->
        <div class="movie-container p-4 text-white">
            <h3 class="text-lg font-semibold mb-2">Reviews</h3>
            <div class="space-y-4">
                <!-- Sample Reviews -->
                <div class="review-container">
                    <p class="text-sm"><strong>User1:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-xs text-gray-400">10/10</p>
                </div>
                <div class="review-container">
                    <p class="text-sm"><strong>User2:</strong> Great movie! Would watch again.</p>
                    <p class="text-xs text-gray-400">9/10</p>
                </div>
                <div class="review-container">
                    <p class="text-sm"><strong>User3:</strong> Great movie! Would watch again.</p>
                    <p class="text-xs text-gray-400">8/10</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let images = ['{{ asset('images/movie1.jpg') }}', '{{ asset('images/movie2.jpg') }}', '{{ asset('images/movie3.jpg') }}'];
    let index = 0;

    function nextSlide() {
        index = (index + 1) % images.length;
        document.getElementById('slide').src = images[index];
    }

    function prevSlide() {
        index = (index - 1 + images.length) % images.length;
        document.getElementById('slide').src = images[index];
    }
</script>
@endsection
