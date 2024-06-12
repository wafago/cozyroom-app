<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OwnerController;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/searching', function () {
    return view('search');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register-owner', function () {
    return view('register-owner');
});
Route::get('/register-user', function () {
    return view('register-user');
});
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register/user', [AuthController::class, 'showUserRegisterForm'])->name('register.user');
Route::post('/register/user', [AuthController::class, 'registerUser']);
Route::get('/register/owner', [AuthController::class, 'showOwnerRegisterForm'])->name('register.owner');
Route::post('/register/owner', [AuthController::class, 'registerOwner']);
Route::get('/search', 'SearchController@search')->name('search');


// Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/upload-kost', [OwnerController::class, 'showUploadForm'])->name('owner.uploadKostForm');
    Route::post('/owner/upload-kost', [OwnerController::class, 'uploadKost'])->name('owner.uploadKost');
// });

// Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
// });