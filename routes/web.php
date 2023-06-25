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

Route::get('/', [PagesController::class, 'home'])->name('homepage');
Route::get('/show', [PagesController::class, 'showProduct'])->name('show.product');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/detail', [PagesController::class, 'detailProduct'])->name('detail.product');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('isGuest')->group(function() {
    // Auth
    Route::get('/login', [LoginController::class, 'login'])->name('login.page');
    Route::post('/login/auth', [LoginController::class, 'loginAuth'])->name('login');

    Route::get('/register', [RegisterController::class, 'register'])->name('register.page');
    Route::post('/register/input', [RegisterController::class, 'registerAccount'])->name('register.account');
});

// Admin
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function () {
    Route::get('/profile', [ProfileUserController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [ProfileUserController::class, 'editProfile'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileUserController::class, 'changeProfile'])->name('profile.change');
    Route::patch('/profilePassword/edit', [ProfileUserController::class, 'changePassword'])->name('password.change');
    Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
    Route::get('/history', [PagesController::class, 'historyTransaction'])->name('history');
    Route::post('/pembayaran', [PagesController::class, 'pembayaran'])->name('pembayaran');
});

Route::middleware(['isLogin', 'CekRole:user'])->prefix('/page')->group(function () {
    Route::get('/', [PagesController::class, 'page'])->name('page');
});

Route::middleware(['isLogin', 'CekRole:admin'])->prefix('/dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index.admin');

        Route::get('/product', [ManageProductsController::class, 'product'])->name('product');
        Route::get('/product/create', [ManageProductsController::class, 'createProduct'])->name('create.product');
        Route::post('/product/create/store', [ManageProductsController::class, 'storeProduct'])->name('store.product');
        Route::post('/product/edit/{id}', [ManageProductsController::class, 'editProduct'])->name('edit.product');
        Route::put('/product/update/{id}', [ManageProductsController::class, 'updateProduct'])->name('update.product');
        Route::delete('/product/delete/{id}', [ManageProductsController::class, 'deleteProduct'])->name('delete.product');

        Route::get('/category', [ManageCategoriesController::class, 'category'])->name('category');
        Route::get('/category/create', [ManageCategoriesController::class, 'createCategory'])->name('create.category');
        Route::post('/category/create/store', [ManageCategoriesController::class, 'storeCategory'])->name('store.category');
        Route::post('/category/edit/{id}', [ManageCategoriesController::class, 'editCategory'])->name('edit.category');
        Route::put('/category/update/{id}', [ManageCategoriesController::class, 'updateCategory'])->name('update.category');
        Route::delete('/category/delete/{id}', [ManageCategoriesController::class, 'deleteCategory'])->name('delete.category');


    //USER DATA
    Route::get('/users', [AdminController::class, 'userData'])->name('users.data');

    Route::get('/list-order', [AdminController::class, 'listOrder'])->name('list.order');
    Route::get('/detailpembayaran/{checkout:id}', [AdminController::class, 'detail_pembayaran'])->name('detail.pembayaran');
    Route::patch('/detailpembayaran/validasi/{checkout:id}', [AdminController::class, 'validasi'])->name('validasi');
    Route::patch('/detailpembayaran/tolak/{checkout:id}', [AdminController::class, 'tolak'])->name('tolak');
});