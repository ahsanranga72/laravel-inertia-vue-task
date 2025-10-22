<?php

use App\Http\Controllers\auth\SigninController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('signin');
});

// Auth routes
Route::get('/signin', [SigninController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [SigninController::class, 'signin'])->name('signin.perform');
Route::post('/signout', [SigninController::class, 'signout'])->name('signout');

// Dashboard - protected by permission middleware
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'permission:dashboard.view'])
    ->name('dashboard');