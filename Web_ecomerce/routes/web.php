<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartLastController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

Paginator::useBootstrap();

// Route cho user admin
Route::resources([
    'admin_user' => UserController::class,
]);

// Trang chủ
Route::get('/{page?}', [HomeController::class, 'index']);
Route::get('/single-product/{product}', [HomeController::class, 'product'])->name('single.product');
Route::get('/latest-product/{latestproducts}', [HomeController::class, 'latestproducts'])->name('latest.product');
Route::get('/category-product/{categoryproducts}', [HomeController::class, 'categoryproducts'])->name('category');
Route::get('/product-category/{productcategory}', [HomeController::class, 'productcategory'])->name('product.category');
Route::get('/topsellers-product/{topselersproducts}', [HomeController::class, 'topselersproducts'])->name('topsellers.product');
Route::get('/search-product/{searchproduct}', [HomeController::class, 'searchproduct'])->name('timkiem.product');
Route::post('/cart/{add}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/{listproduct}', [CartController::class, 'listproduct'])->name('cart.product');

Route::post('/cart/{addlast}', [CartLastController::class, 'addlast'])->name('cart.addlast');
Route::get('/cart/{listlastproduct}', [CartLastController::class, 'listlastproduct'])->name('cart.lastproduct');

// Admin routes
Route::middleware('auth')->group(function () {
    // ✅ Giữ lại dòng này (dòng 70)
    Route::resource("/admin_product", ProductController::class);

    // ✅ Giữ route trang chủ admin
    Route::get('/home', [ProductController::class, 'trangchu'])->name('admin_product.trangchu');

    // ❌ Đã xóa toàn bộ các dòng từ 73 → 85 vì trùng với resource

    // category logo
    Route::get('/admin_category', [CategoryController::class, 'index'])->name('admin_category.index');
    Route::get('/admin_category/create', [CategoryController::class, 'create'])->name('admin_category.create');
    Route::post('/admin_category/AddNewcategory', [CategoryController::class, 'AddNewcategory'])->name('admin_category.AddNewcategory');
    Route::get('/admin_category/{id}/edit', [CategoryController::class, 'edit'])->name('admin_category.edit');
    Route::put('/admin_category/{id}', [CategoryController::class, 'update'])->name('admin_category.update');
    Route::delete('/admin_category/{id}', [CategoryController::class, 'destroy'])->name('admin_category.destroy');
    Route::post('/search-by-category', [CategoryController::class, 'searchByCategory'])->name('search.by.category');

    // Danh mục sản phẩm
    Route::get('/admin_danhmucSP', [CategoriController::class, 'index'])->name('admin_danhmucSP.index');
    Route::get('/admin_danhmucSP/create', [CategoriController::class, 'create'])->name('admin_danhmucSP.create');
    Route::post('/admin_danhmucSP/AddNewcategory', [CategoriController::class, 'AddNewDanhMucSP'])->name('admin_danhmucSP.AddNewDanhMucSP');
    Route::get('/admin_danhmucSP/{id}/edit', [CategoriController::class, 'edit'])->name('admin_danhmucSP.edit');
    Route::put('/admin_danhmucSP/{id}', [CategoriController::class, 'update'])->name('admin_danhmucSP.update');
    Route::delete('/admin_danhmucSP/{id}', [CategoriController::class, 'destroy'])->name('admin_danhmucSP.destroy');
});

// Trang dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Logo product
Route::get('/logo-product/{logoproduct}', [HomeController::class, 'logoproduct'])->name('logo.product');

// Auth routes
require __DIR__ . '/auth.php';

// ❌ Dòng này lỗi cú pháp cũ Laravel
// Route::resource('categories', 'CategoryController');
// ✅ Nếu cần thì sửa lại như sau:
Route::resource('categories', CategoryController::class);
