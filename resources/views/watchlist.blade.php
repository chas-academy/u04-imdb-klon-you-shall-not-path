<x-guest-layout>
<div class=" min-h-screen flex">

    <x-sidebar-component>
        <x-slot:listbar class="py-5">
            @foreach($lists as $list)
                <form action="{{ route('watchlist.show') }}" method="POST">
                    @csrf
                    <input type="hidden" name="list_id" value="{{ $list->list_id }}">
                    <button type="submit" class="w-full mt-2 bg-black text-white px-4 py-2 rounded flex items-center">
                        {{ $list->title }}
                    </button>
                </form>
            @endforeach
        </x-slot:listbar>
        <x-slot:create>
            <a href="{{ route('create-watchlist') }}" class="my-8 bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg w-full">Create Watchlist +</a>
        </x-slot:create>

        <x-slot:subtitle>My Lists</x-slot:subtitle>
    </x-sidebar-component>

    <!-- Main Content -->
    <main class="w-3/4 p-10 text-white">
        @if(session('error'))
            <div class="p-4 mb-4 text-red-600 bg-red-200 rounded">
                {{ session('error') }}
            </div>
        @endif
        <!-- While no list is picked, show: x -->
        @if(isset($selectedlist))
            <h1 class="text-4xl font-bold flex justify-center">{{ $selectedlist->title }}</h1>
            <h3 class="text-l flex justify-center font-normal"> {{ $selectedlist->overview }} </h3>
            <div class="mt-6 space-y-4">
                @if(isset($movies) && $movies->isNotEmpty())
                    @foreach ($movies as $movie)
                        <x-movie-card-component :movie="$movie"></x-movie-card-component>
                    @endforeach
                @else
                    <p class="text-center text-gray-400">No movies in this list.</p>
                @endif
            </div>
        @else
            <h1 class="text-4xl font-bold flex justify-center text-gray-400">Select a Watchlist</h1>
        @endif
    </main>


</div>
</x-guest-layout>