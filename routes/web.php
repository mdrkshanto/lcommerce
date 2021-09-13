<?php

use App\Http\Controllers\CategoryController;
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

// Back End Routes
    // Products
Route::get('/product-list', [ProductController::class,'index'])->name('productList');
Route::get('/add-product', [ProductController::class,'addProduct'])->name('addProduct');
Route::post('/add-product-action', [ProductController::class,'addProductAction'])->name('addProductAction');
    // Category
Route::get('/category-list', [CategoryController::class,'index'])->name('categoryList');
Route::get('/add-category', [CategoryController::class,'addCategory'])->name('addCategory');
Route::post('/add-category-action', [CategoryController::class,'addCategoryAction'])->name('addCategoryAction');



// Admin Routes
Route::get('/dashboard', [ProductController::class,'index'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
