@props(['title', 'subtitle', 'listbar'])

<aside class="w-1/4 bg-blue-950 p-6 text-white">
    <h2 class="mt-6 text-gray-400">{{$subtitle}}</h2>
    <div>{{ $listbar }}</div>
    <div class="mt-4 flex items-center">
    </div>
</aside>