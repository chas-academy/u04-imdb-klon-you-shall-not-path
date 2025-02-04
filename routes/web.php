<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/watchlist', function () {
    return view('watchlist');
})->name('watchlist');

Route::get('/specificmovie', function () {
    return view('specificmovie');
})->name('specificmovie');

Route::get('/specificactor', function () {
    return view('specificactor');
})->name('specificactor');

Route::get('/actor', function () {
    return view('actor');
})->name('actor');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/genre', function () {
    return view('genre');
})->name('genre');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/top-rated-movies', 'top-rated-movies');

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