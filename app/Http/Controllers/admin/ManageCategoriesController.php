<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ManageCategoriesController extends Controller
{
    public function category(){
        return view('admin.product_categories.list_category');
    }

    public function createCategory(){
        return view('admin.product_categories.create_category');
    }
}
