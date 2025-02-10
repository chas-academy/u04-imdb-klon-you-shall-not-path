@extends('layouts.app')

@section('content')

<div class="flex h-full">
    <div class="flex h-screen">

        <!-- Sidebar -->
        <x-admin-sidebar></x-admin-sidebar>  

        <!-- Main Content Area -->
        <main class="flex-1 p-6 flex flex-col items-center w-full">

            <!-- H1 Centered at the Top -->
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">
                Welcome, {{ Auth::user()->name }}
            </h2>

            <!-- Table for Pending Reviews -->
            <x-pending-reviews-table></x-pending-reviews-table>    

        </main>

    </div>   
</div>

@endsection
