<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::with('creator')->latest()->paginate(10);

        return view('home', compact('users'));
    }
}
