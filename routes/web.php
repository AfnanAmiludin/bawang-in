<?php

use App\Http\Controllers\authController;
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
    return view('home');
});
ROute::get('/seller', function () {
    return view('seller.seller');
});
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/regis', function () {
    return view('auth.register');
});
Route::post('/registrasi', [authController::class, 'registrasi']);
Route::post('/loginController', [authController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/succes', function () {
        return view('welcome');
    })->name('succes');
});
