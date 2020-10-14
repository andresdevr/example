<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// auth routes
Auth::routes(['verify' => true, 'register' => false]);



Route::prefix('ajax')->middleware('ajax')->group(function () {
    
    //example
    Route::apiResource('products', ProductController::class);

    Route::apiResource('users', UserController::class);
    Route::get('permissions', PermissionController::class)->name('permissions.index');
    Route::post('users/{user}/permission', ToggleUserPermissionController::class)->name('users.permission');

});





//SPA route
Route::get('/{any}', 'AppController')->where('any', '.*')->name('app');