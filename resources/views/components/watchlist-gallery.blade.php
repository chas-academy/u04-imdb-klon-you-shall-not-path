<div class="w-full px-4">
    <h2 class="text-2xl font-semibold text-white mb-4">Your Watchlist</h2>

    <!-- Responsive Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @for ($i = 0; $i < 9; $i++)
            <div>
                <img src="https://via.placeholder.com/300" alt="Gallery Image" class="rounded-lg shadow-lg w-full">
            </div>
        @endfor
    </div>
</div>