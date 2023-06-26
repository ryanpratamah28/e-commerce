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

// Homepage & Main Page ( Before Login )

Route::get('/', [PagesController::class, 'index'])->name('homepage');
Route::get('/product', [PagesController::class, 'showProduct'])->name('show.product');
Route::get('/product/detail', [PagesController::class, 'detailProduct'])->name('detail.product');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('/history-transaction', [PagesController::class, 'historyTransaction'])->name('history.transaction');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('isGuest')->group(function () {
    // Auth
    Route::get('/login', [LoginController::class, 'login'])->name('login.page');
    Route::post('/login/auth', [LoginController::class, 'loginAuth'])->name('login');

    Route::get('/register', [RegisterController::class, 'register'])->name('register.page');
    Route::post('/register/input', [RegisterController::class, 'registerAccount'])->name('register.account');
});

// Admin
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function () {
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
            Route::resource('products', ManageProductsController::class);
            // Route::get('/create', [ManageProductsController::class, 'createProduct'])->name('create.product');
            // Route::post('/create/store', [ManageProductsController::class, 'storeProduct'])->name('store.product');
            // Route::post('/edit/{id}', [ManageProductsController::class, 'editProduct'])->name('edit.product');
            // Route::put('/update/{id}', [ManageProductsController::class, 'updateProduct'])->name('update.product');
            // Route::delete('/delete/{id}', [ManageProductsController::class, 'deleteProduct'])->name('delete.product');

        //CATEGORY
            Route::resource('categories', ManageCategoriesController::class);

        // Route::prefix('/category')->group(function () {
        //     Route::get('/', [ManageCategoriesController::class, 'category'])->name('category');
        //     Route::get('/create', [ManageCategoriesController::class, 'createCategory'])->name('create.category');
        //     Route::post('/create/store', [ManageCategoriesController::class, 'storeCategory'])->name('store.category');
        //     Route::post('/edit/{id}', [ManageCategoriesController::class, 'editCategory'])->name('edit.category');
        //     Route::put('/update/{id}', [ManageCategoriesController::class, 'updateCategory'])->name('update.category');
        //     Route::delete('/delete/{id}', [ManageCategoriesController::class, 'deleteCategory'])->name('delete.category');
        // });

        //USER DATA
        Route::prefix('/users')->group(function () {
            Route::get('/', [AdminController::class, 'userData'])->name('users.data');
            Route::delete('/delete/{user:id}', [AdminController::class, 'userDelete'])->name('users.delete');
        });
    });
});

// User
