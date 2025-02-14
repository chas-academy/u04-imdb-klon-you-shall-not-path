<div class="w-full bg-blue-500 rounded-lg shadow-lg overflow-hidden mb-6">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-4 bg-gray-800 text-white text-left">Title</th>
                <th class="p-4 bg-gray-800 text-white text-center">Select</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr class="border-b bg-blue-800 hover:bg-blue-500">
                    <td class="p-4">{{ $movie->title }}</td>
                    <td class="p-4 text-center">
                        <input type="checkbox" name="selected_movies[]" value="{{ $movie->movie_id }}" class="w-6 h-6 rounded-md border-white bg-transparent">
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center text-white">No Movies Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>