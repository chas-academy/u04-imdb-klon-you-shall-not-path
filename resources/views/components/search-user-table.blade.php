<!-- Search Section -->
<div class="mb-4 text-center">
    <form class="flex justify-center gap-4" action="{{ route('users.search') }}" method="POST">
        @csrf
        <input type="text" placeholder="Search by Name" class="p-3 border rounded w-1/3" id="search" name="search" value="{{ request('search') }}">
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
                @forelse ($users as $user)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-4">{{ $user->name }}</td>
                        <td class="p-4">{{ $user->role }}</td>
                        <td class="p-4 text-center">
                            <!-- Pass the user object to the edit-button component -->
                            <x-edit-user-button :user="$user" />
                            <x-delete-user-button :user="$user" />
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