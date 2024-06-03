<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::get('/',
[PageController::class,'show_welcome'])->name('show_welcome');

Route::get('guest/registration',
[PageController::class,'show_reg'])->name('show_reg');

Route::post('guest/registration/save',
[UserController::class,'store'])->name('save_reg');

Route::post('guest/auth/send',
[UserController::class,'auth_user'])->name('auth_user');

Route::get('guest/auth',
[PageController::class,'show_auth'])->name('show_auth');

Route::get('user/cart',
[PageController::class,'show_cart'])->name('show_cart');

Route::get('user/catalog',
[PageController::class,'show_catalog'])->name('show_catalog');

Route::get('admin/category/index',
[PageController::class,'show_categories'])->name('show_categories');

Route::get('admin/category/add',
[PageController::class,'show_add_categories'])->name('show_add_categories');

Route::post('admin/category/add/save',
[CategoryController::class,'store'])->name('store_category');



Route::get('admin/category/destroy/{category}',
[CategoryController::class,'destroy'])->name('delete_category');

Route::get('admin/category/edit/{category}',
[CategoryController::class,'show'])->name('show_edit_category');

Route::put('admin/category/edit/save/{category}',
[CategoryController::class,'update'])->name('edit_category');
