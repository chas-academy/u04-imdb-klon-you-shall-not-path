@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-guest-layout>
<div class=" min-h-screen flex">


    <!-- Sidebar -->
    <x-sidebar-component>
        <x-slot:title>Watchlist</x-slot:title>
        <x-slot:subtitle>My list</x-slot:subtitle>
    </x-sidebar-component>
    
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