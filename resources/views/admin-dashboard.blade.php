@extends('layouts.app')

@section('content')

<div class="flex h-screen">
    <!-- Sidebar -->
        <x-admin-sidebar />

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col items-center relative p-6 pt-16">
        
        <!-- Centered H2 at the Top -->
        <h2 class="text-2xl font-semibold text-white">
            Welcome, {{ $id->name }}
        </h2>

        <!-- Table sits just below the h2 -->
        <div class="w-full max-w-4xl mt-6">
            <x-pending-reviews-table :reviews="$reviews" />
        </div>

    </main>
</div>

@endsection
