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
        $users = User::all();

        return view('admin.manage_user.list_user', compact('users'));
    }

    public function userDelete(User $user){
        $user->delete();

        return redirect()->back()->with('deleteUser', 'Berhasil menghapus user');
    }
}
