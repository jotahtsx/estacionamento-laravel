<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::with('creator')->latest()->paginate(10);

        return view('dashboard', compact('users'));
    }
}
