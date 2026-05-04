<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function produk() {
        return view('produk');
    }

    public function tentang() {
        return view('tentang');
    }

    public function blog() {
        return view('blog');
    }

    public function pesan() {
        return view('pesan');
    }

    public function kontak() {
        return view('kontak');
    }
}