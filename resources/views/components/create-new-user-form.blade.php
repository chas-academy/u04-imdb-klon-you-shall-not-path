<!-- Create New User -->
<h2 class="text-2xl font-semibold text-white mb-4 text-center">Create New User</h2>

<!-- <div class="p-6 bg-white rounded-lg shadow-lg w-full mx-auto"> -->
<div class="bg-[linear-gradient(145deg,#0b1a3a,#142d5c)] shadow-[5px_5px_15px_#0a1329,-5px_-5px_15px_#1c3e70] rounded-[10px] p-5 text-white">
    <form name="create-new-admin-user" id="create-new-admin-user" method="post" action="{{ route('create_new_user') }}" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"
          class="flex w-full gap-6">
        @csrf

        <!-- Name -->
        <div class="flex-1">
            <label class="block text-white font-semibold mb-2">Name</label>
            <input type="text" placeholder="Full Name" id="name" name="name" class="p-3 border rounded w-full bg-gray-800" required>
        </div>

        <!-- Email Selection -->
        <div class="flex-1">
            <label class="block text-white font-semibold mb-2">Email</label>
            <input type="email" placeholder="Email Adress" name="email" required id="email" class="p-3 border rounded w-full bg-gray-800">
        </div>

        <!-- Password Selection -->
        <div class="flex-1">
            <label class="block text-white font-semibold mb-2">Password</label>
            <input type="password" placeholder="password" name="password" required id="password" class="p-3 border rounded w-full bg-gray-800">
        </div>

        <!-- Password Confirmation -->
        <div class="flex-1">
            <label class="block text-white font-semibold mb-2">Confirm Password</label>
            <input type="password" placeholder="password" name="password_confirmation" required id="password_confirmation" class="p-3 border rounded w-full bg-gray-800">
        </div>


        <!-- Role Selection -->
        <div class="flex-1">
            <label class="block text-white font-semibold mb-2">Role</label>
            <select name="role" id="role" class="p-3 border rounded w-full bg-gray-800">
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