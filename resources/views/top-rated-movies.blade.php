{{-- the Header --}}
@include('layouts.partials.header')

{{-- Main Content: Large Card with a List of Movies --}}
<div class="container mx-auto mt-10 flex justify-center">
    <div class="bg-[#012169] text-white p-8 rounded-lg shadow-lg w-full max-w-5xl"> {{-- Increased max width --}}
        <h1 class="text-3xl font-bold text-center mb-6">Top Rated Movies</h1>
        
        @php
            // Hardcoded movies for now
            $movies = [
                ['title' => 'The Shawshank Redemption', 'overview' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'rating' => 9.3, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 1],
                ['title' => 'The Godfather', 'overview' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'rating' => 9.2, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 2],
                ['title' => 'The Dark Knight', 'overview' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.', 'rating' => 9.0, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 3],
                ['title' => 'Pulp Fiction', 'overview' => 'The lives of two mob hitmen, a boxer, a gangster’s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.', 'rating' => 8.9, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 4],
                ['title' => 'Schindler’s List', 'overview' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce.', 'rating' => 8.9, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 5],
                ['title' => 'The Lord of the Rings: The Return of the King', 'overview' => 'Gandalf and Aragorn lead the World of Men against Sauron’s army to draw his gaze from Frodo and Sam as they approach Mount Doom.', 'rating' => 8.9, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 6],
                ['title' => 'Fight Club', 'overview' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.', 'rating' => 8.8, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 7],
                ['title' => 'Forrest Gump', 'overview' => 'The presidencies of Kennedy and Johnson, Vietnam, Watergate, and other historical events unfold from the perspective of a man with a low IQ.', 'rating' => 8.8, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 8],
                ['title' => 'Inception', 'overview' => 'A thief who enters the dreams of others to steal their secrets is given a task to plant an idea in the mind of a CEO.', 'rating' => 8.7, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 9],
                ['title' => 'The Matrix', 'overview' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', 'rating' => 8.7, 'poster' => 'https://via.placeholder.com/120x180', 'id' => 10],
            ];
        @endphp

        <ul class="space-y-4">
            @foreach($movies as $index => $movie)
            <li class="flex items-center p-6 bg-[#021a4b] rounded-lg shadow-md">
                {{-- Movie Poster --}}
                <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }} Poster" class="w-[120px] h-[180px] object-cover rounded-lg mr-6">
                
                {{-- Movie Details --}}
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold">{{ $index + 1 }}. {{ $movie['title'] }}</h2>
                    <p class="text-md opacity-90 mt-2">{{ $movie['overview'] }}</p> {{-- Longer overview visible --}}
                </div>
                
                {{-- Actions --}}
                <div class="flex flex-col space-y-2 ml-6">
                    <span class="text-yellow-400 font-bold text-lg">{{ $movie['rating'] }}/10</span>
                    <button class="bg-yellow-400 text-black px-5 py-2 rounded-lg hover:bg-yellow-500 transition">Rate</button>
                    <a href="#" class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">More Info</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

{{-- Include the Footer --}}
@include('layouts.partials.footer')