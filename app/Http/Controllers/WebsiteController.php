<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

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

    public function produkdetail()
    {
        return view('produkdetail');
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


    public function showLoginForm()
    {
        if (Session::has('admin_auth')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.adminLogin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $adminUsername = 'admin';
        $adminPassword = 'admin123';

        if ($request->username === $adminUsername && $request->password === $adminPassword) {
            Session::put('admin_auth', true);
            Session::put('admin_name', 'Admin Asri');

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'username' => 'Username yang Anda masukkan tidak cocok.',
        ])->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        // Hapus session admin secara spesifik
        Session::forget('admin_auth');
        Session::forget('admin_name');

        // Invalidasi session bawaan
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Sampun rampung! Berhasil keluar sistem.');
    }

    public function admin()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.dashboard');
    }

    public function adminProduk()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.produk');
    }

    public function adminBlog()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.blog');
    }

    public function contactList()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.contacts');
    }

    public function adminSettings()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.settings');
    }

    public function adminLogs()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.logs');
    }

    public function clearCache()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        Cache::flush();
        return redirect()->back()->with('success', 'Cache berhasil dibersihkan!');
    }
}
