<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class ManageCategoriesController extends Controller
{
    public function category(){
        $categories = Category::where('user_id', '=', Auth::user()->id)->get();

        return view('admin.product_categories.list_category', compact('categories'));
    }

    public function createCategory(){
        return view('admin.product_categories.create_category');
    }

    public function storeCategory(Request $request){
        $message = [
            'required' => 'Tolong lengkapi kolom :attribute ini',   
        ];

        $request->validate([
            'category_name' => ['required']
        ], $message);

        Category::create([
            'category_name' => $request-> category_name,
        ]);

        return redirect()->route('create.category')->with('addCategory', 'Berhasil menambahkan kategori');
    }

    public function editCategory($id){
        $category = Category::where('id', $id)->first();

        return view('edit.category', compact('categories'));
    }

    public function updateCategory(Request $request, $id){
        $request->Validate([
            'category_name' => 'required',
        ]);

        Category::where('id', $id)->update([
            'category_name' => $request-> category_name,
        ]);

        return redirect()->route('category')->with('updateCategory', 'Berhasil memperbarui kategori');
    }

    public function deleteCategory($id){
        Category::where('id', '=', $id)->delete();

        return redirect()->back()->with('deleteCategory', 'Berhasil menghapus kategori');
    }
}
