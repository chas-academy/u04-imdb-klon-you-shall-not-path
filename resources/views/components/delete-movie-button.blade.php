<form action="{{ route('movie.delete', $movie->movie_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this movie?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Delete
    </button>
</form>
