<x-guest-layout>
    <h1 class="absolute top-[120px] left-1/2 -translate-x-1/2 text-5xl text-white tracking-wide uppercase">
        You Shall Watch
    </h1>

    <div class="flex min-h-screen pt-8 pb-12 items-center justify-center pt-[140px]">
        <div class="w-full max-w-md h-auto p-8 rounded-2xl shadow-lg mx-auto bg-blue-900">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Sign in</h2>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-lg font-medium text-white">Name</label>
                    <input type="text" name="name" required 
                        class="mt-1 block w-full px-4 py-2 bg-transparent text-black border-4 border-gray-300 rounded-lg shadow-sm focus:ring-blue-400 focus:border-blue-400 backdrop-blur-md">
                </div>

                <div>
                    <label for="password" class="block text-lg font-medium text-white">Password</label>
                    <input type="password" name="password" required 
                        class="mt-1 block w-full px-4 py-2 bg-transparent text-black border-4 border-gray-300 rounded-lg shadow-sm focus:ring-blue-400 focus:border-blue-400 backdrop-blur-md">
                </div>

                <div class="flex justify-center">
                    <button type="submit" 
                            class="w-48 bg-white hover:bg-indigo-700 text-black font-bold py-2 px-4 rounded-full shadow-md transition duration-300">
                            Sign in
                    </button>
                </div>    
                <div class="flex justify-center">
                    <button type="submit" 
                            class="w-48 bg-white hover:bg-indigo-700 text-black font-bold py-2 px-4 rounded-full shadow-md transition duration-300">
                            Forgot password
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
