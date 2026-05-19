<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Produk;
use App\Models\Setting;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $produk       = \App\Models\Produk::where('status', 'tersedia')->take(3)->get();
        $running_text = \App\Models\Setting::get('running_text', '100% Asli Banyumas • Resep Tradisional Sejak 1940 • Tanpa Pemanis Buatan');
        $wa_number    = \App\Models\Setting::get('wa_number', '6281234567890');
        $web_slogan   = \App\Models\Setting::get('web_slogan', 'Sejak 1940, Rasa yang <br> <span class="text-highlight italic">Tak Lekang Waktu</span>');

        return view('home', compact('produk', 'running_text', 'wa_number', 'web_slogan'));
    }

    public function produk()
    {
        $produk = Produk::where('status', 'tersedia')->get();

        return view('produk', compact('produk'));
    }

    public function produkdetail()
    {
        return view('produkdetail');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function blog()
    {
        $currentCat = request('category');

        $blogs = Blog::where('status', 'published')
            ->when($currentCat, fn($query) => $query->where('kategori', $currentCat))
            ->latest()
            ->paginate(6);

        return view('blog', compact('blogs', 'currentCat'));
    }

    public function kontak()
    {
        $emailBisnis = Setting::get('email_bisnis', 'halo@getukasri.com');
        $waNumber = Setting::get('wa_number', '082227771288');
        $jamBuka = Setting::get('jam_buka', '07:45');
        $jamTutup = Setting::get('jam_tutup', '19:30');
        $mapsUrl = Setting::get('maps_url', 'https://www.google.com/maps/embed?pb=!1m18...');

        return view('kontak', compact('emailBisnis', 'waNumber', 'jamBuka', 'jamTutup', 'mapsUrl'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subjek' => ['nullable', 'string', 'max:100'],
            'pesan' => ['required', 'string'],
        ]);

        Contact::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Pesan Anda sudah terkirim! Tunggu kabar dari kami ya.');
    }

    public function order()
    {
        $produk = Produk::where('status', 'tersedia')->get();
        $waNumber = Setting::get('wa_number', '6281234567890');

        return view('order', compact('produk', 'waNumber'));
    }
}
