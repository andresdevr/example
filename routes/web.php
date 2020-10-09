<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// auth routes
Auth::routes();

//example
Route::apiResource('products', ProductController::class)->middleware('ajax');


//SPA route
Route::get('/{any}', 'AppController')->where('any', '.*')->name('app');