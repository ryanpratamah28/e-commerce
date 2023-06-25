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
use App\Http\Controllers\user\ProfileUserController;
use App\Http\Controllers\user\PagesController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\CheckoutController;
use App\Http\Controllers\user\TransactionController;



Route::middleware('isGuest')->group(function() {
    // Auth
    Route::get('/login', [LoginController::class, 'login'])->name('login.page');

    Route::get('/register', [RegisterController::class, 'register'])->name('register.page');
    Route::post('/register/input', [RegisterController::class, 'registerAccount'])->name('register.account');
});

// Admin
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function () {
    Route::get('/profile', [ProfileUserController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [ProfileUserController::class, 'editProfile'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileUserController::class, 'changeProfile'])->name('profile.change');
});

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index.admin');
    
    //PRODUCT 
    Route::prefix('/product')->group(function () {
        Route::get('/', [ManageProductsController::class, 'product'])->name('product');
        Route::get('/create', [ManageProductsController::class, 'createProduct'])->name('create.product');
        Route::post('/create/store', [ManageProductsController::class, 'storeProduct'])->name('store.product');
        Route::post('/edit/{id}', [ManageProductsController::class, 'editProduct'])->name('edit.product');
        Route::put('/update/{id}', [ManageProductsController::class, 'updateProduct'])->name('update.product');
        Route::delete('/delete/{id}', [ManageProductsController::class, 'deleteProduct'])->name('delete.product');
    });

    //CATEGORY 
    Route::prefix('/category')->group(function () {
        Route::get('/', [ManageCategoriesController::class, 'category'])->name('category');
        Route::get('/create', [ManageCategoriesController::class, 'createCategory'])->name('create.category');
        Route::post('/create/store', [ManageCategoriesController::class, 'storeCategory'])->name('store.category');
        Route::post('/edit/{id}', [ManageCategoriesController::class, 'editCategory'])->name('edit.category');
        Route::put('/update/{id}', [ManageCategoriesController::class, 'updateCategory'])->name('update.category');
        Route::delete('/delete/{id}', [ManageCategoriesController::class, 'deleteCategory'])->name('delete.category');
    });

    //USER DATA
    Route::get('/users', [AdminController::class, 'userData'])->name('users.data');
});


// User