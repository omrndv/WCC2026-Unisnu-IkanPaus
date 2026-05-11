<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AuthController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/produk', [WebsiteController::class, 'produk'])->name('produk');
Route::get('/tentang', [WebsiteController::class, 'tentang'])->name('tentang');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/pesan', [WebsiteController::class, 'pesan'])->name('pesan');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->name('kontak');
Route::post('/kontak/kirim', [WebsiteController::class, 'storeContact'])->name('kontak.store');
Route::get('/order', [WebsiteController::class, 'order'])->name('order');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/', [WebsiteController::class, 'admin'])->name('admin.dashboard');
    Route::get('/produk', [WebsiteController::class, 'adminProduk'])->name('admin.produk');
    Route::get('/blog', [WebsiteController::class, 'adminBlog'])->name('admin.blog');
    Route::get('/pesan', [WebsiteController::class, 'contactList'])->name('admin.contacts');
    Route::get('/settings', [WebsiteController::class, 'adminSettings'])->name('admin.settings');
    Route::get('/clear-cache', [WebsiteController::class, 'clearCache'])->name('admin.clear-cache');
    Route::get('/logs', [WebsiteController::class, 'adminLogs'])->name('admin.logs');
});

