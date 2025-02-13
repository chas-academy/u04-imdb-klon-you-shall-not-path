<x-guest-layout>
    <div class="min-h-screen flex bg-gradient-to-b from-blue-900 to-blue-600">
        
        <!-- Sidebar -->
        <aside class="w-1/4 bg-blue-800 p-6 text-white">
            <h2 class="text-3xl font-bold">Watchlists</h2>
                       
            <h3 class="mt-6 text-lg font-semibold">My Lists</h3>
            @foreach ($lists as $list)
            <div class="mt-2 bg-black text-white p-3 rounded-lg flex items-center">
                {{ $list->title }}
            </div>
            @endforeach
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 p-10 text-white">
            <div class="bg-blue-800 p-6 rounded-lg shadow-lg border border-blue-400">
                
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold">Create New Watchlist</h1>
                    <a href="{{ route('watchlist.empty') }}" class="text-red-400 hover:text-red-600">Cancel</a>
                </div>

                <!-- Form -->
                <form action="{{ route('store.watchlist') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if(session('success'))
                        <div class="p-4 mb-4 text-green-600 bg-green-200 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="p-4 mb-4 text-red-600 bg-red-200 rounded">
                            {{ session('error') }}
                        </div>
                    @endif
                    <label class="block">
                        <span class="text-gray-300">Name</span>
                        <input type="text" name="name" class="w-full p-2 mt-1 bg-gray-700 border border-gray-500 rounded-md">
                    </label>

                    <label class="block">
                        <span class="text-gray-300">Description</span>
                        <textarea name="description" class="w-full p-2 mt-1 bg-gray-700 border border-gray-500 rounded-md"></textarea>
                    </label>

                    <x-search-watchlist-table :movies=$movies />

                    <x-create-watchlist-button />
                </form>
            </div>
        </main>
    </div>
</x-guest-layout>
