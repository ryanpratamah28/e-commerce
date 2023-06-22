<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

// Admin Controller 
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ManageCategoriesController;
use App\Http\Controllers\admin\ManageProductsController;
use App\Http\Controllers\admin\ManageTransactionsController;

// User Controller
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get('/login', [LoginController::class, 'login'])->name('login.page');
Route::post('/login/auth', [LoginController::class, 'loginAuth'])->name('login.auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register.page');
Route::post('/register/input', [RegisterController::class, 'registerAccount'])->name('register.account');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index.admin');
    
    //PRODUCT 
    Route::prefix('/product')->group(function () {
        Route::get('/', [ManageProductsController::class, 'product'])->name('product');
        Route::get('/create', [ManageProductsController::class, 'createProduct'])->name('create.product');
        Route::post('/edit/{id}', [ManageProductsController::class, 'editProduct'])->name('edit.product');
        Route::put('/update/{id}', [ManageProductsController::class, 'updateProduct'])->name('update.product');
        Route::delete('/delete/{id}', [ManageProductsController::class, 'deleteProduct'])->name('delete.product');
    });

    //CATEGORY 
    Route::prefix('/category')->group(function () {
        Route::get('/', [ManageCategoriesController::class, 'category'])->name('category');
        Route::get('/create', [ManageCategoriesController::class, 'createCategory'])->name('create.category');
        Route::post('/edit/{id}', [ManageCategoriesController::class, 'editCategory'])->name('edit.category');
        Route::put('/update/{id}', [ManageCategoriesController::class, 'updateCategory'])->name('update.category');
        Route::delete('/delete/{id}', [ManageCategoriesController::class, 'deleteCategory'])->name('delete.category');
    });

    //USER DATA

    Route::get('/users', [AdminController::class, 'userData'])->name('users.data');
});

// User