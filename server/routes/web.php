<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
       return view('welcome');
});

Route::get('/welcomeadmin', function () {
       return view('welcomeadmin');
});

Route::get('/user', function () {
       return view('user');
});

Route::get('/inventory', function () {
       return view('inventory');
});

Route::get('/admin', function () {
       return view('admin');
});

Route::get('/transaction', function () {
       return view('popups/transaction');
});

Route::get('/register', function () {
       return view('popups/register');
});

Route::get('/delete', function () {
       return view('popups/delete');
});

Route::get('/item', function () {
       return view('items/item');
});
