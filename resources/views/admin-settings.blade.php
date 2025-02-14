@extends('layouts.app')

@section('content')

<!-- <div class="flex h-screen"> -->
<div class="min-h-screen flex flex-col">

<div class=" flex flex-1">
    <!-- Sidebar -->
    <div class="md:w-1/4 w-full md:block hidden">
        <x-admin-sidebar />
    </div>


  <!-- Main Content -->
  <main class="flex-1 p-6 md:p-6 lg:p-10 xl:p-16">
        <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-white text-center mb-6">
            Welcome, {{ $id->name }}
        </h2>

        <h2 class="text-lg md:text-xl lg:text-2xl font-semibold text-white text-center mb-4">
            Users List
        </h2>
  
        <!-- Search User Table -->
        <div class="overflow-x-auto">
          <x-search-user-table :users="$users">
            <x-slot:slot></x-slot:slot>
          </x-search-user-table>
        </div>

        <!-- Success & Error Messages -->
        @if (session('success'))
          <div class="bg-green-500 text-white p-4 mb-4 rounded-lg text-center">
            {{ session('success') }}
          </div>
        @endif

        @if (session('error'))
          <div class="bg-red-500 text-white p-4 mb-4 rounded-lg text-center">
            {{ session('error') }}
          </div>
        @endif

        <!-- Create New User Form -->
        <div class="mt-6">
            <x-create-new-user-form></x-create-new-user-form>
        </div>     

  </main>
</div>
</div>



@endsection