@extends('layouts.app')

@section('content')
<body class="h-screen bg-gray-900">
    <div class="flex h-full">
        
        <!-- Sidebar -->
        <aside class="w-1/4 bg-blue-600 text-white p-6">
            <ul class="space-y-4">
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Home</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Profile Settings</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Reviews</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Films</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Users</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, John Doe</h2>
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Users List</h2>

             <!-- Search Section -->
             <div class="mb-4 text-center">
                <form class="flex justify-center gap-4">
                    <input type="text" placeholder="Search by Name" class="p-3 border rounded w-1/3" id="search" name="search">
                    <button type="submit" class="bg-blue-600 text-black px-6 py-3 rounded hover:bg-blue-700">
                        Search
                    </button>
                </form>
            </div>
            
            <!-- Users Table -->
            <div class="w-full bg-white rounded-lg shadow-lg overflow-hidden mb-6">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-blue-600 text-black">
                            <th class="p-4" style="display: none;">User ID</th>
                            <th class="p-4">First Name</th>
                            <th class="p-4">Last Name</th>
                            <th class="p-4">Role</th>
                            <th class="p-4 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-4" style="display: none;">1</td> <!-- Hidden User ID -->
                            <td class="p-4">John</td>
                            <td class="p-4">Doe</td>
                            <td class="p-4">Admin</td>
                            <td class="p-4 text-center">
                                <button class="bg-yellow-500 text-black px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                                <button class="bg-red-500 text-black px-4 py-2 rounded hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-4" style="display: none;">1</td> <!-- Hidden User ID -->
                            <td class="p-4">Jane</td>
                            <td class="p-4">Smith</td>
                            <td class="p-4">User</td>
                            <td class="p-4 text-center">
                                <button class="bg-yellow-500 text-black px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                                <button class="bg-red-500 text-black px-4 py-2 rounded hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Create New User -->
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Create New User</h2>

            <div class="p-6 bg-white rounded-lg shadow-lg w-full mx-auto">
                <form name="create-new-admin-user" id="create-new-admin-user" method="post" action="" 
                      class="flex w-full gap-6">
                    @csrf

                    <!-- First Name -->
                    <div class="flex-1">
                        <label class="block text-gray-700 font-semibold mb-2">First Name</label>
                        <input type="text" placeholder="First Name" id="firstName" name="firstName" 
                               class="p-3 border rounded w-full" required>
                    </div>

                    <!-- Last Name -->
                    <div class="flex-1">
                        <label class="block text-gray-700 font-semibold mb-2">Last Name</label>
                        <input type="text" placeholder="Last Name" id="lastName" name="lastName" 
                               class="p-3 border rounded w-full" required>
                    </div>

                    <!-- Role Selection -->
                    <div class="flex-1">
                        <label class="block text-gray-700 font-semibold mb-2">Role</label>
                        <select name="role" id="role" class="p-3 border rounded w-full">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex-1 flex items-end">
                        <button type="submit" class="bg-blue-600 text-black px-6 py-3 rounded hover:bg-blue-700 w-full">
                            Create User
                        </button>
                    </div>
                </form>
            </div>

        </main>
    </div>
</body>
@endsection