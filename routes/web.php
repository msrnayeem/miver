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


//writingTranslation
Route::get('/category/writing-translation', [CategoryController::class, 'writingTranslation'])->name('writing-translation');



//video-animation
Route::get('/category/video-animation', [CategoryController::class, 'videoAnimation'])->name('video-animation');


//musicAudio
Route::get('/category/music-audio', [CategoryController::class, 'musicAudio'])->name('music-audio');

//programmingTech
Route::get('/category/programming-tech', [CategoryController::class, 'programmingTech'])->name('programming-tech');

//business
Route::get('/category/business', [CategoryController::class, 'business'])->name('business');

//lifestyle
Route::get('/category/lifestyle', [CategoryController::class, 'lifestyle'])->name('lifestyle');


//shahidur
Route::get('/', [MainController::class, 'index'])->name('index');
    //user
    Route::get('/loginn', [MainController::class, 'login'])->name('loginn');
    Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    Route::get('/profile', [MainController::class, 'profile'])->name('profile');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
