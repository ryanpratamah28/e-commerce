<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ManageProductsController extends Controller
{
    public function product(){
        $products = Product::where('user_id', '=', Auth::user()->id)->get();

        return view('admin.products.list_product', compact('products'));
    }

    public function createProduct(){
        return view('admin.products.create_product');
    }

    public function storeProduct(Request $request){
        $message = [
            'required' => 'Tolong lengkapi kolom :attribute ini',   
            'min' => 'Attribute must be at least :min characters long',
            'max' => 'Attributes must be filled with a maximum of :max characters',
        ];

        $request->validate([
            'name' => ['required', 'min: 3'],
            'description' => ['required', 'min: 3'],
            'price' => 'required',
        ], $message);

        Product::create([
            'name' => $request-> name,
            'description' => $request-> description,
            'price' => $request-> price,
        ]);

        return redirect()->route('create.product')->with('addProduct', 'Berhasil menambahkan produk');
    }

    public function editProduct($id){
        $product = Product::where('id', $id)->first();

        return view('edit.product', compact('products'));
    }

    public function updateProduct(Request $request, $id){
        $message = [
            'required' => 'Tolong lengkapi kolom :attribute ini',   
            'min' => 'Attribute must be at least :min characters long',
            'max' => 'Attributes must be filled with a maximum of :max characters',
        ];

        $request->validate([
            'name' => ['required', 'min: 3'],
            'description' => ['required', 'min: 3'],
            'price' => 'required',
        ], $message);

        Product::where('id', $id)->update([
            'name' => $request-> name,
            'description' => $request-> description,
            'price' => $request-> price,
        ]);

        return redirect()->route('product')->with('updateProduct', 'Berhasil memperbarui produk');
    }

    public function deleteProduct($id){
        Product::where('id', '=', $id)->delete();

        return redirect()->back()->with('deleteProduct', 'Berhasil menghapus produk');
    }
}
