<?php

use App\Http\Controllers\Api\Auth\LoginUserController;
use App\Http\Controllers\Api\Auth\LogoutUserController;
use App\Http\Controllers\Api\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('api.auth.')->group(function () {
    Route::post('/register', RegisterUserController::class)->name('register');
    Route::post('/login', LoginUserController::class)->name('login');
    Route::post('/logout', LogoutUserController::class)->name('logout')->middleware('auth:sanctum');
});
