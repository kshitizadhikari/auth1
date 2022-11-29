<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboardView(){
        return view('dashboard');
    }

    public function loginView(){
        return view('login');
    }

    public function signupView(){
        return view('signup');
    }

}