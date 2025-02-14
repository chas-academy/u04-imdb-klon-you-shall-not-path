<x-guest-layout>
    <div class="min-h-screen flex aline-center justify-center">
        

        <!-- Main Content -->
        
        <main class="w-3/4 p-10 text-white">
            <div class="relative bg-transparent border border-blue-400 p-6 rounded-lg shadow-lg w-3/4 mx-auto">
                
                <!-- Delete-knapp i övre högra hörnet -->
                <a href="{{ route('watchlist.destroy', ['list_id' => $watchlist->list_id]) }}"
                   class="absolute top-2 right-4 text-red-400 hover:text-red-600 text-sm">
                    Delete Watchlist
                </a>

                <!-- Titel -->
                <h1 class="text-3xl font-bold mb-6 text-center">Edit Watchlist</h1>

                <form action="{{ route('watchlist.update', ['list_id' => $watchlist->list_id]) }}" method="POST">
                    @csrf

                    <!-- Name Input -->
                    <label for="name" class="block text-lg mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ $watchlist->title }}"
                           class="w-full px-4 py-2 text-white rounded-lg bg-transparent border border-gray-300 mb-4 focus:border-blue-500 focus:ring-2 focus:ring-blue-500">

                    <!-- Description Input -->
                    <label for="description" class="block text-lg mb-2">Description</label>
                    <textarea name="description" id="description"
                              class="w-full px-4 py-2 text-white rounded-lg bg-transparent border border-gray-300 mb-4 focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                              rows="3">{{ $watchlist->overview }}</textarea>

                    <!-- Movies Section -->
                    <h2 class="text-lg font-bold mb-2">Movies</h2>
                    <div class="space-y-4">
                        @foreach($movies as $movie)
                            <label class="flex items-center bg-blue-900 p-4 rounded-lg border border-blue-700">
                                <div class="w-10 h-10 bg-gray-400 rounded mr-3"></div>
                                <span class="flex-grow">{{ $movie->title }}</span>
                                <input type="checkbox" name="selected_movies[]" value="{{ $movie->movie_id }}"
                                       @if(in_array($movie->movie_id, $selectedMovies)) checked @endif
                                       class="w-6 h-6 accent-white">
                            </label>
                        @endforeach
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="mt-6 px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg flex items-center justify-center w-full">
                        <span class="mr-2">Save Changes</span> ➝
                    </button>
                </form>
            </div>
        </main>
    </div>
</x-guest-layout>