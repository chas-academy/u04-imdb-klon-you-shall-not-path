@extends('layouts.app')

@section('content')
<body class="h-screen bg-gray-900">
    <div class="flex h-full">
        
        <!-- Sidebar -->
        <aside class="w-1/4 bg-blue-600 text-white p-6 h-full">
            <h2 class="mb-6 ml-2 text-black text-3xl">WATCHLIST</h2>
            <ul class="space-y-4">
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Home</a></li>
                <li><a href="{{ route('user_settings') }}" class="block hover:bg-blue-500 p-2 rounded">Profile Settings</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Create Watchlist</a></li>
            </ul>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-6 flex">
        <!-- <main class="flex-1 p-6 flex flex-col items-center w-full"> -->
        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, John Doe</h2>
            
            <!-- Profile Image Section -->
            <div class="w-1/4 flex flex-col items-center space-y-4">
                <img src="https://via.placeholder.com/300" 
                     alt="Profile Picture" 
                     class="rounded-lg shadow-lg w-64 h-64 object-cover">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Change Profile Image
                </button>
            </div>

            <!-- Watchlist Gallery (Fixed 3x3 Grid) -->
            <div class="flex-1 pl-6">
                <h2 class="text-2xl font-semibold text-white mb-4">Your Watchlist</h2>
                
                <div class="grid grid-cols-3 gap-4">
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                    <div><img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full"></div>
                </div>
            </div>

        </main>
    </div>
</body>
@endsection
