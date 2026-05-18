<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk'; // karena Laravel default nyarinya 'produks'
    protected $fillable = ['nama', 'harga', 'status', 'kategori', 'deskripsi', 'gambar'];
}
