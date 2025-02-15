@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    
    <h2 class="text-center text-white text-3xl font-bold mb-8">Reviews</h2>
    
    <!-- Reviews Section -->
    <div class="review-container">
    <div class="p-4 text-white rounded-lg bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70]">
        <h3 class="text-highlight text-xl font-semibold mb-4">User Reviews</h3>
        <div class="space-y-4">
            @foreach ($reviews as $review)
                <div class="comment-box">
                    <p><span class="text-highlight">{{ $review->user->name }}:</span> {{ $review->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <!-- Add Review Section -->
    <div class="mt-8 review-container">
    <div class="p-4 text-white rounded-lg bg-gradient-to-br from-[#0b1a3a] to-[#012169] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70]">
        <h3 class="text-highlight text-xl font-semibold mb-4">Add Your Review</h3>
        <form>
            <x-text-input class="w-full p-2 rounded bg-gray-800 text-white" rows="4" placeholder="Write your review here..."></x-text-input>
            <br></br>
            <x-button class="mt-4 bg-yellow-500 px-4 py-2 rounded text-black">
            submit
            </x-button>
        </form>
    </div>
    </div>
</div>
@endsection
