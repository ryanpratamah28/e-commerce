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



Route::middleware('isGuest')->group(function () {
    // Auth
    Route::get('/login', [LoginController::class, 'login'])->name('login.page');
    Route::post('/login/auth', [LoginController::class, 'loginAuth'])->name('login');

    Route::get('/register', [RegisterController::class, 'register'])->name('register.page');
    Route::post('/register/input', [RegisterController::class, 'registerAccount'])->name('register.account');
});

// Admin
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('homepage');
    Route::get('/product', [PagesController::class, 'showProduct'])->name('show.product');
    Route::get('/product/detail/{id}', [PagesController::class, 'detailProduct'])->name('detail.product');
    
    Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
    Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
    Route::get('/history-transaction', [PagesController::class, 'historyTransaction'])->name('history.transaction');
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileUserController::class, 'accountProfile'])->name('profile.account');
        // Route::get('/', [ProfileUserController::class, 'profile'])->name('profile');
        // Route::get('/profile/edit', [ProfileUserController::class, 'editProfile'])->name('profile.edit');
        Route::patch('/profile/edit', [ProfileUserController::class, 'changeProfile'])->name('profile.change');
    });
});

Route::middleware(['isLogin', 'CekRole:admin'])->group(function () {
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index.admin');

        //PRODUCT
        Route::prefix('/product')->group(function () {
            Route::get('/', [ManageProductsController::class, 'index'])->name('product');
            Route::get('/create', [ManageProductsController::class, 'create'])->name('create.product');
            Route::post('/create/store', [ManageProductsController::class, 'store'])->name('store.product');
            Route::get('/edit/{id}', [ManageProductsController::class, 'edit'])->name('edit.product');
            Route::put('/update/{id}', [ManageProductsController::class, 'update'])->name('update.product');
            Route::delete('/delete/{id}', [ManageProductsController::class, 'destroy'])->name('delete.product');
        });
        
        //CATEGORY
        Route::prefix('/category')->group(function () {
            Route::get('/', [ManageCategoriesController::class, 'index'])->name('category');
            Route::get('/create', [ManageCategoriesController::class, 'create'])->name('create.category');
            Route::post('/create/store', [ManageCategoriesController::class, 'store'])->name('store.category');
            Route::get('/edit/{id}', [ManageCategoriesController::class, 'edit'])->name('edit.category');
            Route::put('/update/{id}', [ManageCategoriesController::class, 'update'])->name('update.category');
            Route::delete('/delete/{id}', [ManageCategoriesController::class, 'destroy'])->name('delete.category');
        });

        //USER DATA
        Route::prefix('/users')->group(function () {
            Route::get('/', [AdminController::class, 'userData'])->name('users.data');
            Route::delete('/delete/{user:id}', [AdminController::class, 'userDelete'])->name('users.delete');
        });
    });
});

// User
