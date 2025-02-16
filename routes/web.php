<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SpecificMovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ImageController; // Testing
use Intervention\Image\ImageManager; // Testing
use Illuminate\Support\Facades\Response; // Testing
use Intervention\Image\Drivers\Gd\Driver; // Testing
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WatchlistController;
use App\Models\Watchlist;


Route::get('/', [PageController::class, 'homepage'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

  
Route::get('/movie/{movie_id}', [MovieController::class, 'show'])->name('movie.show');

Route::post('/movie/{movie_id}/review/{review_id}/vote/add', [VoteController::class, 'add'])->middleware('auth')->name('vote.add');
Route::post('/movie/{movie_id}/review/{review_id}/vote/subtract', [VoteController::class, 'subtract'])->middleware('auth')->name('vote.subtract');




Route::get('/genre', [GenreController::class, 'index'])->name('genre');
Route::get('/genre/{title}', [GenreController::class, 'show'])->name('genre.movies');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/top-rated-movies', 'top-rated-movies');

Route::get('/top-rated-movies', [TestController::class, 'showTop'])->name('showTop');

require __DIR__.'/auth.php';


Route::get('/actors', [ActorController::class, 'ShowActor'])->name('actors');

Route::get('/actors/{actor_id}', [ActorController::class, 'ShowSpecificActor'])->name('actors.id');




Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'ShowAdminDashboard'])->name('admin-dashboard');
    Route::get('/admin-settings', [AdminController::class, 'ShowAdminSettings'])->name('admin-settings');
    Route::post('/admin-settings', [AdminController::class, 'search'])->name('users.search');
    Route::get('/admin-settings/edit/{user:user_id}', [AdminController::class, 'edit'])->name('user.edit');
    Route::put('/admin-settings/update/{user:user_id}', [AdminController::class, 'update'])->name('user.update');
    Route::delete('/admin-settings/delete/{user:user_id}', [AdminController::class, 'destroy'])->name('user.destroy');

    Route::get('/admin/reviews', [ReviewController::class, 'pendingReviews'])->name('admin.reviews');
    Route::post('/review/{review}/approve', [ReviewController::class, 'approveReview'])->name('review.approve');
    Route::delete('/review/{review}/delete', [ReviewController::class, 'deleteReview'])->name('review.delete');

    Route::post('/movie/{movie_id}/review', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/reviews/all', [ReviewController::class, 'show'])->name('review.show');

    Route::get('/movie', [MovieController::class, 'showMovie'])->name('allmovies.show');
    Route::delete('/movie/{movie_id}/delete', [MovieController::class, 'deleteMovie'])->name('movie.delete');
    Route::get('/movie/edit/{movie_id}', [MovieController::class, 'editMovie'])->name('movie.edit');
    Route::put('/movie/update/{movie_id}', [MovieController::class, 'updateMovie'])->name('movie.update');
    Route::post('/movie/new/', [MovieController::class, 'createMovie'])->name('new.movie');

    Route::get('/createform', [PageController::class, 'showCreateMovie'])->name('createform');
});




// Normal review form route
Route::get('/review-form/{movie_id}', [ReviewController::class, 'showReviewForm'])->name('review.form');

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');




Route::get('/user-dashboard', function () {
    return view ('user-dashboard');
})->middleware(['auth'])->name('user-dashboard');

Route::get('/user-settings', [AdminController::class, 'showUserSettings'])->middleware(['auth'])->name('user-settings');
Route::post('/user-settings', [AdminController::class, 'updateUserSettings'])->middleware(['auth'])->name('user.profile.update');

Route::middleware('auth')->group(function () {
    Route::post('/create_new_user', [RegisteredUserController::class, 'storeAdmin'])->name('create_new_user');
});

Route::get('/create-watchlist', [MovieController::class, 'create_watchlist'])->name('create-watchlist');
Route::post('/create-watchlist', [MovieController::class, 'storeWatchlist'])->name('store.watchlist');

//new routes for watchlist
Route::delete('/watchlist/{list_id}', [MovieController::class, 'destroy'])->name('watchlist.destroy');
Route::get('/watchlist/{list_id}/edit', [MovieController::class, 'editWatchlist'])->middleware('auth')->name('watchlist.edit');
Route::post('/watchlist/{list_id}/update', [MovieController::class, 'updateWatchlist'])->middleware('auth')->name('watchlist.update');

// Show empty watchlist when no list is selected
Route::get('/watchlist', [MovieController::class, 'showEmptyWatchlist'])->name('watchlist.empty');

// Handle watchlist selection and redirect
Route::post('/watchlist', [MovieController::class, 'selectWatchlist'])->name('watchlist.show');

// Display the selected watchlist and movies
Route::get('/watchlist/{list_id}', [MovieController::class, 'showWatchlist'])->name('watchlist.view');


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