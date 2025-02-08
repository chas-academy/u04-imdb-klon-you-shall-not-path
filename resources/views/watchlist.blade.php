@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-guest-layout>
<div class=" min-h-screen flex">


    <!-- Sidebar -->
    <x-sidebar-component>
        <x-slot:title>Watchlist</x-slot:title>
            
        <x-button customClass=" mx-20 my-4 bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center justify-center">
            <a href="{{ route('create_watchlist') }}">
                + Create Watchlist
            </a>
        </x-button>

        <x-slot:listbar>
            @foreach($lists as $list)
                <a class="mt-2 bg-black text-white px-4 py-2 rounded flex items-center" href="{{ $list->list_id }}">{{ $list->title }}</a>
            @endforeach
        </x-slot:listbar>
            
        <x-slot:subtitle>My lists</x-slot:subtitle>
    </x-sidebar-component>
    
    <!-- Main Content -->
    <main class="w-3/4 p-10 text-white">
        <h1 class="text-4xl font-bold flex justify-center">Your Watchlist</h1>
        <div class="mt-6 space-y-4">
            <!-- Movie Cards -->
            <x-movie-card-component :movies="$movies">
                <!-- {{ $list->title }} --> List title
            </x-movie-card-component>
            
        </div>
    </main>
</div>
</x-guest-layout>