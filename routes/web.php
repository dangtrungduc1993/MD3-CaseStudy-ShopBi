<?php

// use App\Http\Controllers\Auth\GoogleSocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GoogleSocialiteController;


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
})->name('index');

Route::get('master', function () {
    return view('front.layout.master');
});
Route::middleware('CheckAuth')->group(function(){

});
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.list');
    Route::get('create', [ProductController::class, 'create'])->name('product.showFormCreate');
    Route::post('create', [ProductController::class, 'store'])->name('product.create');
    Route::get('{id}/update', [ProductController::class, 'edit'])->name('product.showFormUpdate');
    Route::post('{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('{id}/detail', [ProductController::class, 'show'])->name('product.detail');
    Route::get('{id}/detailType', [ProductController::class, 'showByTypeId'])->name('product.detailType');
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
    Route::get('', [TypeController::class, 'index'])->name('type.index');
    Route::get('create', [TypeController::class, 'create'])->name('type.showFormCreate');
    Route::post('create', [TypeController::class, 'store'])->name('type.create');
    Route::get('{id}/update', [TypeController::class, 'edit'])->name('type.showFormUpdate');
    Route::post('{id}/update', [TypeController::class, 'update'])->name('type.update');
    Route::get('{id}/detail', [TypeController::class, 'show'])->name('type.detail');
    Route::get('{id}/delete', [TypeController::class, 'destroy'])->name('type.delete');
});

Route::prefix('roles')->group(function () {
    Route::get('', [RoleController::class, 'index'])->name('role.index');
    Route::get('create', [RoleController::class, 'create'])->name('role.showFormCreate');
    Route::post('create', [RoleController::class, 'store'])->name('role.create');
    Route::get('{id}/update', [RoleController::class, 'edit'])->name('role.showFormUpdate');
    Route::post('{id}/update', [RoleController::class, 'update'])->name('role.update');
    Route::get('{id}/detail', [RoleController::class, 'show'])->name('role.detail');
    Route::get('{id}/delete', [RoleController::class, 'destroy'])->name('role.delete');
});

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('user.index');
    Route::get('create', [UserController::class, 'create'])->name('user.showFormCreate');
    Route::post('create', [UserController::class, 'store'])->name('user.create');
    Route::get('{id}/update', [UserController::class, 'edit'])->name('user.showFormUpdate');
    Route::post('{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::get('{id}/detail', [UserController::class, 'show'])->name('user.detail');
    Route::get('{id}/delete', [UserController::class, 'destroy'])->name('user.delete');
});


Route::get('register',function(){
    return view('backend.auth.register');
})->name('register');


Route::get('login',[AuthController::class,'showFormLogin'])->name('auth.formLogin');
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('register',[AuthController::class,'showFormRegister'])->name('auth.formRegister');
Route::post('register',[AuthController::class,'register'])->name('auth.register')->middleware('CheckRegister');



Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);


