<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

// memanggil file login.blade.php
Route::get('login', function () {
    return view('login');
})->name('login');

// memenggil file checkout.blade.php
Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

// memenggil file success_checkout.blade.php
Route::get('success-checkout', function () {
    return view('success_checkout');
})->name('success-checkout');