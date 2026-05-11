@extends('layouts.admin')

@section('title', 'Daftar Pesan Masuk')

@section('content')
<div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-8 border-b border-gray-50 flex justify-between items-center bg-[#FCFAFA]">
        <div>
            <h3 class="text-xl font-title font-bold text-primary">Kotak Surat Digital</h3>
            <p class="text-xs text-gray-400 mt-1 italic">Database prospek pelanggan Getuk Asri</p>
        </div>

        <div class="flex items-center gap-4">
            {{-- Badge Total Pesan --}}
            <span class="bg-primary/5 text-primary text-[10px] font-bold px-4 py-2 rounded-full border border-primary/10 uppercase tracking-widest">
                Total: 1 Pesan
            </span>

            {{-- Tombol Export --}}
            <button onclick="alert('Data berhasil dieksport ke CSV!')" class="bg-accent text-white px-5 py-2.5 rounded-full text-[10px] font-bold uppercase tracking-widest hover:opacity-90 transition-all flex items-center gap-2 shadow-sm shadow-accent/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export CSV
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-primary text-highlight uppercase text-[10px] font-bold tracking-[0.2em]">
                    <th class="px-8 py-5">Pengirim</th>
                    <th class="px-8 py-5">Kategori</th>
                    <th class="px-8 py-5">Isi Pesan</th>
                    <th class="px-8 py-5 text-right">Tindakan</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                <tr class="hover:bg-bgLight/10 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="font-bold text-primary">Nadiv Muhammad</div>
                        <div class="text-[11px] text-gray-400 font-medium">nadiv@gmail.com</div>
                    </td>
                    <td class="px-8 py-6">
                        <span class="bg-highlight/10 text-secondary border border-highlight/20 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">
                            Kerjasama
                        </span>
                    </td>
                    <td class="px-8 py-6 text-gray-500 italic leading-relaxed">
                        <div class="truncate max-w-xs">
                            "Halo, saya ingin menjadi reseller Getuk Asri di wilayah Purwokerto..."
                        </div>
                    </td>
                    <td class="px-8 py-6 text-right">
                        <button class="bg-white border border-primary text-primary px-5 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-sm">
                            Buka Pesan
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="p-6 bg-[#FCFAFA] border-t border-gray-50 text-center">
        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.3em]">Arsip Pesan Getuk Asri</p>
    </div>
</div>
@endsection