@extends('layouts.app')

@section('content')

<!-- <div class="flex h-full">
<div class="flex h-screen"> -->
<div class="flex flex-col md:flex-row h-full min-h-screen">


    <!-- Sidebar -->
    <div class="flex flex-col md:flex-row h-full min-h-screen">    
    <x-admin-sidebar>
    </x-admin-sidebar>  
    </div>
    
        <!-- Main Content Area -->
        <main class="flex-1 p-6 flex flex-col items-center w-full">

            <!-- H1 Centered at the Top -->
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, {{ $id->name }}</h2>
    
    <x-pending-reviews-table>
    </x-pending-reviews-table>    

        </main>

</div>   
</div>



@endsection
