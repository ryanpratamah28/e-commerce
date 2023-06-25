<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function showProduct(){
        return view('show_product');
    }

    public function detailProduct(){
        return view('detail_product');
    }

    public function cart(){
        return view('cart');
    }

    public function accountProfile(){
        return view('profile_account');
    }

    public function historyTransaction(){
        return view('history_transaction');
    }

    public function checkout(){
        return view('checkout');
    }
}
