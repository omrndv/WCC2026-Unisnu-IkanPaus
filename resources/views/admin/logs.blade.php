@extends('layouts.admin')

@section('title', 'Catatan Jejak Digital')

@section('content')
<div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-8 border-b border-gray-50 flex justify-between items-center bg-[#FCFAFA]">
        <div>
            <h3 class="text-xl font-title font-bold text-primary italic">Log Aktivitas Pengelola</h3>
            <p class="text-xs text-gray-400 mt-1 italic">Merekam setiap perubahan yang dilakukan pada sistem Getuk Asri</p>
        </div>
        <button onclick="alert('Log berhasil dibersihkan!')" class="text-[10px] font-bold text-red-400 uppercase tracking-widest hover:text-red-600 transition-all">
            Bersihkan Riwayat
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-primary text-highlight uppercase text-[10px] font-bold tracking-[0.2em]">
                    <th class="px-8 py-5">Waktu & Tanggal</th>
                    <th class="px-8 py-5">Aksi / Perubahan</th>
                    <th class="px-8 py-5">Pengelola</th>
                    <th class="px-8 py-5">Status</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                <tr class="hover:bg-bgLight/5 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="font-bold text-primary">07 Mei 2026</div>
                        <div class="text-[10px] text-gray-400">20:45 WIB</div>
                    </td>
                    <td class="px-8 py-6">
                        <div class="text-primary font-medium">Memperbarui Konfigurasi SEO</div>
                        <div class="text-[10px] text-gray-400 italic">Mengubah Meta Description Halaman Utama</div>
                    </td>
                    <td class="px-8 py-6 font-bold text-primary">Nadiv Muhammad</td>
                    <td class="px-8 py-6">
                        <span class="bg-green-50 text-green-600 border border-green-100 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">
                            Berhasil
                        </span>
                    </td>
                </tr>

                <tr class="hover:bg-bgLight/5 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="font-bold text-primary">07 Mei 2026</div>
                        <div class="text-[10px] text-gray-400">19:12 WIB</div>
                    </td>
                    <td class="px-8 py-6">
                        <div class="text-primary font-medium">Pembersihan Cache Sistem</div>
                        <div class="text-[10px] text-gray-400 italic">Manual Clear Cache via Sidebar</div>
                    </td>
                    <td class="px-8 py-6 font-bold text-primary">Nadiv Muhammad</td>
                    <td class="px-8 py-6">
                        <span class="bg-blue-50 text-blue-600 border border-blue-100 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">
                            Selesai
                        </span>
                    </td>
                </tr>

                <tr class="hover:bg-bgLight/5 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="font-bold text-primary">06 Mei 2026</div>
                        <div class="text-[10px] text-gray-400">14:05 WIB</div>
                    </td>
                    <td class="px-8 py-6">
                        <div class="text-primary font-medium">Update Harga Varian</div>
                        <div class="text-[10px] text-gray-400 italic">Mengubah Harga 'Original Gula Jawa' ke Rp 25.000</div>
                    </td>
                    <td class="px-8 py-6 font-bold text-primary">Admin (Staff)</td>
                    <td class="px-8 py-6">
                        <span class="bg-highlight/10 text-secondary border border-highlight/20 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">
                            Update
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="p-6 bg-[#FCFAFA] border-t border-gray-50 flex justify-between items-center">
        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em]">Menampilkan 10 Log Terakhir</p>
        <button class="text-[10px] font-bold text-primary border-b border-primary hover:text-highlight hover:border-highlight transition-all italic">Lihat Semua Riwayat</button>
    </div>
</div>
@endsection