<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'signin'])->name('signin');
