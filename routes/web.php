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

Route::get('/', function () {
    return view('welcome');
});

//category/digital-marketing
Route::get('/category/digital-marketing', [CategoryController::class, 'digitalMarketing'])->name('digital-marketing');

//graphics-design
Route::get('/category/graphics-design', [CategoryController::class, 'graphicsDesign'])->name('graphics-design');

//shahidur
Route::get('/', [MainController::class, 'index'])->name('index');
    //user
    Route::get('/loginn', [MainController::class, 'login'])->name('loginn');
    Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    Route::get('/profile', [MainController::class, 'profile'])->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
