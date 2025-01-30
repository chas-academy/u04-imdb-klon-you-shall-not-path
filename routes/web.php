<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/watchlist', function () {
    return view('watchlist');
})->name('watchlist');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/user-dashboard', function () {
    return view ('user-dashboard');
});

Route::get('/admin-dashboard', function () {
    return view ('admin-dashboard');
});

Route::get('/actors', function () {
    return view ('actors');
});

Route::get('/actorpage', function () {
    return view ('actorpage');
});

Route::get('/admin-settings', function () {
    return view ('admin-settings');
})->name('admin_settings');

Route::get('/user-settings', function () {
    return view ('user-settings');
})->name('user_settings');