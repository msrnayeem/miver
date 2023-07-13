<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
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
Route::post('/loginn', function (Request $request) {
    if ($request->ajax()) {
        // Handle the AJAX login request and return a JSON response
        // ...
        return response()->json(['success' => true]);
    }

    // Handle non-AJAX requests (e.g., redirect)
    // ...
})->name('loginn');

//category
Route::get('/category/{category}', [CategoryController::class, 'category'])->name('category');




//shahidur
Route::get('/', [MainController::class, 'index'])->name('index');
    //user
    
    // Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/profile-pic', [MainController::class, 'profilePic'])->name('profilePic');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
