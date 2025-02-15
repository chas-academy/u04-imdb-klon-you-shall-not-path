<div class="mt-8 p-6 rounded-lg max-w-4xl ml-12">

    <!-- update username form -->
    <form name="username-settings-update" id="username-settings-update" method="post" action="{{ route('user.profile.update') }}" 
    class="bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-md rounded-lg p-5 text-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
        @csrf

        <h2 class="text-xl font-bold text-center mb-4">Update Your Settings</h2>

        <!-- Display success or error messages -->
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Current Username -->
            <div class="form-group">
                <label class="block text-sm font-medium mb-1">Your current username</label>
                <div class="p-3 border border-gray-600 rounded w-full bg-gray-800">{{ Auth::user()->name }}</div>
            </div>

            <!-- New Username (Optional) -->
            <div class="form-group">
                <label class="block text-sm font-medium mb-1">New username (optional)</label>
                <input type="text" placeholder="Type new username" id="username" name="username" class="p-3 border border-gray-600 rounded w-full bg-gray-800 text-white focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <!-- Current Email -->
            <div class="form-group">
                <label class="block text-sm font-medium mb-1">Your current email</label>
                <div class="p-3 border border-gray-600 rounded w-full bg-gray-800">{{ Auth::user()->email }}</div>
            </div>

            <!-- New Email (Optional) -->
            <div class="form-group">
                <label class="block text-sm font-medium mb-1">New email (optional)</label>
                <input type="email" placeholder="Type new email" id="email" name="email" class="p-3 border border-gray-600 rounded w-full bg-gray-800 text-white focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <!-- New Password (Optional) -->
            <div class="form-group">
                <label class="block text-sm font-medium mb-1">New password (optional)</label>
                <input type="password" placeholder="Type new password" id="password" name="password" class="p-3 border border-gray-600 rounded w-full bg-gray-800 text-white focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Confirm Password (Only If Changing) -->
            <div class="form-group">
                <label class="block text-sm font-medium mb-1">Confirm new password</label>
                <input type="password" placeholder="Confirm new password" id="confirm-password" name="password_confirmation" class="p-3 border border-gray-600 rounded w-full bg-gray-800 text-white focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 mx-4 rounded-lg font-bold hover:bg-blue-700 transition duration-300">
                Update
            </button>
            <x-delete-user-button :user=$user/>
        </div>
    </form>



</div>