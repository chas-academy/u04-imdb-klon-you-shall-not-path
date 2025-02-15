<!-- <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button> -->

<form action="{{ route('user.destroy', ['user' => $user->user_id]) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
        Delete
    </button>
</form>