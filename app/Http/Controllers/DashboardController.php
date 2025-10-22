<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $user = request()->user();
        return Inertia::render('dashboard/Dashboard', [
            'user' => $user->only('id', 'name', 'email')
        ]);
    }
}
