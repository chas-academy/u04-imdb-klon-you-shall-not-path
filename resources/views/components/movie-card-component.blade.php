<div class="container mx-auto mt-10 flex justify-center">
    <div class="bg-[#012169] text-white p-8 rounded-lg shadow-lg w-full max-w-5xl"> {{-- Increased max width --}}
        <h1 class="text-3xl font-bold text-center mb-6">{{$slot}}</h1>
        
        <ul class="space-y-4">
            @foreach($movies as $movie)
            <li class="flex items-center p-6 bg-[#021a4b] rounded-lg shadow-md">
                {{-- Movie Poster --}}
                <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }} Poster" class="w-[120px] h-[180px] object-cover rounded-lg mr-6">
                
                {{-- Movie Details --}}
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold">{{ $movie['title'] }}</h2>
                    <p class="text-md opacity-90 mt-2">{{ $movie['overview'] }}</p> {{-- Longer overview visible --}}
                </div>
                
                {{-- Actions --}}
                <div class="flex flex-col space-y-2 ml-6">
                    <span class="text-yellow-400 font-bold text-lg">{{ $movie['vote_avr'] }}/10</span>
                    <button class="bg-yellow-400 text-black px-5 py-2 rounded-lg hover:bg-yellow-500 transition">Rate</button>
                    <a href="#" class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">More Info</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>