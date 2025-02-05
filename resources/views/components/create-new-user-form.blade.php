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
            <x-create-button>
            </x-create-button>
            <!-- <button type="submit" class="bg-blue-600 text-black px-6 py-3 rounded hover:bg-blue-700 w-full">
                Create User
            </button> -->
        </div>
    </form>
</div>