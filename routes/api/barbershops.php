<?php

use App\Http\Controllers\Api\Barbershop\CreateBarbershopController;
use App\Http\Controllers\Api\Barbershop\DeleteBarbershopController;
use App\Http\Controllers\Api\Barbershop\FindAllBarbershopsController;
use App\Http\Controllers\Api\Barbershop\GetBarbershopController;
use App\Http\Controllers\Api\Barbershop\UpdateBarbershopController;
use Illuminate\Support\Facades\Route;

Route::prefix('barbershops')->name('api.barbershops.')->group(function () {
    Route::middleware(['auth:sanctum', 'role:barber'])->group(function () {
        Route::post('/', CreateBarbershopController::class)->name('create');
        Route::patch('/{id}', UpdateBarbershopController::class)->name('update');
        Route::delete('/{id}', DeleteBarbershopController::class)->name('delete');
    });

    Route::get('/', FindAllBarbershopsController::class)->name('find-all');
    Route::get('/{id}', GetBarbershopController::class)->name('get');
});
