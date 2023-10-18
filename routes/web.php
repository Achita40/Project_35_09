<?php

use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth'])->name('profile.destroy');
});

Route::prefix('admin')->group(function(){

    // User
    Route::prefix('user')->group(function() {

        Route::get('/', [UserController::class, 'index'])->name('us_index');

    });

    // Product
    Route::prefix('product')->group(function() {

        Route::get('/', [App\Http\Controllers\Admin\ProductsControl::class, 'index'])->name('pro_index');
        Route::get('create', [App\Http\Controllers\Admin\ProductsControl::class, 'create'])->name('pro.create');
        Route::post('insert',[App\Http\Controllers\Admin\ProductsControl::class, 'insert']);
        Route::post('{id}/update', [App\Http\Controllers\Admin\ProductsControl::class, 'update'])->name('pro.update');
        Route::get('{id}/delete', [App\Http\Controllers\Admin\ProductsControl::class, 'destroy'])->name('pro.delete');

    });

    // Category
    Route::prefix('category')->group(function() {

        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('cat.index');
        Route::get('create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('cat.create');
        Route::post('insert', [App\Http\Controllers\Admin\CategoryController::class, 'insert'])->name('cat.insert');
        Route::get('{id}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('cat.edit');
        Route::post('{id}/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('cat.update');
        Route::get('{id}/delete', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('cat.delete');

    });

})->middleware(['auth']);
