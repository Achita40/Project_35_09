<?php

use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user
Route::get('admin/user/index', [UserController::class, 'index'])->name('us_index');

// product
Route::get('admin/product/index', [App\Http\Controllers\Admin\ProductsControl::class, 'index'])->name('pro_index');
Route::get('admin/product/create', [App\Http\Controllers\Admin\ProductsControl::class, 'create'])->name('pro.create');
Route::post('admin/product/insert',[App\Http\Controllers\Admin\ProductsControl::class, 'insert']);
Route::post('admin/product/{id}/update', [App\Http\Controllers\Admin\ProductsControl::class, 'update'])->name('pro.update');
Route::get('admin/product/{id}/delete', [App\Http\Controllers\Admin\ProductsControl::class, 'destroy'])->name('pro.delete');

// category
Route::get('admin/category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('cat_index');
Route::get('admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('cat.create');
