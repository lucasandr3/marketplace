<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPhotoController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Store\CartController;
use App\Http\Controllers\Store\CheckoutController;
use App\Http\Controllers\Store\CheckoutQuotationController;
use App\Http\Controllers\Store\HomeController;
use App\Http\Controllers\Store\ProfileController;
use App\Http\Controllers\Store\QuotationStoreController;
use App\Http\Controllers\Store\UserOrdersController;
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
    Route::post('/calcular-frete', 'calcularFrete');
});

Route::prefix('/category')->controller(\App\Http\Controllers\Store\CategoryController::class)->group(function () {
    Route::get('{slug}', 'index')->name('category.products');
});

Route::prefix('/loja')->controller(\App\Http\Controllers\Store\StoreController::class)->group(function () {
    Route::get('{slug}', 'index')->name('store.index');
});

Route::prefix('carrinho')->controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('cart');
    Route::post('add', 'add')->name('cart.add');
    Route::get('cancel', 'cancel')->name('cart.cancel');
    Route::get('remove/{slug}', 'remove')->name('cart.remove');
});

Route::prefix('/checkout')->controller(CheckoutController::class)->group(function () {
    Route::get('', 'index')->name('checkout');
    Route::post('process', 'process')->name('checkout.process');
    Route::get('obrigado', 'thanks')->name('checkout.thanks');
});

Route::prefix('cotacao')->controller(QuotationStoreController::class)->group(function () {
    Route::get('/', 'index')->name('quotation');
    Route::post('add', 'add')->name('quotation.add');
    Route::get('cancel', 'cancel')->name('quotation.cancel');
    Route::get('remove/{slug}', 'remove')->name('quotation.remove');
});

Route::prefix('/concluir/cotacao')->controller(CheckoutQuotationController::class)->group(function () {
    Route::get('', 'index')->name('checkout.quotation');
    Route::post('process', 'process')->name('checkout.quotation.process');
    Route::get('obrigado', 'thanks')->name('checkout.quotation.thanks');
});

Route::prefix('/meus_pedidos')->controller(UserOrdersController::class)->group(function () {
    Route::get('', 'index')->name('loja.pedidos');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'access.control.store.admin'])->name('dashboard');

Route::middleware(['auth', 'access.control.store.admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/stores')->controller(StoreController::class)->group(function () {
    Route::get('', 'index')->name('stores');
    Route::get('create', 'create')->name('stores.create');
    Route::post('store', 'store')->name('stores.store');
    Route::get('{store}/ver', 'show')->name('stores.show');
    Route::get('{store}/edit', 'edit')->name('stores.edit');
    Route::put('update/{store}', 'update')->name('stores.update');
    Route::delete('destroy/{store}', 'destroy')->name('stores.destroy');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/products')->controller(ProductController::class)->group(function () {
    Route::get('', 'index')->name('products');
    Route::get('create', 'create')->name('products.create');
    Route::post('store', 'store')->name('products.store');
    Route::get('{product}/show', 'show')->name('products.show');
    Route::get('{product}/edit', 'edit')->name('products.edit');
    Route::put('update/{product}', 'update')->name('products.update');
    Route::delete('destroy/{product}', 'destroy')->name('products.destroy');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/products/photos')->controller(ProductPhotoController::class)->group(function () {
    Route::delete('remove/{photoId}', 'removePhoto')->name('products.photos.destroy');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/categories')->controller(CategoryController::class)->group(function () {
    Route::get('', 'index')->name('categories');
    Route::get('create', 'create')->name('categories.create');
    Route::post('store', 'store')->name('categories.store');
    Route::get('{category}/edit', 'edit')->name('categories.edit');
    Route::put('update/{category}', 'update')->name('categories.update');
    Route::delete('destroy/{category}', 'destroy')->name('categories.destroy');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/pedidos')->controller(OrdersController::class)->group(function () {
    Route::get('', 'index')->name('meus_pedidos');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/cotacoes')->controller(QuotationController::class)->group(function () {
    Route::get('', 'index')->name('cotacoes');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/notificacoes')->controller(NotificationController::class)->group(function () {
    Route::get('', 'notifications')->name('notifications');
    Route::get('marcar/{notification}', 'readOne')->name('notifications.read');
    Route::get('marcar_todas', 'readall')->name('notifications.readall');
});

Route::middleware(['auth', 'access.control.store.admin'])->prefix('admin/theme')->controller(ThemeController::class)->group(function () {
    Route::get('', [ThemeController::class, 'getThemeByUser']);
    Route::post('dashboard/update_theme', [ThemeController::class, 'updateThemeByUser']);
});
