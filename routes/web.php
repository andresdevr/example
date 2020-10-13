<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// auth routes
Auth::routes(['verify' => true]);

//example
Route::apiResource('products', ProductController::class)->middleware('ajax');
Route::apiResource('users', UserController::class)->middleware('ajax');


//SPA route
Route::get('/{any}', 'AppController')->where('any', '.*')->name('app');