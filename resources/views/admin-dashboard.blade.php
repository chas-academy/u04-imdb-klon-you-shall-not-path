@extends('layouts.app')

@section('content')
<body>
    <div class="flex h-full">
    <div class="flex h-screen">

    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>  

    
        <!-- Main Content Area -->
        <main class="flex-1 p-6 flex flex-col items-center w-full">

            <!-- H1 Centered at the Top -->
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, {{ $id->name }}</h2>
    
    <x-pending-reviews-table>
    </x-pending-reiviews-table>    

        </main>
    </div>   
    </div>
</body>

@endsection
