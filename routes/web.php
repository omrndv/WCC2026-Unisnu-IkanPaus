<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::redirect('/home', '/');

Route::get('/tentang', [WebsiteController::class, 'tentang'])->name('tentang');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/produk', [WebsiteController::class, 'produk'])->name('produk');
Route::get('/kontak', [WebsiteController::class, 'kontak'])->name('kontak');
Route::get('/order', [WebsiteController::class, 'order'])->name('order');

Route::post('/kontak/kirim', [WebsiteController::class, 'storeContact'])->name('kontak.store');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/result', [QuizController::class, 'result'])->name('quiz.result');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    Route::get('/pesan', [AdminController::class, 'contactList'])->name('contacts');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::post('/settings/identitas', [SettingController::class, 'saveIdentitas'])->name('settings.identitas');
    Route::post('/settings/kontak', [SettingController::class, 'saveKontak'])->name('settings.kontak');
    Route::post('/settings/seo', [SettingController::class, 'saveSeo'])->name('settings.seo');

    Route::get('/logs', [AdminController::class, 'logs'])->name('logs');
    Route::delete('/logs/clear', [AdminController::class, 'clearLogs'])->name('logs.clear');

    Route::post('/clear-cache', [AdminController::class, 'clearCache'])->name('clear-cache');
});

Route::get('/sitemap.xml', function () {
    $urls = [
        route('home'),
        route('tentang'),
        route('produk'),
        route('blog'),
        route('kontak'),
        route('order'),
        route('quiz.index'),
    ];

    return response()
        ->view('sitemap', compact('urls'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap');