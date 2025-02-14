<!-- Sidebar with Toggle Button -->
<div x-data="{ open: true }" class="flex">
    
    <!-- Sidebar -->
    <aside 
        x-show="open" 
        class="w-64 h-full bg-blue-950 p-6 text-white sm:w-40 xs:w-32 min-[375px]:w-24 transition-all duration-300"
        x-transition:enter="transform transition-transform ease-in-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition-transform ease-in-out duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
    >
        <!-- Toggle Button (Inside Sidebar) -->
        <button @click="open = !open" class="absolute  left-1 bg-white text-blue-950 px-2 py-1 rounded-md">
            ✖
        </button>
    <br> </br>

        <h1 class="text-2xl font-bold"></h1>
        <ul class="space-y-4 text-sm">
            <li><a href="{{ route('home') }}" class="block hover:bg-blue-500 p-2 rounded">Home</a></li>
            
            @auth
                @if(Auth::user()->role === 'admin')
                    <li><a href="{{ route('admin-dashboard') }}" class="block hover:bg-blue-500 p-2 rounded">Admin Dashboard</a></li>
                    <li><a href="{{ route('admin-settings') }}" class="block hover:bg-blue-500 p-2 rounded">Admin Settings</a></li>
                @else
                    <li><a href="{{ route('user-dashboard') }}" class="block hover:bg-blue-500 p-2 rounded">Profile Page</a></li>
                    <li><a href="{{ route('user-settings') }}" class="block hover:bg-blue-500 p-2 rounded">Profile Settings</a></li>
                @endif
                <li><a href="{{ route('create-watchlist') }}" class="block hover:bg-blue-500 p-2 rounded">Watchlist</a></li>
                <li><a href="{{ route('review.show') }}" class="block hover:bg-blue-500 p-2 rounded">Reviews</a></li>
            @endauth
        </ul>
    </aside>

    <!-- Show Sidebar Button -->
    <button @click="open = !open" x-show="!open" class="absolute left-1 bg-blue-950 text-white px-2 py-1 rounded-md">
        ☰
    </button>
</div>

<!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
