@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-guest-layout>
<div class=" min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-1/4 bg-blue-950 p-6 text-white">
        <h1 class="text-2xl font-bold">Watchlists</h1>
        <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded">+ Create watchlist</button>
        <h2 class="mt-6 text-gray-400">My Lists</h2>
        <div class="mt-2 bg-black text-white px-4 py-2 rounded flex items-center">🎬 Movies by Tom Cruise</div>
        <div class="mt-4 flex items-center">
            <input type="checkbox" class="mr-2">
            <span>Abdu lista</span>
            <button class="ml-auto text-gray-400">⋯</button>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class="w-3/4 p-10 text-white">
        <h1 class="text-4xl font-bold">Your Watchlist</h1>
        <div class="mt-6 space-y-4">
            <!-- Movie Cards -->
            <div class="border border-gray-500 p-4 rounded-lg bg-blue-900 flex items-start">
                <div class="w-20 h-32 bg-gray-700"></div>
                <div class="ml-4 flex-1">
                    <h2 class="text-xl font-bold">1. Movie title</h2>
                    <p class="flex items-center text-yellow-400">⭐ Rating <span class="text-white ml-2">☆ Rate</span></p>
                    <p class="font-bold mt-2">Overview:</p>
                    <p class="text-gray-300">"Lorem ipsum dolor sit amet, consectetur adipiscing elit..." <strong>8.5</strong></p>
                </div>
                <button class="text-gray-400 text-xl">ℹ️</button>
            </div>
            <div class="border border-gray-500 p-4 rounded-lg bg-blue-900 flex items-start">
                <div class="w-20 h-32 bg-gray-700"></div>
                <div class="ml-4 flex-1">
                    <h2 class="text-xl font-bold">1. Movie title</h2>
                    <p class="flex items-center text-yellow-400">⭐ Rating <span class="text-white ml-2">☆ Rate</span></p>
                    <p class="font-bold mt-2">Overview:</p>
                    <p class="text-gray-300">"Lorem ipsum dolor sit amet, consectetur adipiscing elit..." <strong>8.5</strong></p>
                </div>
                <button class="text-gray-400 text-xl">ℹ️</button>
            </div>
            <div class="border border-gray-500 p-4 rounded-lg bg-blue-900 flex items-start">
                <div class="w-20 h-32 bg-gray-700"></div>
                <div class="ml-4 flex-1">
                    <h2 class="text-xl font-bold">1. Movie title</h2>
                    <p class="flex items-center text-yellow-400">⭐ Rating <span class="text-white ml-2">☆ Rate</span></p>
                    <p class="font-bold mt-2">Overview:</p>
                    <p class="text-gray-300">"Lorem ipsum dolor sit amet, consectetur adipiscing elit..." <strong>8.5</strong></p>
                </div>
                <button class="text-gray-400 text-xl">ℹ️</button>
            </div>
        </div>
    </main>
</div>
</x-guest-layout>