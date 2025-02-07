@extends('layouts.app')

@section('content')
<body>
    <div class="flex h-full">
    <div class="flex h-screen">
        
      <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar> 

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, {{ $id->name }}</h2>
        <h2 class="text-2xl font-semibold text-white mb-4 text-center">Users List</h2>

  
    <x-search-user-table :users="$users">
      <x-slot:slot>
      </x-slot:slot>
    </x-search-user-table>


    <x-create-new-user-form>  
    </x-create-new-user-form>      

    </main>
    </div>
    </div>
</body>
@endsection