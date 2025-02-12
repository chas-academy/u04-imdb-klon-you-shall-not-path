@extends('layouts.app')

@section('content')

<div class="flex flex-col md:flex-row h-screen w-full">

    <!-- Sidebar -->
    <x-user-sidebar>
    </x-user-sidebar>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 flex flex-col items-center w-full">
        
        <!-- H2 Centered at the Top -->
        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, {{ auth()->user()->name }}</h2>
         
        <div class="w-full">
            <x-watchlist-gallery>
            </x-watchlist-gallery>      
        </div>

    </main>
</div>

@endsection
