@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-guest-layout>
<div class=" min-h-screen flex">


    <!-- Sidebar -->
    <x-sidebar-component>
        <x-slot:title>Watchlist</x-slot:title>
            
        <x-button customClass=" mx-20 my-4 bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center justify-center">
            + Create Watchlist
        </x-button>
            
        <x-slot:subtitle>My list</x-slot:subtitle>
    </x-sidebar-component>
    
    <!-- Main Content -->
    <main class="w-3/4 p-10 text-white">
        <h1 class="text-4xl font-bold flex justify-center">Your Watchlist</h1>
        <div class="mt-6 space-y-4">
            <!-- Movie Cards -->
            <x-movie-card-component :movies="$movies">
                My list
            </x-movie-card-component>
            
        </div>
    </main>
</div>
</x-guest-layout>