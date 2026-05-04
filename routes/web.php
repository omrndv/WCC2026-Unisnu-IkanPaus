<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/produk', [WebsiteController::class, 'produk'])->name('produk');
Route::get('/tentang', [WebsiteController::class, 'tentang'])->name('tentang');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/pesan', [WebsiteController::class, 'pesan'])->name('pesan');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->name('kontak');