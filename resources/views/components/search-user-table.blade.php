<!-- Search Section -->
<div class="mb-4 text-center">
    <form class="flex justify-center gap-4">
        <input type="text" placeholder="Search by Name" class="p-3 border rounded w-1/3" id="search" name="search">
        <button type="submit" class="bg-blue-600 text-black px-6 py-3 rounded hover:bg-blue-700">Search</button>
    </form>
</div>
            
<!-- Users Table -->
    <div class="w-full bg-white rounded-lg shadow-lg overflow-hidden mb-6">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-blue-600 text-black">
                    <!-- <th class="p-4" style="display: none;">User ID</th> -->
                    <th class="p-4">Name</th>
                    <th class="p-4">Role</th>
                    <th class="p-4 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($users as $user)
                <tr class="border-b hover:bg-gray-100">
                    <!-- <td class="p-4" style="display: none;"></td>  Hidden User ID -->
                    <td class="p-4">{{ $user->name }}</td>
                    <td class="p-4">{{ $user->role }}</td>
                    <td class="p-4 text-center">
                        <x-edit-button>
                        </x-edit-button>
                        <x-delete-button>
                        </x-delete-button>
                        <!-- <button class="bg-yellow-500 text-black px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                        <button class="bg-red-500 text-black px-4 py-2 rounded hover:bg-red-600">Delete</button> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>