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
Route::get('/', function () {
    return view('test'); // Ini akan menampilkan test.blade.php sebagai homepage
});

Route::get('/lihat', function () {
    return view('lihat');
});

Route::get('/', function () {
    return redirect('/test'); 
});
Route::get('/', function () {
    return view('products');
});

Route::get('/products', function () {
    return view('products');
});

