<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

Route::controller(DeviceController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('toggle/{id}', 'toggle');
});