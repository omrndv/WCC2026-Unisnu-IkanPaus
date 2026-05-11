<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tetap import ini buat jaga-jaga kalau mau pake Auth asli

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        // Proses pembersihan session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke landing page dengan pesan manis
        return redirect('/')->with('success', 'Sampun rampung! Berhasil keluar sistem.');
    }
}