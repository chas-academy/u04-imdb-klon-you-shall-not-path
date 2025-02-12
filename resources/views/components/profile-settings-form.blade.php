<div class="bg-gradient-to-br from-[#0b1a3a] to-[#142d5c] shadow-md rounded-lg p-5 text-white space-y-6 w-full">

    <!-- Update Username Form -->
<form name="username-settings-update" id="username-settings-update" method="post" action="" class="flex items-center space-x-4">
    @csrf
    
    <!-- Current Username -->
    <div class="w-full">
        <label class="block text-sm font-medium">Current Username</label>
        <input type="text" placeholder="Your current username" id="userName" name="userName" class="p-3 border rounded w-full bg-gray-800" required="">
    </div>

    <!-- New Username -->
    <div class="w-full">
        <label class="block text-sm font-medium">New Username</label>
        <input type="text" placeholder="Enter new username" id="newUserName" name="newUserName" class="p-3 border rounded w-full bg-gray-800" required="">
    </div>

    <!-- Submit Button -->
    <div class="w-full flex justify-end md:col-span-1">
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 w-full md:w-auto">Update</button>
    </div>
</form>

    <!-- Update Email Form -->
<form name="email-settings-update" id="email-settings-update" method="post" action="" class="w-full grid grid-cols-1 md:grid-cols-3 gap-4">
    @csrf

    <!-- Current Email -->
    <div class="w-full">
        <label class="block text-sm font-medium">Current Email</label>
        <input type="text" placeholder="Your current email" id="email" name="email" class="p-3 border rounded w-full bg-gray-800" required="">
    </div>

    <!-- New Email -->
    <div class="w-full">
        <label name="">New email</label>
        <input type="text" placeholder="Enter new email" id="newEmail" name="newEmail" class="p-3 border rounded w-full bg-gray-800" required="">
    </div>

    <!-- Submit Button -->
    <div class="w-full flex justify-end md:col-span-1">
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 w-full md:w-auto">Update</button>
    </div>
</form>

    <!-- Update Password Form -->
<form name="password-update" id="password-update" method="post" action="" class="w-full grid grid-cols-1 md:grid-cols-3 gap-4">
    @csrf

    <!-- Current Password -->
    <div class="w-full">
        <label class="block text-sm font-medium">Current Password</label>
        <input type="text" placeholder="Your current password" id="password" name="password" class="p-3 border rounded w-full bg-gray-800" required="">
    </div>

    <!-- New Password -->
    <div class="w-full">
        <label class="block text-sm font-medium">New Password</label>
        <input type="text" placeholder="Enter new password" id="newPassword" name="newPassword" class="p-3 border rounded w-full bg-gray-800" required="">
    </div>

    <!-- Submit Button -->
    <div class="w-full flex justify-end md:col-span-1">
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 w-full md:w-auto">Update</button>
    </div>
</form>

</div>