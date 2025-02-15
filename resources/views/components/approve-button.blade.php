<form action="{{ route('review.approve', $review->review_id) }}" method="POST">
    @csrf
    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        Approve
    </button>
</form>
