<x-guest-layout>
    <div class="min-h-screen flex bg-gradient-to-b from-blue-900 to-blue-600">
        
        <!-- Sidebar -->
        <aside class="w-1/4 bg-blue-800 p-6 text-white">
            <h2 class="text-3xl font-bold">Watchlists</h2>
            
            <button class="mt-6 bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg w-full">
                + Create Watchlist
            </button>
            
            <h3 class="mt-6 text-lg font-semibold">My Lists</h3>
            
            <div class="mt-2 bg-black text-white p-3 rounded-lg flex items-center">
                <span class="mr-2 bg-white text-black p-2 rounded-full">M</span> 
                Movies by Tom Cruise
            </div>
            
            <button class="mt-6 flex items-center text-gray-400">
                <span class="mr-2">⚫</span> Add List
            </button>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 p-10 text-white">
            <div class="bg-blue-800 p-6 rounded-lg shadow-lg border border-blue-400">
                
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold">Movies by Tom Cruise</h1>
                    <a href="#" class="text-red-400 hover:text-red-600">Delete Watchlist</a>
                </div>

                <!-- Form -->
                <form class="mt-6 space-y-4">
                    <label class="block">
                        <span class="text-gray-300">Name</span>
                        <input type="text" class="w-full p-2 mt-1 bg-gray-700 border border-gray-500 rounded-md">
                    </label>

                    <label class="block">
                        <span class="text-gray-300">Description</span>
                        <textarea class="w-full p-2 mt-1 bg-gray-700 border border-gray-500 rounded-md"></textarea>
                    </label>

                    <h3 class="text-lg font-semibold">Movies</h3>

                    <!-- Movie List -->
                    @foreach ($movies as $movie)
                    <div class="flex items-center justify-between bg-gray-700 p-3 rounded-md">
                        <div class="flex items-center">
                            <!-- Film Poster -->
                            <div class="w-12 h-12 bg-gray-900 flex items-center justify-center rounded-md overflow-hidden">
                                <img src="{{ asset('storage/' . $movie->poster_file_path) }}" 
                                     alt="{{ $movie->title }}" class="w-full h-full object-cover">
                            </div>

                            <!-- Film Titel -->
                            <span class="ml-4">🎬 {{ $movie->title }} ({{ $movie->year }})</span>
                        </div>

                        <!-- Checkbox -->
                        <input type="checkbox" class="w-6 h-6 rounded-md border-white bg-transparent">
                    </div>
                @endforeach
                </form>
            </div>
        </main>
    </div>
</x-guest-layout>
