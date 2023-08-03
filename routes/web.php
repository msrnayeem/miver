<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//get messages
Route::get('/get-message', [MessageController::class, 'getMessages'])->name('messages.index');
//get msg and notification count
Route::get('/get-msg-notification-count', [MessageController::class, 'getMsgNotificationCount'])->name('getMsgNotificationCount');

//mark as read
Route::get('/mark-as-read', [NotificationController::class, 'markAsRead'])->name('markAsRead');

//send messages
Route::get('/send-welcome-email', [MailController::class, 'sendWelcomeEmail'])->name('send.welcome.email');

//PlaceOrder
Route::get('/place-order', [OrderController::class, 'placedOrder'])->name('place.order');

//login
Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');

//signup
Route::post('/signup', [MainController::class, 'signupSubmitted'])->name('signup');

//category
Route::get('/category/{category}', [CategoryController::class, 'category'])->name('category');
Route::get('/getSubCategory', [CategoryController::class, 'getSubCategory'])->name('getSubCategory');
Route::get('/getSubSubCategory', [CategoryController::class, 'getSubSubCategory'])->name('getSubSubCategory');

//all product
Route::get('/all-gigs', [GigController::class, 'showAllProducts'])->name('all.gigs');
//single product
Route::get('/single-gig/{id}', [GigController::class, 'singleProduct'])->name('single.gig');

//shahidur
Route::get('/', [MainController::class, 'index'])->name('index');
//user

Route::get('/logout', [MainController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'user'], function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    // Route::get('/add-gig', [UserController::class, 'addGig'])->name('user.add.gig');
    Route::get('/seller/personal-info', [UserController::class, 'personalInfo'])->name('seller.personal.info');
    Route::get('/add-gig', [UserController::class, 'addGig'])->name('user.add.gig');
    Route::get('/gig-info.', [UserController::class, 'gigInfo'])->name('user.gig.info');
    Route::get('/orders', [OrderController::class, 'orders'])->name('user.gig.orders');
});

Route::post('/profile-pic', [MainController::class, 'profilePic'])->name('profilePic');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//get-notification-data

Route::get('/get-notification-data', [NotificationController::class, 'getNotificationData'])->name('getNotificationData');
