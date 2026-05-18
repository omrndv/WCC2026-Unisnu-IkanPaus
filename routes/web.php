<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/tentang', [WebsiteController::class, 'tentang'])->name('tentang');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/pesan', [WebsiteController::class, 'pesan'])->name('pesan');
Route::get('/produk', [WebsiteController::class, 'produk'])->name('produk');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->name('kontak');
Route::post('/kontak/kirim', [WebsiteController::class, 'storeContact'])->name('kontak.store');
Route::get('/order', [WebsiteController::class, 'order'])->name('order');


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [WebsiteController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [WebsiteController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [WebsiteController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', [WebsiteController::class, 'admin'])->name('admin.dashboard');

// Produk
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk');
Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin.produk.store');
Route::put('/admin/produk/update/{id}', [ProdukController::class, 'update'])->name('admin.produk.update');
Route::delete('/admin/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('admin.produk.destroy');

// Blog
Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

// Pesan / Kontak
Route::get('/admin/pesan', [WebsiteController::class, 'contactList'])->name('admin.contacts');

// Settings
Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings');
Route::post('/admin/settings/identitas', [SettingController::class, 'saveIdentitas'])->name('admin.settings.identitas');
Route::post('/admin/settings/kontak', [SettingController::class, 'saveKontak'])->name('admin.settings.kontak');
Route::post('/admin/settings/seo', [SettingController::class, 'saveSeo'])->name('admin.settings.seo');

// Logs
Route::get('/admin/logs', [WebsiteController::class, 'adminLogs'])->name('admin.logs');
Route::delete('/admin/logs/clear', function () {
    if (!Session::has('admin_auth')) return redirect()->route('admin.login');
    \App\Models\ActivityLog::truncate();
    return redirect()->route('admin.logs')->with('success', 'Semua log berhasil dibersihkan!');
})->name('admin.logs.clear');

// Cache
Route::post('/admin/clear-cache', [WebsiteController::class, 'clearCache'])->name('admin.clear-cache');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/result', [QuizController::class, 'result'])->name('quiz.result');