<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application as Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
    public function showLoginForm(): Factory|View|Application
    {
        return view('login');
    }
    public function showLoginForm2(): Factory|View|Application
    {
        return view('login');
    }
}
