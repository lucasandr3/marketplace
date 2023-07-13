<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPhotoController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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

Route::prefix('/')->controller(HomeController::class)->group(function () {
    Route::get('', 'index')->name('home');
    Route::get('produto/{slug}', 'single')->name('product.single');
});

Route::prefix('carrinho')->controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('cart');
    Route::post('add', 'add')->name('cart.add');
    Route::get('remove/{slug}', 'remove')->name('cart.remove');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->prefix('admin/stores')->controller(StoreController::class)->group(function () {
    Route::get('', 'index')->name('stores');
    Route::get('create', 'create')->name('stores.create');
    Route::post('store', 'store')->name('stores.store');
    Route::get('{store}/edit', 'edit')->name('stores.edit');
    Route::put('update/{store}', 'update')->name('stores.update');
    Route::delete('destroy/{store}', 'destroy')->name('stores.destroy');
});

Route::middleware('auth')->prefix('admin/products')->controller(ProductController::class)->group(function () {
    Route::get('', 'index')->name('products');
    Route::get('create', 'create')->name('products.create');
    Route::post('store', 'store')->name('products.store');
    Route::get('{product}/edit', 'edit')->name('products.edit');
    Route::put('update/{product}', 'update')->name('products.update');
    Route::delete('destroy/{product}', 'destroy')->name('products.destroy');
});

Route::middleware('auth')->prefix('admin/products/photos')->controller(ProductPhotoController::class)->group(function () {
    Route::delete('remove/{photoId}', 'removePhoto')->name('products.photos.destroy');
});

Route::middleware('auth')->prefix('admin/categories')->controller(CategoryController::class)->group(function () {
    Route::get('', 'index')->name('categories');
    Route::get('create', 'create')->name('categories.create');
    Route::post('store', 'store')->name('categories.store');
    Route::get('{category}/edit', 'edit')->name('categories.edit');
    Route::put('update/{category}', 'update')->name('categories.update');
    Route::delete('destroy/{category}', 'destroy')->name('categories.destroy');
});
