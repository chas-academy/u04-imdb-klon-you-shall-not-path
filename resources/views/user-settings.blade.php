@extends('layouts.app')

@section('content')
<body>
    <div class="flex h-full">

    <div class="flex h-screen">
        {{-- Sidebar --}}
        <aside class="w-1/4 bg-blue-600 text-white p-6">
            <h2 class="mb-6 ml-2 text-black 3xl">WATCHLIST</h2>
            <ul class="space-y-4">
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Home</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Profile Settings</a></li>
                <li><a href="#" class="block hover:bg-blue-500 p-2 rounded">Create watchlist</a></li>
            </ul>
        </aside>

        <!-- Main Content Area (Right Column) -->
        <main class="flex-1 p-6 flex flex-col items-center">
        <div class=""> 
            <!-- H1 Centered at the Top -->
            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Welcome, John Doe</h2>
    
            <div class="flex w-full items-start">
            
                <!-- Profile Image -->
                <div class="w-1/3 flex flex-col items-center space-y-4">
                    <img src="https://via.placeholder.com/300" 
                         alt="Profile Picture" 
                        class="rounded-lg shadow-lg w-64 h-64 object-cover">
    
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                        Change Profile Image
                    </button>
                </div>
            
            <div class="mt-8 p-6 bg-white rounded-lg shadow-lg max-w-4xl ml-12">

                <!-- update username form -->
                <form name="username-settings-update" id="username-settings-update" method="post" action class="flex items-center space-x-4">
                    @csrf

                     <!-- user Name -->
                    <div class="form-group">
                        <label name="">Username</label>
                        <input type="text" placeholder="Your current username" id="userName" name="userName" 
                                class="p-3 border rounded w-full" required="">
                    </div>

                    <!-- update user Name -->
                    <div class="form-group">
                        <label name="">New username</label>
                        <input type="text" placeholder="Type new username" id="newUserName" name="newUserName" 
                                class="p-3 border rounded w-full" required="">
                    </div>

                    <!-- Submit Button (Centered) -->
                    <div class="col-span-2 flex justify-center">
                        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
                        Update Username
                        </button>
                    </div>
                </form>

                <!-- update email form -->
                <form name="email-settings-update" id="email-settings-update" method="post" action class="flex items-center space-x-4">
                    @csrf

                     <!-- email -->
                    <div class="form-group">
                        <label name="">Email</label>
                        <input type="text" placeholder="Your current email" id="email" name="email" 
                                class="p-3 border rounded w-full" required="">
                    </div>

                    <!-- update email -->
                    <div class="form-group">
                        <label name="">New email</label>
                        <input type="text" placeholder="Type new email" id="newEmail" name="newEmail" 
                                class="p-3 border rounded w-full" required="">
                    </div>

                    <!-- Submit Button (Centered) -->
                    <div class="col-span-2 flex justify-center">
                        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
                        Update Email adress
                        </button>
                    </div>
                </form>

                <!-- request new password form -->
                <form name="password-update" id="password-update" method="post" action class="flex items-center space-x-4">
                    @csrf

                     <!-- password -->
                    <div class="form-group">
                        <label name="">Password</label>
                        <input type="text" placeholder="Your current password" id="password" name="password" 
                                class="p-3 border rounded w-full" required="">
                    </div>

                    <!-- update password -->
                    <div class="form-group">
                        <label name="">New password</label>
                        <input type="text" placeholder="Type new password" id="newPassword" name="newPassword" 
                                class="p-3 border rounded w-full" required="">
                    </div>

                    <!-- Submit Button (Centered) -->
                    <div class="col-span-2 flex justify-center">
                        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
                        Update Password
                        </button>
                    </div>
                </form>

        </div>

        </div>
        </main>
    </div>
</body>         
@endsection