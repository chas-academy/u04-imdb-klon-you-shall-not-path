@props(['user'])

<a href="{{ route('user.edit', ['user' => $user->user_id]) }}">
    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
</a>