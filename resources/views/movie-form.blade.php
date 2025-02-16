@extends('layouts.app')

@section('content')
<body>
    <div class="flex h-full">
        <div class="flex h-screen w-full">
            <!-- Sidebar -->
            <x-merge-sidebar>
            </x-merge-sidebar>

            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                <h2 class="text-2xl font-semibold text-white mb-4 text-center">Create Movie</h2>

                <!-- Form Container -->
                <div class="flex justify-center">
                    <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg overflow-hidden p-6">
                    <form action="{{ route('movie.update', ['movie_id' => $movie->movie_id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-col space-y-4">
                                @if (session('success'))
                                <div class="my-4 bg-green-500 text-white p-4 mb-4 rounded-lg">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if (session('error'))
                                    <div class="my-4 bg-red-500 text-white p-4 mb-4 rounded-lg">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <!-- Name Field -->
                                <div class="flex flex-col">
                                    <label for="title" class="text-lg font-semibold text-gray-700 mb-2">Title</label>
                                    <input type="text" name="title" id="title" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $movie->title }}">
                                </div>

                                <!-- Name Field -->
                                <div class="flex flex-col">
                                    <label for="name" class="text-lg font-semibold text-gray-700 mb-2">Overview</label>
                                    <input type="text" name="overview" id="overview" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $movie->overview }}">
                                </div>

                                <div class="flex flex-col">
                                    <label for="actor" class="text-lg font-semibold text-gray-700 mb-2">Actor</label>
                                    <div class="grid grid-cols-3 gap-6 p-3 w-full">
                                    @foreach($actors as $actor)
                                        <div class="flex items-center mb-2">
                                            <input 
                                                type="checkbox"
                                                id="actor_{{ $actor->actor_id }}"
                                                name="actors[]"
                                                value="{{ $actor->actor_id }}"
                                                class="mr-2">
                                            <label class="text-wrap" for="genre_{{ $actor->actor_id }}">{{ $actor->name }}</label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label for="genre" class="text-lg font-semibold text-gray-700 mb-2">Genre</label>
                                    <div class="grid grid-cols-3 gap-6 p-3 w-full">
                                    @foreach($genre as $g)
                                        <div class="flex items-center mb-2">
                                            <input 
                                                type="checkbox"
                                                id="genre_{{ $g->genre_id }}"
                                                name="genres[]"
                                                value="{{ $g->genre_id }}"
                                                class="mr-2">
                                            <label class="text-wrap" for="genre_{{ $g->genre_id }}">{{ $g->title }}</label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>


                                <div class="flex flex-col">
                                    <label for="poster" class="text-lg font-semibold text-gray-700 mb-2">Poster</label>
                                    <input type="text" name="poster" placeholder="poster" class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg p-2">
                                    <input type="file" name="image" class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg p-2" value="{{ $movie->poster_file_path }}">
                                </div>

                                <div class="flex flex-col">
                                    <label for="name" class="text-lg font-semibold text-gray-700 mb-2">Trailer</label>
                                    <input placeholder="Paste in your url" type="text" name="trailer" id="trailer" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $movie->trailer_file_path }}">
                                </div>

 
                                <!-- Update Button and Cancel Button -->
                                <div class="flex justify-end">
                                    <button type="submit" class="mx-2 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                        Update
                                    </button>
                                    <a href="{{ route('allmovies.show') }}" class="mx-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
@endsection