<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Produk;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private function checkAdmin()
    {
        if (!Session::has('admin_auth')) {
            return redirect()->route('admin.login');
        }

        return null;
    }

    public function dashboard()
    {
        if ($redirect = $this->checkAdmin()) {
            return $redirect;
        }

        $totalPesan = Contact::count();
        $totalProduk = Produk::where('status', 'tersedia')->count();
        $totalBlog = Blog::count();
        $recentLogs = ActivityLog::latest()->take(2)->get();

        return view('admin.dashboard', compact(
            'totalPesan',
            'totalProduk',
            'totalBlog',
            'recentLogs'
        ));
    }

    public function contactList()
    {
        if ($redirect = $this->checkAdmin()) {
            return $redirect;
        }

        $pesan = Contact::latest()->get();
        $totalPesan = $pesan->count();

        return view('admin.contacts', compact('pesan', 'totalPesan'));
    }

    public function destroyContact($id)
    {
        if ($redirect = $this->checkAdmin()) {
            return $redirect;
        }

        $pesan = Contact::findOrFail($id);
        $pesan->delete();

        return redirect()
            ->back()
            ->with('success', 'Pesan berhasil dihapus!');
    }

    public function logs()
    {
        if ($redirect = $this->checkAdmin()) {
            return $redirect;
        }

        $logs = ActivityLog::latest()->paginate(10);

        return view('admin.logs', compact('logs'));
    }

    public function clearLogs()
    {
        if ($redirect = $this->checkAdmin()) {
            return $redirect;
        }

        ActivityLog::truncate();

        return redirect()
            ->route('admin.logs')
            ->with('success', 'Semua log berhasil dibersihkan!');
    }

    public function clearCache()
    {
        if ($redirect = $this->checkAdmin()) {
            return $redirect;
        }

        Cache::flush();

        ActivityLog::catat('Pembersihan Cache Sistem', 'Manual Clear Cache via Sidebar', 'selesai');

        return redirect()
            ->back()
            ->with('success', 'Cache berhasil dibersihkan!');
    }
}
