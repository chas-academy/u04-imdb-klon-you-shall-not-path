<!-- Create New User -->
<h2 class="text-3xl font-semibold text-white mb-6 text-center">Create New Movie</h2>

<div class="bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-lg rounded-lg p-6 lg:p-10 text-white max-w-4xl mx-auto">
    <form name="create-new-admin-user" id="create-new-admin-user" method="post" action="{{ route('new.movie') }}" 
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @csrf

        <!-- Name -->
        <div>
            <label class="block text-white font-semibold mb-2">Name</label>
            <input type="text" placeholder="Full Name" id="name" name="name" 
                   class="p-4 border rounded w-full bg-gray-800" required>
        </div>

        <!-- Email -->
        <div>
            <label class="block text-white font-semibold mb-2">Email</label>
            <input type="email" placeholder="Email Address" name="email" required id="email" 
                   class="p-4 border rounded w-full bg-gray-800">
        </div>

        <!-- Password -->
        <div>
            <label class="block text-white font-semibold mb-2">Password</label>
            <input type="password" placeholder="Password" name="password" required id="password" 
                   class="p-4 border rounded w-full bg-gray-800">
        </div>

        <!-- Confirm Password -->
        <div>
            <label class="block text-white font-semibold mb-2">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" required id="password_confirmation" 
                   class="p-4 border rounded w-full bg-gray-800">
        </div>

        <!-- Role Selection -->
        <div>
            <label class="block text-white font-semibold mb-2">Role</label>
            <select name="role" id="role" class="p-4 border rounded w-full bg-gray-800">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <!-- Submit Button (Centered on Mobile) -->
        <div class="flex justify-center md:justify-start items-end">
            <x-create-movie-button></x-create-movie-button>
        </div>
    </form>
</div>