<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }
}
