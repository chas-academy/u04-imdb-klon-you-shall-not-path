@props(['movie'])

<a href="{{ route('movie.edit', ['movie_id' => $movie->movie_id]) }}">
    <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</button>
</a>