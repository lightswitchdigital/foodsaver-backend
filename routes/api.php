<?php

use App\Http\Controllers\Api\ActsController;
use App\Http\Controllers\Api\CommandsController;
use App\Http\Controllers\Api\OrganizationsController;
use App\Http\Controllers\Api\QAController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\WardsController;
use App\Http\Controllers\Auth\Auth0IndexController;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => 'api',
], function () {


    /////////////
    /// Wards

    Route::group([
        'prefix' => 'wards',
        'as' => 'wards.'
    ], function () {

        Route::get('/get', [WardsController::class, 'get'])->name('get');
        Route::get('/{ward}', [WardsController::class, 'show'])->name('show');

    });

    /////////////
    /// Acts

    Route::group([
        'prefix' => 'acts',
        'as' => 'acts.'
    ], function () {

        Route::get('/get', [ActsController::class, 'get'])->name('get');
        Route::get('/upload', [ActsController::class, 'upload'])->name('upload');
        Route::get('/{act}', [ActsController::class, 'show'])->name('show');

    });

    ///////////////////
    /// Organizations

    Route::group([
        'prefix' => 'organizations',
        'as' => 'organizations.'
    ], function () {

        Route::get('/get', [OrganizationsController::class, 'get'])->name('get');
        Route::get('/{organization}', [OrganizationsController::class, 'show'])->name('show');

    });

    ///////////////////
    /// Organizations

    Route::group([
        'prefix' => 'commands',
        'as' => 'commands.'
    ], function () {

        Route::get('/get', [CommandsController::class, 'get'])->name('get');

    });

    ///////////////////
    /// Settings

    Route::group([
        'prefix' => 'settings',
        'as' => 'settings.'
    ], function () {

        Route::get('/get', [SettingsController::class, 'get'])->name('get');
        Route::post('/update', [SettingsController::class, 'update'])->name('update');
        Route::post('/update-avatar', [SettingsController::class, 'updateAvatar'])->name('update-avatar');

    });

    ///////////////////
    /// Authentication

    Route::group([
        'prefix' => 'auth',
        'as' => 'auth'
    ], function () {

        Route::get('/login', [Auth0IndexController::class, 'login'])->name('login');
        Route::get('/logout', [Auth0IndexController::class, 'logout'])->name('logout');
        Route::get('/profile', [Auth0IndexController::class, 'profile'])->name('profile');

    });

    /////////////////////
    /// Question-Answer

    Route::group([
        'prefix' => 'qa',
        'as' => 'qa'
    ], function () {

        Route::get('/get', [QAController::class, 'get'])->name('get');
        Route::get('/get', [QAController::class, 'show'])->name('show');

    });
});
