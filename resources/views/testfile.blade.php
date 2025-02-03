@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Movies and Their Genres</h1>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="border border-gray-300 px-4 py-2 text-left">Movie Title</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Genres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $movie->title }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-gray-600">
                            @foreach ($movie->genres as $genre)
                                <a href="{{ url('/genre/' . urlencode($genre->title)) }}" 
                                   class="inline-block bg-blue-100 text-blue-600 px-2 py-1 rounded-md text-sm font-medium hover:bg-blue-200 transition">
                                    {{ $genre->title }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


