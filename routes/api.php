<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiDeviceController;

Route::get('/devices', [ApiDeviceController::class, 'index']);

