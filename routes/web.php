<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;

//get messages
Route::get('/get-message', [MessageController::class, 'getMessages'])->name('messages.index');



//login
Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');

//signup
Route::post('/signup', [MainController::class, 'signupSubmitted'])->name('signup');

//category
Route::get('/category/{category}', [CategoryController::class, 'category'])->name('category');

//all product
Route::get('/all-gigs', [ProductController::class, 'showAllProducts'])->name('allProduct');
//single product
Route::get('/singleProduct/{id}', [ProductController::class, 'singleProduct'])->name('singleProduct');

//shahidur
Route::get('/', [MainController::class, 'index'])->name('index');
//user

Route::get('/logout', [MainController::class, 'logout'])->name('logout');

Route::get('/profile', [MainController::class, 'profile'])->name('profile');
Route::post('/profile-pic', [MainController::class, 'profilePic'])->name('profilePic');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//get-notification-data

Route::get('/get-notification-data', function () {
    $notifications = [
        [
            'message' => 'Notification 1',
            'isRead' => false,
        ],
        [
            'message' => 'Notification 2',
            'isRead' => true,
        ],
        [
            'message' => 'Notification 3',
            'isRead' => true,
        ],
        // Add more notifications as needed
    ];

    return response()->json($notifications);
});



