<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
}
