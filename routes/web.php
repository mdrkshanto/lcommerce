<?php

use App\Http\Controllers\FrontEndRouteController;
use App\Http\Controllers\ProductController;
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
// Front End Routes
Route::get('/', [FrontEndRouteController::class,'index'])->name('home');
Route::get('/cart', [FrontEndRouteController::class, 'cart'])->name('cart');
Route::get('/contact', [FrontEndRouteController::class, 'contact'])->name('contact');
Route::get('/product', [FrontEndRouteController::class, 'product'])->name('product');



// Admin Routes
Route::get('/dashboard', [ProductController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/productl-list', [ProductController::class,'index'])->middleware(['auth'])->name('productList');
Route::get('/add-product', [ProductController::class,'addProduct'])->middleware(['auth'])->name('addProduct');

require __DIR__.'/auth.php';
