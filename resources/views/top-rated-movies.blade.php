{{-- the Header --}}
@include('layouts.partials.header')

{{-- Main Content: Large Card with a List of Movies --}}
<x-movie-card-component :movies="$movies">
    Top Rated Movies
</x-movie-card-component>


{{-- Include the Footer --}}
@include('layouts.partials.footer')