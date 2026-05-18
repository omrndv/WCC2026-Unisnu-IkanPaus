<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            'web_name'        => 'Getuk Goreng Asri',
            'web_slogan'      => 'Warisan Rasa yang Tak Lekang Waktu',
            'store_status'    => 'buka',
            'running_text'    => '100% Asli Banyumas • Resep Tradisional Sejak 1940 • Tanpa Pemanis Buatan',
            'wa_number'       => '816681308',
            'maps_url'        => 'https://maps.app.goo.gl/oR7yiv6Swt4tH7YDA`',
            'instagram'       => '@getukasri_asli',
            'email_bisnis'    => 'halo@getukasri.com',
            'jam_buka'        => '07:45',
            'jam_tutup'       => '19:30',
            'seo_title'       => 'Getuk Goreng Asri - Oleh-oleh Khas Sokaraja',
            'seo_keywords'    => 'getuk goreng, sokaraja, banyumas, kuliner asli, resep kuno',
            'seo_description' => 'Nikmati kelezatan Getuk Goreng Asri, resep tradisional turun-temurun sejak 1940.',
        ];

        foreach ($defaults as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}