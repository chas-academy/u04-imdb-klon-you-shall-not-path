     <!-- User's Sidebar sue's--> 
     <aside class="w-1/4 h-full bg-blue-950 p-6 text-white">
    <h1 class="text-2xl font-bold">WATCHLIST</h1>
        <ul class="space-y-4">
            <li><a href="{{ route('home') }}" class="block hover:bg-blue-500 p-2 rounded">Home</a></li>
            <li><a href="{{ route('user-dashboard') }}" class="block hover:bg-blue-500 p-2 rounded">Profile Page</a></li>
            <li><a href="{{ route('user_settings') }}" class="block hover:bg-blue-500 p-2 rounded">Profile Settings</a></li>
            <li><a href="{{ route('review') }}" class="block hover:bg-blue-500 p-2 rounded">Reviews</a></li>
            <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Films</a></li>
            <!-- <li><a href="{{ route('admin_settings') }}" class="block hover:bg-blue-500 p-2 rounded">Users</a></li> -->

    <h2 class="mt-6 text-gray-400">Create Watchlist</h2>
        <div class="mt-2 bg-black text-white px-4 py-2 rounded flex items-center">🎬 Movies by Tom Cruise
        </div>
            <div class="mt-4 flex items-center">
            </div>

        </ul>
</aside>