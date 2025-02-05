<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SpecificMovieController;
use App\Http\Controllers\ImageController; // Testing
use Intervention\Image\ImageManager; // Testing
use Illuminate\Support\Facades\Response; // Testing
use Intervention\Image\Drivers\Gd\Driver; // Testing

Route::get('/', [PageController::class, 'homepage'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/watchlist', [TestController::class, 'showWatchList'])->name('watchlist');

Route::get('/specificmovie', [SpecificMovieController::class, 'show']);

Route::get('/specificactor', function () {
    return view('specificactor');
})->name('specificactor');

Route::get('/actor', function () {
    return view('actor');
})->name('actor');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/genre', [GenreController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/top-rated-movies', 'top-rated-movies');

Route::get('/top-rated-movies', [TestController::class, 'showTop'])->name('showTop');

require __DIR__.'/auth.php';


Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('/genre/{title}', [TestController::class, 'show'])->name('genre.movies');



Route::get('/user-dashboard', function () {
    return view ('user-dashboard');
})->name('user-dashboard');

Route::get('/admin-dashboard', function () {
    return view ('admin-dashboard');
})->name('admin-dashboard');

// Route::get('/actors', function () {
//     return view ('actors');
// });

// Route::get('/actorpage', function () {
//     return view ('actorpage');
// });

Route::get('/admin-settings', function () {
    return view ('admin-settings');
})->name('admin_settings');

Route::get('/user-settings', function () {
    return view ('user-settings');
})->name('user_settings');















// Testing

Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images/{id}', [ImageController::class, 'show'])->name('images.show');




Route::get('/test-image', function () {
    // Correct way to initialize ImageManager
    $manager = new ImageManager(new Driver());

    // Create a blank canvas and fill it with red
    $img = $manager->create(300, 200)->fill('#ff0000');

    return Response::make($img->toPng()->save('image/test.png'))->header('Content-Type', 'image/png');
});
