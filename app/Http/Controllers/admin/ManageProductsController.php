<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ManageProductsController extends Controller
{
    public function product(){
        return view('admin.products.list_product');
    }

    public function createProduct(){
        return view('admin.products.create_product');
    }
}
