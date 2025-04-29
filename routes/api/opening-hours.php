<?php

use App\Http\Controllers\Api\OpeningHour\CreateOpeningHourController;
use App\Http\Controllers\Api\OpeningHour\DeleteOpeningHourController;
use App\Http\Controllers\Api\OpeningHour\ListOpeningHoursController;
use App\Http\Controllers\Api\OpeningHour\UpdateOpeningHourController;
use Illuminate\Support\Facades\Route;

Route::prefix('barbershops/{barbershopId}/opening-hours')->name('api.barbershops.opening-hours.')->middleware(['auth:sanctum', 'role:barber'])->group(function () {
    Route::get('/', ListOpeningHoursController::class)->name('list');
    Route::post('/', CreateOpeningHourController::class)->name('create');
    Route::patch('/{openingHourId}', UpdateOpeningHourController::class)->name('update');
    Route::delete('/{openingHourId}', DeleteOpeningHourController::class)->name('delete');
});
