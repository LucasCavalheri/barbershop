<?php

use App\Http\Controllers\Api\Service\CreateServiceController;
use App\Http\Controllers\Api\Service\DeleteServiceController;
use App\Http\Controllers\Api\Service\ListBarbershopServicesController;
use App\Http\Controllers\Api\Service\UpdateServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('barbershops/{barbershopId}/services')->name('api.barbershops.services.')->group(function () {
    Route::middleware(['auth:sanctum', 'role:barber'])->group(function () {
        Route::post('/', CreateServiceController::class)->name('create');
        Route::patch('/{serviceId}', UpdateServiceController::class)->name('update');
        Route::delete('/{serviceId}', DeleteServiceController::class)->name('delete');
    });

    Route::get('/', ListBarbershopServicesController::class)->name('index');
});
