<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function signin()
    {
        return Inertia::render('auth/Signin');
    }
}
