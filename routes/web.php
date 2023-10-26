<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RidirectController;
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


//Seller
Route::get('/seller', function () {
    return view('seller.seller');
});
Route::get('/seller-add-product', function () {
    return view('seller.addProduct');
});
Route::get('/seller-edit-product', function () {
    return view('seller.editProduct');
});
Route::get('/seller-page-product', function () {
    return view('seller.pageProduct');
});
Route::get('/seller-order-product', function () {
    return view('seller.orderProduct');
});
Route::get('/seller-proses-product', function () {
    return view('seller.proses');
});
//End Seller
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/regis', function () {
    return view('auth.register');
});
Route::post('/registrasi', [authController::class, 'registrasi']);
Route::post('/loginController', [authController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/rolePage', [RidirectController::class, 'rolePage'])->name('role-page');
});
Route::middleware(['auth:sanctum', 'penjualMiddleware'])->group(function () {
    Route::get('/seller-add-product', function () {
        return view('seller.addProduct');
    })->name('seller-add-product');
    Route::post('/create-produk', [ProductController::class, 'create'])->name('create-produk');
});
Route::middleware(['auth:sanctum', 'pembeliMiddleware'])->group(function () {
    Route::get('/home', [ProductController::class, 'show'])->name('home-page');
    Route::get('/pembeli-produk', [ProductController::class, 'showProduk'])->name('produk-pembeli');
});
