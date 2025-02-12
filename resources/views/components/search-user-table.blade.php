<!-- Search Section -->
<div class="mb-4 text-center">
    <form class="flex flex-wrap justify-center gap-4" action="{{ route('users.search') }}" method="POST">
        @csrf
        <input type="text" placeholder="Search by Name" class="p-3 border rounded w-full md:w-1/3" id="search" name="search" value="{{ request('search') }}">
        <button type="submit" class="bg-blue-600 text-black px-6 py-3 rounded hover:bg-blue-700">Search</button>
    </form>
</div>
            
<!-- Users Table -->
    <!-- <div class="w-full bg-white rounded-lg shadow-lg overflow-hidden mb-6"> -->
    <div class="bg-[linear-gradient(145deg,#0b1a3a,#142d5c)] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-[10px] p-5 text-white mb-10 mt-5 overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <!-- <tr class="bg-blue-600 text-black"> -->
                <tr class="bg-[linear-gradient(145deg,#0b1a3a,#142d5c)] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-[10px] p-5 text-white">
                    <!-- <th class="p-4" style="display: none;">User ID</th> -->
                    <th class="p-4">Name</th>
                    <th class="p-4">Role</th>
                    <th class="p-4 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-white">
                @forelse ($users as $user)
                    <tr class="border-b hover:bg-gray-800">
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
                        <td colspan="3" class="p-4 text-center text-white">No Users Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>