<?php

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

Route::get('/', function () {
    return view('front.index');
});

Route::get('master',function (){
   return view('front.layout.master');
});


Route::prefix('product')->group(function(){
Route::get('list',[ProductController::class,'index'])->name('product.list');
Route::get('create',[ProductController::class,'create'])->name('product.showFormCreate');
Route::post('create',[ProductController::class,'store'])->name('product.create');
Route::get('{id}/update',[ProductController::class,'edit'])->name('product.showFormUpdate');
Route::post('{id}/update',[ProductController::class,'update'])->name('product.update');
Route::get('{id}/detail',[ProductController::class,'show'])->name('product.detail');
Route::get('{id}/delete',[ProductController::class,'destroy'])->name('product.delete');
});
