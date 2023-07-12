<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
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


//category
Route::get('/category/{id}', [CategoryController::class, 'category'])->name('category');



//shahidur
Route::get('/', [MainController::class, 'index'])->name('index');
    //user
    Route::get('/loginn', [MainController::class, 'login'])->name('loginn');
    Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/profile-pic', [MainController::class, 'profilePic'])->name('profilePic');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
