<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/daftar', [FormController::class, 'formdaftar']);
Route::post('/dashboard', [FormController::class, 'dashboard']);
