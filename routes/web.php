<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/product', ProductController::class);
Route::get('/sale/{id}', [OrderController::class, 'view'])->name('product.sale.view');
Route::post('/sale/{id}',[OrderController::class,'sale'])->name('product.sale');
Route::get('/orders',[OrderController::class,'index'])->name('orders');