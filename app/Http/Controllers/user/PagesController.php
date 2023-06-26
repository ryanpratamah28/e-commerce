<?php

namespace App\Http\Controllers\User;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page(){
        return view('user.page');
    }

    public function home(){
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
        $history = Checkout::all();
        return view('history_transaction', compact('history'));
    }

    public function checkout(){
        return view('checkout');
    }

    public function pembayaran(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image-product' => 'required',
            'price' => 'required',
            'bukti_pembayaran' => 'required',
            'adress' => 'required',
            'product' => 'required'
        ]);

        $images = $request->file('bukti_pembayaran');
        $imgName = time().rand().'.'.$images->extension();

        if(!file_exists(public_path('/image'.$images->getClientOriginalName()))){
            $destinationPath = public_path('/image');
            $images->move($destinationPath, $imgName);
            $upload = $imgName;
        }else{
            $upload = $images->getClientOriginalName();
        }


        Checkout::create([
            'name' => $request->name,
            'bukti_pembayaran' => $upload,
            'email' => $request->email,
            'phone' => $request->phone,
            'price' => $request->price,
            'image-product' => $request->input('image-product'),
            'adress' => $request->adress,
            'product' => $request->product,
            'status' => 0,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/history')->with('success', 'Pembayaran sedang di verifikasi, harap tuggu informasi selanjutnya');

    }
}
