<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductSellerController;

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

Route::get('/', [LandingPageController::class, 'index']);

Route::prefix('administrator')->group(function() {
    Route::resource('category', CategoryController::class)->middleware(['auth','administrator']);
    Route::resource('product', ProductController::class)->middleware(['auth','administrator']);
    Route::resource('user', UserController::class)->middleware(['auth','administrator']);
});

Route::prefix('seller')->group(function() {
    Route::resource('myproducts', ProductSellerController::class)->middleware(['auth','seller']);
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductsController::class);
Route::resource('sellers', SellerController::class);

Route::post('state/{user}', StateController::class)->name('state')->middleware(['auth','administrator']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');