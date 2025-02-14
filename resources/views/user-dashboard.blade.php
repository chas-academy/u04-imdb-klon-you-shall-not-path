@extends('layouts.app')

@section('content')

<div class="min-h-screen flex flex-col">
<div class=" flex flex-1">

    <!-- Sidebar -->
    <div class="md:w-1/4 w-full md:block hidden">
        <x-admin-sidebar />
    </div>

    <main class="flex-1 p-6 flex flex-col items-center w-full">
        
<       <h2 class="text-2xl font-semibold text-white mb-4 text-center">WatchList</h2>
           
<!-- Table for WatchList -->

    </main>
</div>
</div>

@endsection
