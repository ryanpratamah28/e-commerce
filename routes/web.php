<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Admin Controller 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageCategoriesController;
use App\Http\Controllers\ManageProductsController;
use App\Http\Controllers\ManageTransactionsController;

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

// User