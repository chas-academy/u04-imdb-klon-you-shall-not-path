@extends('layouts.app')

@section('content')
<style>
    .review-container {
        background: linear-gradient(145deg, #0b1a3a, #142d5c);
        box-shadow: 5px 5px 15px #0a1329, -5px -5px 15px #1c3e70;
        border-radius: 10px;
        padding: 20px;
        color: white;
    }
    .text-highlight {
        color: #FFFFFF;
    }
    .comment-box {
        background: #142d5c;
        border-radius: 10px;
        padding: 10px;
        margin-top: 10px;
    }
</style>

<div class="container mx-auto px-4 py-8">
    <h2 class="text-center text-white text-3xl font-bold mb-8">Reviews</h2>
    
    <!-- Reviews Section -->
    <div class="review-container">
        <h3 class="text-highlight text-xl font-semibold mb-4">User Reviews</h3>
        <div class="space-y-4">
            <div class="comment-box">
                <p><span class="text-highlight">User1:</span> Amazing movie! Loved every bit of it.</p>
            </div>
            <div class="comment-box">
                <p><span class="text-highlight">User2:</span> A well-directed film with great storytelling.</p>
            </div>
        </div>
    </div>

    <!-- Add Review Section -->
    <div class="mt-8 review-container">
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
@endsection
