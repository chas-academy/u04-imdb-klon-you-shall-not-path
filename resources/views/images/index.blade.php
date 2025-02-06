<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
        @if(session('success'))
            <p class="text-green-600 text-center font-semibold">{{ session('success') }}</p>
        @endif

        <h1 class="text-2xl font-bold text-center mb-4">Upload an Image</h1>

        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="name" required class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg p-2">
            <input type="file" name="image" required class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg p-2">
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">Upload Image</button>
        </form>

        <h2 class="text-xl font-semibold mt-6 mb-3">Uploaded Images:</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach($images as $image)
                <div class="bg-gray-200 p-2 rounded-lg">
                    <img src="{{ url('storage/' . $image->file_path) }}" alt="Uploaded Image" class="w-full h-32 object-cover rounded-lg">
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>