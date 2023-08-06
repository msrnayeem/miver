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

Route::get('/get-notification-data', [NotificationController::class, 'getNotificationData'])->name('getNotificationData');
Route::get('/get-msg-notification-count', [MessageController::class, 'getMsgNotificationCount'])->name('getMsgNotificationCount');
Route::get('/mark-as-read', [NotificationController::class, 'markAsRead'])->name('markAsRead');

//send messages
Route::get('/send-welcome-email', [MailController::class, 'sendWelcomeEmail'])->name('send.welcome.email');


//category
Route::get('/category/{category}', [CategoryController::class, 'category'])->name('category');
Route::get('/getSubCategory', [CategoryController::class, 'getSubCategory'])->name('getSubCategory');
Route::get('/getSubSubCategory', [CategoryController::class, 'getSubSubCategory'])->name('getSubSubCategory');

//auth
Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/signup', [MainController::class, 'signupSubmitted'])->name('signup');
Route::post('/loginn', [MainController::class, 'loginSubmitted'])->name('loginn');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');

//user
Route::group(['prefix' => 'user'], function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/seller/personal-info', [UserController::class, 'personalInfo'])->name('seller.personal.info');
});

//gigs
Route::group(['prefix' => 'gigs'], function () {
    Route::get('/gig-info.', [UserController::class, 'gigInfo'])->name('user.gig.info');
    Route::get('/add-gig', [UserController::class, 'addGig'])->name('user.add.gig');
   
    Route::get('/all-gigs', [GigController::class, 'allGigs'])->name('all.gigs');
    Route::get('/gig/{id}', [GigController::class, 'gig'])->name('gig');
});
Route::post('/profile-pic', [MainController::class, 'profilePic'])->name('profilePic');

//orders
Route::group(['prefix' => 'orders'], function () {
    Route::get('/orders', [OrderController::class, 'orders'])->name('user.gig.orders');
    Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('user.gig.myorders');
    Route::get('/order-details/{orderId}', [OrderController::class, 'orderDetails'])->name('order.details');
    Route::get('/place-order', [OrderController::class, 'placedOrder'])->name('place.order');
    Route::get('/update-order', [OrderController::class, 'orderUpdate'])->name('order.update');
});


