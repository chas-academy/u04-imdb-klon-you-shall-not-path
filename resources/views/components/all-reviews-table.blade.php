<h2 class="text-2xl font-semibold text-white mb-4 w-full text-center">All Reviews</h2>

<!-- Responsive Table for Larger Screens -->
<div class="hidden md:block w-full bg-black rounded-lg shadow-lg overflow-x-auto">
    @if(session('success'))
    <div class="p-4 mb-4 text-green-600 bg-green-200 rounded">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="p-4 mb-4 text-red-600 bg-red-200 rounded">
        {{ session('error') }}
    </div>
    @endif
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-blue-600 text-white text-left">
                <th class="p-4">Review</th>
                <th class="p-4">Film Name</th>
                <th class="p-4">Votes</th>
                <th class="p-4">Username</th>
                <th class="p-4">awdaw</th>

            </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($reviews as $review)
            <tr class="border-b border-gray-700">
                <td class="p-4 truncate max-w-xs">{{ $review->review }}</td>
                <td class="p-4">{{ $review->movie->title }}</td>

                {{-- Display multiple votes as comma-separated --}}
                <td class="p-4">
                    {{ $review->votes->pluck('vote')->implode(', ') }}/10
                </td>
                <td class="p-4">{{ $review->user->name }}</td>
                <td class="p-4 flex flex-row gap-2">
                    <x-approve-button :review="$review" class="w-full" />
                    <x-edit-review-button :review="$review" class="w-full" />
                    <x-delete-review-button :review="$review" class="w-full" />
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Card Layout for Mobile -->
<div class="md:hidden space-y-4">
    @foreach ($reviews as $review)
    <div class="bg-gray-900 p-4 rounded-lg shadow-lg text-white">
        <p class="font-semibold">Review: <span class="font-normal">{{ $review->review }}</span></p>
        <p class="font-semibold">Film: <span class="font-normal">{{ $review->title }}</span></p>
        <p class="font-semibold">Rating: <span class="font-normal">{{ $review->positive_vote_count }}/5</span></p>
        <p class="font-semibold">User ID: <span class="font-normal">{{ $review->user_id }}</span></p>
        
        <div class="mt-3 flex flex-col space-y-2">
            <x-approve-button :review="$review" class="w-full" />
            <x-edit-review-button :review="$review" class="w-full" />
            <x-delete-review-button :review="$review" class="w-full" />
        </div>
    </div>
    @endforeach
</div>