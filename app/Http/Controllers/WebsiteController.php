<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function home()
    {
        $produk       = \App\Models\Produk::where('status', 'tersedia')->take(3)->get();
        $running_text = \App\Models\Setting::get('running_text', '100% Asli Banyumas • Resep Tradisional Sejak 1940 • Tanpa Pemanis Buatan');
        $wa_number    = \App\Models\Setting::get('wa_number', '6281234567890');

        // Ambil slogan dari database dengan default value yang lo pake sekarang
        $web_slogan   = \App\Models\Setting::get('web_slogan', 'Sejak 1940, Rasa yang <br> <span class="text-highlight italic">Tak Lekang Waktu</span>');

        return view('home', compact('produk', 'running_text', 'wa_number', 'web_slogan'));
    }

    public function produk()
    {
        $produk = \App\Models\Produk::where('status', 'tersedia')->get();
        return view('produk', compact('produk'));
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
        $currentCat = request('category');

        $blogs = \App\Models\Blog::where('status', 'published')
            ->when($currentCat, fn($q) => $q->where('kategori', $currentCat))
            ->latest()
            ->paginate(6);

        return view('blog', compact('blogs', 'currentCat'));
    }

    public function pesan()
    {
        $produk    = \App\Models\Produk::where('status', 'aktif')->get();
        $wa_number = \App\Models\Setting::get('wa_number', '6281234567890');
        return view('pesan', compact('produk', 'wa_number'));
    }

    public function kontak()
    {
        $email_bisnis = \App\Models\Setting::get('email_bisnis', 'halo@getukasri.com');
        $wa_number    = \App\Models\Setting::get('wa_number', '816681308');
        $jam_buka     = \App\Models\Setting::get('jam_buka', '07:45');
        $jam_tutup    = \App\Models\Setting::get('jam_tutup', '19:30');
        $maps_url     = \App\Models\Setting::get('maps_url', 'https://www.google.com/maps/embed?pb=!1m18...');

        return view('kontak', compact('email_bisnis', 'wa_number', 'jam_buka', 'jam_tutup', 'maps_url'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        \App\Models\Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda sudah terkirim! Tunggu kabar dari kami ya.');
    }

    public function order()
    {
        $produk    = \App\Models\Produk::where('status', 'aktif')->get();
        $wa_number = \App\Models\Setting::get('wa_number', '6281234567890');
        return view('order', compact('produk', 'wa_number'));
    }

    // -------------------------
    // Auth
    // -------------------------

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

        if ($request->username === 'admin' && $request->password === 'admin123') {
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
        Session::forget('admin_auth');
        Session::forget('admin_name');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Sampun rampung! Berhasil keluar sistem.');
    }

    // -------------------------
    // Admin Pages
    // -------------------------

    public function admin()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');

        $totalPesan   = \App\Models\Contact::count();
        $totalProduk  = \App\Models\Produk::where('status', 'aktif')->count();
        $recentLogs   = \App\Models\ActivityLog::latest()->take(2)->get();

        return view('admin.dashboard', compact('totalPesan', 'totalProduk', 'recentLogs'));
    }

    public function contactList()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        $pesan = \App\Models\Contact::latest()->get();
        $totalPesan = $pesan->count(); // tambah ini
        return view('admin.contacts', compact('pesan', 'totalPesan')); // tambah totalPesan
    }

    public function adminSettings()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        return view('admin.settings');
    }

    public function adminLogs()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');

        $logs = \App\Models\ActivityLog::latest()->paginate(10);
        return view('admin.logs', compact('logs'));
    }

    public function clearCache()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');
        Cache::flush();

        ActivityLog::catat('Pembersihan Cache Sistem', 'Manual Clear Cache via Sidebar', 'selesai');
        return redirect()->back()->with('success', 'Cache berhasil dibersihkan!');
    }
}
