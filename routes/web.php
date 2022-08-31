<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


//Home
Route::get('/', [HomeController::class, "index"])->name('home');


 //product
Route::prefix('/product')->group(function (){
    Route::get('/', [ProductController::class, "index"])->name('product');
    Route::get('/new', [ProductController::class, "new"])->name('product.new');
    Route::post('/store', [ProductController::class, "store"])->name('product.store');
    Route::get('/{product_id}/delete', [ProductController::class, "delete"])->name('product.delete');
    Route::get('/{product_id}/status', [ProductController::class, "status"])->name('product.status');
});

