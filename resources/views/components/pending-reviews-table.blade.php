<!-- Pending Reviews Title -->
<h2 class="text-2xl font-semibold text-white mb-4 w-full text-center">Pending Reviews</h2>

<!-- Full-Screen Reviews Table -->
<div class="w-full flex-grow bg-black rounded-lg shadow-lg overflow-hidden">
    <table class="w-full border-collapse">
        <!-- Table Header -->
        <thead>
            <tr class="bg-blue-600 text-white text-left">
                <th class="p-4">Review</th>
                <th class="p-4">Film Name</th>
                <th class="p-4">Rating</th>
                <th class="p-4">User ID</th>
                <th class="p-4 text-center">Actions</th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody class="text-white">
            <tr class="border-b border-gray-700">
                <td class="p-4">Amazing movie, loved it!</td>
                <td class="p-4">Inception</td>
                <td class="p-4">5/5</td>
                <td class="p-4">User123</td>
                <td class="p-4 flex justify-center space-x-2">
                    <x-approve-button>
                    </x-approve-button>
                    <x-edit-button>
                    </x-edit-button>
                    <x-delete-button>
                    </x-delete-button>
                    <!-- <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Approve</button>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button> -->
                </td>
            </tr>
            <tr class="border-b border-gray-700">
                <td class="p-4">Best Batman movie!</td>
                <td class="p-4">The Dark Knight</td>
                <td class="p-4">4.8/5</td>
                <td class="p-4">User456</td>
                <td class="p-4 flex justify-center space-x-2">
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Approve</button>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>