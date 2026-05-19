<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
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

        return back()
            ->withErrors([
                'username' => 'Username atau password yang Anda masukkan tidak cocok.',
            ])
            ->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        Session::forget('admin_auth');
        Session::forget('admin_name');

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Sampun rampung! Berhasil keluar sistem.');
    }
}