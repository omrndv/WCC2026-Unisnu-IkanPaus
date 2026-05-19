<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function index()
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');

        $settings = Setting::pluck('value', 'key');
        return view('admin.settings', compact('settings'));
    }

    public function saveIdentitas(Request $request)
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');

        $request->validate([
            'web_name'      => 'required|max:100',
            'web_slogan'    => 'nullable|max:200',
            'store_status'  => 'required',
            'running_text'  => 'nullable|max:500',
        ]);

        Setting::set('web_name',     $request->web_name);
        Setting::set('web_slogan',   $request->web_slogan);
        Setting::set('store_status', $request->store_status);
        Setting::set('running_text', $request->running_text);

        ActivityLog::catat('Memperbarui Identitas Digital', 'Mengubah nama/slogan/status toko');
        return redirect()->back()->with('success_identitas', 'Identitas berhasil disimpan!');
    }

    public function saveKontak(Request $request)
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');

        $request->validate([
            'wa_number'   => 'required',
            'maps_url'     => 'nullable|string',
            'instagram'   => 'nullable|max:100',
            'email_bisnis' => 'nullable|email',
            'jam_buka'    => 'required',
            'jam_tutup'   => 'required',
        ]);

        Setting::set('wa_number',    $request->wa_number);
        Setting::set('maps_url',     $request->maps_url);
        Setting::set('instagram',    $request->instagram);
        Setting::set('email_bisnis', $request->email_bisnis);
        Setting::set('jam_buka',     $request->jam_buka);
        Setting::set('jam_tutup',    $request->jam_tutup);

        ActivityLog::catat('Memperbarui Kontak & Maps', 'Mengubah nomor WA, jam operasional, dll');
        return redirect()->back()->with('success_kontak', 'Kontak & Maps berhasil disimpan!');
    }

    public function saveSeo(Request $request)
    {
        if (!Session::has('admin_auth')) return redirect()->route('admin.login');

        $request->validate([
            'seo_title'       => 'nullable|max:200',
            'seo_keywords'    => 'nullable|max:500',
            'seo_description' => 'nullable|max:500',
        ]);

        Setting::set('seo_title',       $request->seo_title);
        Setting::set('seo_keywords',    $request->seo_keywords);
        Setting::set('seo_description', $request->seo_description);

        ActivityLog::catat('Memperbarui Konfigurasi SEO', 'Mengubah meta title/description/keywords', 'update');
        return redirect()->back()->with('success_seo', 'Strategi SEO berhasil diupdate!');
    }
}
