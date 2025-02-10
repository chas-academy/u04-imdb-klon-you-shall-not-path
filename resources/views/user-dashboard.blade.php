@extends('layouts.app')

@section('content')

<div class="flex h-full">
<div class="flex h-screen">

     
    <!-- Sidebar -->
    <x-user-sidebar>
    </x-user-sidebar>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 flex flex-col items-center w-full">
        
        <!-- H2 Centered at the Top -->
        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, John Doe</h2>
         
            <div class="flex w-full items-start">

    <!-- Profile Image -->
    <x-profile-photo>
    </x-profile-photo>  
        
    <x-watchlist-gallery>
    </x-watchlist-gallery>      

            </div>
    </main>

</div>
</div>

@endsection
