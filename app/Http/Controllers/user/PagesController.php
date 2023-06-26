<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $user = User::all();
        return view('homepage', compact('products', 'category', 'user'));
    }

    public function showProduct()
    {
        if (Auth::check()) {
            $user = User::where('id', Auth::user()->id)->first();
            $products = Product::with('category')
                ->limit(5)
                ->get();
            $product = Product::all();
            $categories = Category::all();
            return view('show_product', compact('products', 'user', 'categories', 'product'));
        } else {
            return view('show_product');
        }

        // if (Auth::check()) {
        //     $user = User::where('id', Auth::user()->id)->first();
        //     return view('show_product', compact('user'));
        // } else {
        //     $products = Product::with('category')->limit(5)->get();
        //     $product = Product::all();
        //     $categories = Category::all();
        
        //     return view('show_product', compact('product', 'products', 'categories', ));        
        // }
        
    }

    public function detailProduct($id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $product = Product::with('category')->find($id);

        if ($product) {
            return view('detail_product', compact('product', 'user'));
        } else {
            abort(404);
        }
    }

    public function cart()
    {
        return view('cart');
    }

    public function historyTransaction()
    {
        return view('history_transaction');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
