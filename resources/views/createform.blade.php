@extends('layouts.app')

@section('content')
<body>
    <div class="flex h-full">
        <div class="flex h-screen w-full">
            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                <h2 class="text-2xl font-semibold text-white mb-4 text-center">Create Movie</h2>

                <!-- Form Container -->
                <div class="flex justify-center">
                    <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg overflow-hidden p-6">
                        <!-- Movie Create Form -->
                        <form action="{{ route('new.movie') }}" method="POST" enctype="multipart/form-data">
                            @csrf

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

                                <!-- Movie Title -->
                                <div class="flex flex-col">
                                    <label for="title" class="text-lg font-semibold text-gray-700 mb-2">Title</label>
                                    <input type="text" name="title" id="title" required class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Movie Title">
                                </div>

                                <!-- Movie Overview -->
                                <div class="flex flex-col">
                                    <label for="overview" class="text-lg font-semibold text-gray-700 mb-2">Overview</label>
                                    <textarea name="overview" id="overview" rows="3" required class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Write a short movie description"></textarea>
                                </div>

                                <!-- Actors Selection -->
                                <div class="flex flex-col">
                                    <label for="actor" class="text-lg font-semibold text-gray-700 mb-2">Actors</label>
                                    <div class="grid grid-cols-3 gap-6 p-3 w-full">
                                        @foreach($actors as $actor)
                                            <div class="flex items-center mb-2">
                                                <input type="checkbox" id="actor_{{ $actor->actor_id }}" name="actors[]" value="{{ $actor->actor_id }}" class="mr-2">
                                                <label class="text-wrap" for="actor_{{ $actor->actor_id }}">{{ $actor->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Genre Selection -->
                                <div class="flex flex-col">
                                    <label for="genre" class="text-lg font-semibold text-gray-700 mb-2">Genre</label>
                                    <div class="grid grid-cols-3 gap-6 p-3 w-full">
                                        @foreach($genres as $genre)
                                            <div class="flex items-center mb-2">
                                                <input type="checkbox" id="genre_{{ $genre->genre_id }}" name="genres[]" value="{{ $genre->genre_id }}" class="mr-2">
                                                <label class="text-wrap" for="genre_{{ $genre->genre_id }}">{{ $genre->title }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Poster Upload -->
                                <div class="flex flex-col">
                                    <label for="poster" class="text-lg font-semibold text-gray-700 mb-2">Poster</label>
                                    <input type="file" name="poster" class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg p-2" required>
                                </div>

                                <!-- Release Date -->
                                <div class="flex flex-col">
                                    <label for="release_date" class="text-lg font-semibold text-gray-700 mb-2">Release Date</label>
                                    <input type="date" name="release_date" id="release_date" required class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Trailer URL -->
                                <div class="flex flex-col">
                                    <label for="trailer" class="text-lg font-semibold text-gray-700 mb-2">Trailer</label>
                                    <input type="text" name="trailer" id="trailer" placeholder="Paste YouTube or other video URL" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Submit & Cancel Buttons -->
                                <div class="flex justify-end">
                                    <button type="submit" class="mx-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                                        Create Movie
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
