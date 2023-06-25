<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.layout.dashboard');
    }

    public function userData(){
        return view('admin.manage_user.list_user');
    }
}
