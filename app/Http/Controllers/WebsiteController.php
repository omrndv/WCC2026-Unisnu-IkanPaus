<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebsiteController extends Controller
{
    public function home()
    {
        return Cache::remember('home_page', 3600, function () {
            return view('home')->render();
        });
    }

    public function produk()
    {
        return Cache::remember('produk_page', 3600, function () {
            return view('produk')->render();
        });
    }

    public function tentang()
    {
        return Cache::remember('tentang_page', 3600, function () {
            return view('tentang')->render();
        });
    }

    public function blog()
    {
        return Cache::remember('blog_page', 3600, function () {
            return view('blog')->render();
        });
    }

    public function pesan()
    {
        return view('pesan');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function storeContact(Request $request)
    {
        Cache::forget('home_page');
        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }

    public function order()
    {
        return view('order');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function adminProduk()
    {
        return view('admin.produk');
    }

    public function adminBlog()
    {
        return view('admin.blog');
    }

    public function contactList()
    {
        return view('admin.contacts');
    }

    public function adminSettings()
    {
        return view('admin.settings');
    }

    public function adminLogs()
    {
        return view('admin.logs');
    }

    public function clearCache()
    {
        Cache::flush();
        return redirect()->back()->with('success', 'Cache berhasil dibersihkan!');
    }

    public function logout(Request $request)
    {
        // Kalau lo pake Laravel Auth, kodenya ini:
        // Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Sampun rampung! Berhasil keluar sistem.');
    }
}
