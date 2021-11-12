<?php

use App\Http\Controllers\Auth\Auth0IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
    'as' => 'auth'
], function () {

    Route::get('/login', [Auth0IndexController::class, 'login'])->name('login');
    Route::get('/logout', [Auth0IndexController::class, 'logout'])->name('logout');
    Route::get('/profile', [Auth0IndexController::class, 'profile'])->name('profile');

});
