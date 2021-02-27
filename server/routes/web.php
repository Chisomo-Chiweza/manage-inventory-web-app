<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminLogoutController;

<<<<<<< HEAD
Route::get('/home', function () {
    return view('home.index');    
=======

// Welcome routes
Route::get('/', function () {
       return view('welcome');
});

// Admin login routes
Route::get('/welcomeadmin', [AdminLoginController::class, 'index'])->name('adminlogin');
Route::post('/welcomeadmin', [AdminLoginController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index'])
->name('admin')
->middleware('auth');
Route::post('/adminlogout', [AdminLogoutController::class, 'store'])->name('adminlogout');


// Register user routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Delete user routes


// User login routes
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/user', [UserController::class, 'index'])->name('user');


// Dashboard routes
// Transaction routes
// Inventory routes
// Item routes


// Test Routes
Route::get('/inventory', function () {
       return view('inventory');
});

Route::get('/transaction', function () {
       return view('popups/transaction');
});

Route::get('/delete', function () {
       return view('popups/delete');
});

Route::get('/item', function () {
       return view('items/item');
>>>>>>> Authentication
});
