@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Movies in {{ $genre->title }} Genre</h1>
    
    <div class="overflow-x-auto">
    @if ($movies->isEmpty())
        <p>No movies available for this genre.</p>
    @else
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="border border-gray-300 px-4 py-2 text-left">Movie Title</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Overview</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Vote Average</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Release Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $movie->title }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $movie->overview }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $movie->vote_avr }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $movie->release_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>

    <a href="{{ url('/test') }}" class="btn btn-primary mt-3">Back to Movies</a>
</div>
@endsection