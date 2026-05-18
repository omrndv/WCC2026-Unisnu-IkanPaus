<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = ['aksi', 'detail', 'pengelola', 'status'];

    // Helper static biar gampang dipanggil dari mana saja
    public static function catat(string $aksi, string $detail = '', string $status = 'berhasil')
    {
        static::create([
            'aksi'      => $aksi,
            'detail'    => $detail,
            'pengelola' => session('admin_name', 'Admin'),
            'status'    => $status,
        ]);
    }
}