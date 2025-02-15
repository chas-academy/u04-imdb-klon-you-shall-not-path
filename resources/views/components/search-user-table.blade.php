<!-- Search Section -->
<div class="mb-4 text-center">
    <form class="flex flex-wrap justify-center gap-4" action="{{ route('users.search') }}" method="POST">
        @csrf
        <input type="text" placeholder="Search by Name" 
               class="p-3 border rounded w-full sm:w-2/3 md:w-1/2 lg:w-1/3 bg-gray-800" 
               id="search" name="search" value="{{ request('search') }}">
        <button type="submit" 
                class="bg-blue-600 text-black px-6 py-3 rounded hover:bg-blue-700 w-full sm:w-auto">
            Search
        </button>
    </form>
</div>

<!-- Users Table -->

<div class="w-full max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden mb-6 overflow-x-auto">
    <table class="w-full min-w-max text-left border-collapse">
        <thead>
            <tr class="bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-md rounded-lg p-5 text-white">
                <th class="p-4">Name</th>
                <th class="p-4">Role</th>
                <th class="p-4 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="text-white bg-gray-700">
            @forelse ($users as $user)
                <tr class="text-white">
                    <td class="p-4">{{ $user->name }}</td>
                    <td class="p-4">{{ $user->role }}</td>
                    <td class="p-4 text-center">
                        <div class="flex flex-wrap justify-center space-x-2">
                            <!-- Edit Button -->
                            <x-edit-user-button :user="$user" />
                            <!-- Delete Button -->
                            <x-delete-user-button :user="$user" />
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center text-gray-500">No Users Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>