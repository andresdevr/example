<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// auth routes
Auth::routes();

//SPA route

Route::apiResource('products', ProductController::class);
Route::get('/{any}', 'AppController')->where('any', '.*')->name('app');