<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
    return view('front.index');
});

Route::get('master', function () {
    return view('front.layout.master');
});


Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.list');
    Route::get('create', [ProductController::class, 'create'])->name('product.showFormCreate');
    Route::post('create', [ProductController::class, 'store'])->name('product.create');
    Route::get('{id}/update', [ProductController::class, 'edit'])->name('product.showFormUpdate');
    Route::post('{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('{id}/detail', [ProductController::class, 'show'])->name('product.detail');
    Route::get('{id}/delete', [ProductController::class, 'destroy'])->name('product.delete');
});


Route::prefix('shops')->group(function () {
    Route::get('', [ShopController::class, 'index'])->name('shop.index');
    Route::get('create', [ShopController::class, 'create'])->name('shop.showFormCreate');
    Route::post('create', [ShopController::class, 'store'])->name('shop.create');
    Route::get('{id}/update', [ShopController::class, 'edit'])->name('shop.showFormUpdate');
    Route::post('{id}/update', [ShopController::class, 'update'])->name('shop.update');
    Route::get('{id}/detail', [ShopController::class, 'show'])->name('shop.detail');
    Route::get('{id}/delete', [ShopController::class, 'destroy'])->name('shop.delete');
});

Route::prefix('types')->group(function () {
    Route::get('', [ShopController::class, 'index'])->name('type.index');
    Route::get('create', [ShopController::class, 'create'])->name('type.showFormCreate');
    Route::post('create', [ShopController::class, 'store'])->name('type.create');
    Route::get('{id}/update', [ShopController::class, 'edit'])->name('type.showFormUpdate');
    Route::post('{id}/update', [ShopController::class, 'update'])->name('type.update');
    Route::get('{id}/detail', [ShopController::class, 'show'])->name('type.detail');
    Route::get('{id}/delete', [ShopController::class, 'destroy'])->name('type.delete');
});
