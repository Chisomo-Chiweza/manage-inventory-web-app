<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DeleteController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminLogoutController;


// Admin
Route::get('/admin', [AdminController::class, 'index'])
->middleware('admin')
->name('admin');

// Register user routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Delete user routes
Route::get('/delete', [DeleteController::class, 'index'])->name('delete');
Route::post('/delete', [DeleteController::class, 'store']);

// Login routes
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/user', [UserController::class, 'index'])->name('user');


// Dashboard routes
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
Route::post('/transaction', [TransactionController::class, 'store']);

// Inventory routes
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

// Item routes


// Test routes
Route::get('/item', function () {
       return view('items/item');
});
