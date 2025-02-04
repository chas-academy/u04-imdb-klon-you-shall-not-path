<div class="mt-8 p-6 bg-white rounded-lg shadow-lg max-w-4xl ml-12">

    <!-- update username form -->
<form name="username-settings-update" id="username-settings-update" method="post" action class="flex items-center space-x-4">
    @csrf
    
    <!-- user Name -->
    <div class="form-group">
        <label name="">Username</label>
        <input type="text" placeholder="Your current username" id="userName" name="userName" class="p-3 border rounded w-full" required="">
    </div>

    <!-- update user Name -->
    <div class="form-group">
        <label name="">New username</label>
        <input type="text" placeholder="Type new username" id="newUserName" name="newUserName" class="p-3 border rounded w-full" required="">
    </div>

    <!-- Submit Button (Centered) -->
    <div class="col-span-2 flex justify-center">
        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Update Username</button>
    </div>
</form>

    <!-- update email form -->
<form name="email-settings-update" id="email-settings-update" method="post" action class="flex items-center space-x-4">
    @csrf

    <!-- email -->
    <div class="form-group">
        <label name="">Email</label>
        <input type="text" placeholder="Your current email" id="email" name="email" class="p-3 border rounded w-full" required="">
    </div>

    <!-- update email -->
    <div class="form-group">
        <label name="">New email</label>
        <input type="text" placeholder="Type new email" id="newEmail" name="newEmail" class="p-3 border rounded w-full" required="">
    </div>

    <!-- Submit Button (Centered) -->
    <div class="col-span-2 flex justify-center">
        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Update Email adress</button>
    </div>
</form>

    <!-- request new password form -->
<form name="password-update" id="password-update" method="post" action class="flex items-center space-x-4">
    @csrf

    <!-- password -->
    <div class="form-group">
        <label name="">Password</label>
        <input type="text" placeholder="Your current password" id="password" name="password" class="p-3 border rounded w-full" required="">
    </div>

    <!-- update password -->
    <div class="form-group">
        <label name="">New password</label>
        <input type="text" placeholder="Type new password" id="newPassword" name="newPassword" class="p-3 border rounded w-full" required="">
    </div>

    <!-- Submit Button (Centered) -->
    <div class="col-span-2 flex justify-center">
        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Update Password</button>
    </div>
</form>

</div>