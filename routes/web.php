<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'signin'])->name('signin');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
