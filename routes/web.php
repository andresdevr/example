<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// auth routes
Auth::routes(['verify' => true, 'register' => false]);

//example


Route::prefix('ajax')->group(function () {

    Route::apiResource('products', ProductController::class)->middleware('ajax');
    Route::apiResource('users', UserController::class)->middleware('ajax');
});





//SPA route
Route::get('/{any}', 'AppController')->where('any', '.*')->name('app');