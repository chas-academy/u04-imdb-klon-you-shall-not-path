@extends('layouts.app')

@section('content')

<div class="min-h-screen flex flex-col">

<div class=" flex flex-1">
    <!-- Sidebar -->
    <div class="hidden md:flex md:w-1/4">
        <x-user-sidebar />
    </div>
       
    <!-- Main Content Area (Right Column) -->
    <div class="flex align-center justify center">
    <main class="flex-1 p-6 flex flex-col items-center w-full">
        
        <!-- H2 Centered at the Top -->
        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, {{ $user->name }}</h2>
    
        <div class="flex w-full items-start justify-center">
            <div class="w-full max-w-2xl md:max-w-3xl lg:max-w-4xl">
                <x-profile-settings-form :user=$user></x-profile-settings-form>
            </div>
        </div>

    </main>  
</div>
</div>
</div>        

@endsection