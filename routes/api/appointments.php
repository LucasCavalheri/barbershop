<?php

use App\Http\Controllers\Api\Appointment\CancelAppointmentController;
use App\Http\Controllers\Api\Appointment\CreateAppointmentController;
use App\Http\Controllers\Api\Appointment\ListAppointmentsController;
use App\Http\Controllers\Api\Appointment\UpdateAppointmentController;
use Illuminate\Support\Facades\Route;

Route::prefix('appointments')->name('api.appointments.')->middleware(['auth:sanctum', 'role:client'])->group(function () {
    Route::get('/', ListAppointmentsController::class)->name('list');
    Route::post('/', CreateAppointmentController::class)->name('create');
    Route::patch('/{appointmentId}', UpdateAppointmentController::class)->name('update');
    Route::delete('/{appointmentId}', CancelAppointmentController::class)->name('cancel');
});
