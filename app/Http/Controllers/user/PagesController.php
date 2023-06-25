<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function showProduct(){
        if (Auth::check()) {
            $user = User::where('id', Auth::user()->id)->first();
            return view('show_product', compact('user'));
        } else {
            return view('show_product');
        }
    }

    public function detailProduct(){
        return view('detail_product');
    }

    public function cart(){
        return view('cart');
    }

    public function historyTransaction(){
        return view('history_transaction');
    }

    public function checkout(){
        return view('checkout');
    }
}
