<div class="w-full bg-blue-500 rounded-lg shadow-lg overflow-hidden mb-6">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-4 text-blue-500 text-left">Title</th>
                <th class="p-4 text-blue-500 text-center">Select</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr class="border-b bg-blue-500 hover:bg-gray-100">
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