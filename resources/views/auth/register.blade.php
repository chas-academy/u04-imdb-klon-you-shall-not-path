<x-guest-layout>
    <div class="flex min-h-screen items-center justify-center">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-5xl font-bolt">
                You Shall Watch
            </h1>
        
            <div class="w-800 p-16 rounded-2xl shadow-lg mx-auto">
                <h2 class="text-2xl font-bold text-center text-white mb-6">Register</h2>

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-lg font-medium text-white">Name</label>
                        <input type="text" name="name" required 
                            class="mt-1 block w-full px-4 py-2 bg-transparent border-4 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="email" class="block text-lg font-medium text-white">Email</label>
                        <input type="email" name="email" required 
                            class="mt-1 block w-full px-4 py-2 bg-transparent border-4 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="password" class="block text-lg font-medium text-white">Password</label>
                        <input type="password" name="password" required 
                            class="mt-1 block w-full px-4 py-2 bg-transparent border-4 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-lg font-medium text-white">Confirm Password</label>
                        <input type="password" name="password_confirmation" required 
                            class="mt-1 block w-full px-4 py-2 bg-transparent border-4 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" 
                            class="w-48 bg-white hover:bg-indigo-700 text-black font-bold py-2 px-4 rounded-full shadow-md transition duration-300">
                            Register
                        </button>
                    </div>
                </form>

                <p class="text-center text-lg text-white mt-4">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-black hover:text-indigo-800">Login here</a>
                </p>
            </div>
        
        </div>  
    </div>
</x-guest-layout>

