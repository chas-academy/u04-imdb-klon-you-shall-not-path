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
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', [PageController::class, 'homepage'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/watchlist', [TestController::class, 'showWatchList'])->name('watchlist');
Route::get('/create_watchlist', [TestController::class, 'create_watchlist'])->name('create_watchlist');


Route::get('/specificmovie', [SpecificMovieController::class, 'show']);



Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/genre', [GenreController::class, 'index'])->name('genre');

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

Route::get('/actors', [ActorController::class, 'ShowActor'])->name('actors');

Route::get('/actors/{actor_id}', [ActorController::class, 'ShowSpecificActor'])->name('actors.id');

// Route::get('/specificactor', function () {
//     return view('specificactor');
// })->name('specificactor');




Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'ShowAdminDashboard'])->name('admin-dashboard');
    Route::get('/admin-settings', [AdminController::class, 'ShowAdminSettings'])->name('admin-settings');
});

// Route::get('/admin-dashboard', function () {
//     return view ('admin-dashboard');
// })->middleware(['auth'])->name('admin-dashboard');

// Route::get('/admin-settings', function () {
//     return view ('admin-settings');
// })->middleware(['auth'])->name('admin_settings');


Route::get('/user-dashboard', function () {
    return view ('user-dashboard');
})->middleware(['auth'])->name('user-dashboard');

Route::get('/user-settings', function () {
    return view ('user-settings');
})->middleware(['auth'])->name('user-settings');


Route::middleware('auth')->group(function () {
    Route::post('/create_new_user', [RegisteredUserController::class, 'storeAdmin'])->name('create_new_user');
});













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
