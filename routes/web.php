<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/lihat', function () {
    return view('lihat');
});

Route::get('/', function () {
    return redirect('/tambah'); // atau arahkan ke salah satu
});
Route::get('/', function () {
    return view('products');
});

Route::get('/products', function () {
    return view('products');
});

