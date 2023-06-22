<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }
}
