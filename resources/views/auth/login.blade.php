<x-guest-layout>
    <div class="flex min-h-screen items-center justify-center">
        <div class="w-full max-w-md p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-center text-black-800 mb-6">Log in</h2>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-white">Name</label>
                    <input type="text" name="name" required 
                        class="mt-1 block w-full px-4 py-2 bg-transparent text-black border-4 border-gray-300 rounded-lg shadow-sm focus:ring-blue-400 focus:border-blue-400 backdrop-blur-md">
                    </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" required 
                        class="mt-1 block w-full px-4 py-2 bg-transparent text-black border-4 border-gray-300 rounded-lg shadow-sm focus:ring-blue-400 focus:border-blue-400 backdrop-blur-md">
                    </div>

                <button type="submit" 
                    class="w-full bg-white hover:bg-indigo-700 text-black font-bold py-2 px-4 rounded-lg shadow-md transition duration-300">
                    Sign In
                </button>
            </form>

            @if ($errors->any())
                <div class="mb-4">
                    @foreach ($errors->all() as $error)
                        <div class="text-red-500 text-sm">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            
        </div>
    </div>
</x-guest-layout>