<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'login']);

// registration
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register', [UserController::class, 'register']);

// view homepage
Route::get('/home', [MovieController::class, 'showMovies'])->name('homepage');

// view movie desc
Route::get('/moviereview/{id}', [MovieController::class, 'movieDesc'])->name('moviedesc');

// submit review
Route::post('/moviereview/{movie_id}', [ReviewController::class, 'addReview'])->name('addReview');

// logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('getstarted');
})->name('getstarted');