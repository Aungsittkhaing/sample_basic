<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isAuthenticated;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('dashboard.home');
    }
}
