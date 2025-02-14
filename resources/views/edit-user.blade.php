@extends('layouts.app')

@section('content')
<body>
    <div class="flex h-full">
        <div class="flex h-screen w-full">
            <!-- Sidebar -->
            <x-merge-sidebar>
            </x-merge-sidebar>

            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                <h2 class="text-2xl font-semibold text-white mb-4 text-center">Edit User</h2>

                <!-- Form Container -->
                <div class="flex justify-center">
                    <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg overflow-hidden p-6">
                        <form action="{{ route('user.update', ['user' => $user->user_id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-col space-y-4">

                                <!-- Name Field -->
                                <div class="flex flex-col">
                                    <label for="name" class="text-lg font-semibold text-gray-700 mb-2">Name</label>
                                    <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $user->name }}">
                                </div>

                                <!-- Role Field -->
                                <div class="flex flex-col">
                                    <label for="role" class="text-lg font-semibold text-gray-700 mb-2">Role</label>
                                    <select name="role" id="role" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
 

                                <!-- Update Button and Cancel Button -->
                                <div class="flex justify-end">
                                    <button type="submit" class="mx-2 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                        Update
                                    </button>
                                    <a href="{{ route('admin-settings') }}" class="mx-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                        @if (session('success'))
                            <div class="my-4 bg-green-500 text-white p-4 mb-4 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="my-4 bg-red-500 text-white p-4 mb-4 rounded-lg">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
@endsection