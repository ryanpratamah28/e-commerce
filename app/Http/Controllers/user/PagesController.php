<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function checkout(){
        return view('user.checkout');
    }

    public function page(){
        return view('user.page');
    }
}
