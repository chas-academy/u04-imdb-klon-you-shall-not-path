@props(['title', 'subtitle', 'listbar'])

<aside class="w-1/4 h-full bg-blue-950 p-6 text-white w-64">
    <h2 class="mt-6 text-gray-400">{{$subtitle}}</h2>
    <div>{{ $listbar }}</div>
    <div class="mt-4 flex items-center">
        {{ $create }}
    </div>
</aside>