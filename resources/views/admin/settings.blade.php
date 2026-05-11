@extends('layouts.admin')
@section('title', 'Konfigurasi Warisan')

@section('content')
<div class="max-w-6xl space-y-10">
    <div class="grid md:grid-cols-2 gap-10">
        <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-8">
            <h3 class="font-title font-bold text-xl border-b border-bgLight pb-4 text-primary italic text-center">Identitas Digital</h3>
            
            <form class="space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Nama Website</label>
                    <input type="text" value="Getuk Goreng Asri" class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 focus:ring-2 focus:ring-highlight outline-none text-primary font-bold text-sm">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Slogan Hero</label>
                    <input type="text" value="Warisan Rasa yang Tak Lekang Waktu" class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-medium text-sm italic">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Status Toko</label>
                    <select class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-sm">
                        <option>Buka (Menerima Pesanan)</option>
                        <option>Tutup Sementara (Maintenance)</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Running Text (Marquee)</label>
                    <textarea rows="2" class="w-full px-6 py-4 rounded-[1.5rem] bg-bgLight/10 border border-gray-100 outline-none text-primary text-xs leading-relaxed italic">100% Asli Banyumas • Resep Tradisional Sejak 1940 • Tanpa Pemanis Buatan</textarea>
                </div>
                
                <button type="button" class="w-full bg-primary text-highlight py-4 rounded-full font-bold uppercase tracking-widest text-[11px] hover:bg-secondary transition-all shadow-md">Simpan Identitas</button>
            </form>
        </div>

        <div class="space-y-10">
            <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-8">
                <h3 class="font-title font-bold text-xl border-b border-bgLight pb-4 text-primary italic text-center">Hubungan Pelanggan</h3>
                
                <form class="space-y-5">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Nomor WhatsApp (CS)</label>
                        <div class="relative">
                            <span class="absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 font-bold text-sm">+62</span>
                            <input type="text" value="816681308" class="w-full pl-16 pr-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Link Google Maps (Iframe/URL)</label>
                        <input type="text" value="https://maps.google.com/..." class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary text-xs">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Instagram</label>
                            <input type="text" value="@getukasri_asli" class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-xs">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Email Bisnis</label>
                            <input type="email" value="halo@getukasri.com" class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-xs">
                        </div>
                    </div>

                    <button type="button" class="w-full bg-accent text-white py-4 rounded-full font-bold uppercase tracking-widest text-[11px] hover:opacity-90 transition-all shadow-md shadow-accent/20">Simpan Kontak & Maps</button>
                </form>
            </div>

            <div class="bg-primary p-10 rounded-[3rem] text-white shadow-2xl relative overflow-hidden group">
                <div class="absolute inset-0 bg-batik-pattern opacity-10 group-hover:scale-110 transition-transform duration-700"></div>
                <div class="relative z-10 space-y-6">
                    <h3 class="font-title font-bold text-xl text-highlight italic border-b border-white/10 pb-4 flex justify-between items-center">
                        Waktu Operasional
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="text-[9px] font-bold uppercase tracking-widest text-highlight">Mulai Buka</label>
                            <input type="time" value="07:45" class="w-full mt-2 bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-sm outline-none focus:bg-white/20 transition-all">
                        </div>
                        <div>
                            <label class="text-[9px] font-bold uppercase tracking-widest text-highlight">Waktu Tutup</label>
                            <input type="time" value="19:30" class="w-full mt-2 bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-sm outline-none focus:bg-white/20 transition-all">
                        </div>
                    </div>
                    <p class="text-[10px] italic text-white/40 tracking-wide">*Perubahan jam operasional akan terupdate real-time di footer & halaman kontak.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-8">
        <div class="flex items-center gap-4 border-b border-bgLight pb-6">
            <div class="w-12 h-12 bg-accent/10 rounded-2xl flex items-center justify-center text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </div>
            <div>
                <h3 class="font-title font-bold text-2xl text-primary italic">Optimasi Mesin Pencari (SEO)</h3>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Membantu Getuk Asri ditemukan di Google</p>
            </div>
        </div>
        
        <form class="grid md:grid-cols-3 gap-10">
            <div class="md:col-span-1 space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Meta Title</label>
                    <input type="text" value="Getuk Goreng Asri - Oleh-oleh Khas Sokaraja" class="w-full px-6 py-4 rounded-2xl bg-bgLight/5 border border-gray-100 outline-none text-primary text-xs font-bold leading-tight">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Keywords</label>
                    <textarea rows="3" class="w-full px-6 py-4 rounded-2xl bg-bgLight/5 border border-gray-100 outline-none text-primary text-[11px] leading-relaxed">getuk goreng, sokaraja, banyumas, kuliner asli, resep kuno</textarea>
                </div>
            </div>
            
            <div class="md:col-span-2 space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Meta Description</label>
                    <textarea rows="6" class="w-full px-8 py-6 rounded-[2.5rem] bg-bgLight/5 border border-gray-100 outline-none text-primary text-xs italic leading-relaxed">Nikmati kelezatan Getuk Goreng Asri, resep tradisional turun-temurun sejak 1940. Manis, gurih, dan 100% tanpa pengawet. Kami menjaga warisan kuliner Banyumas dalam setiap gigitannya.</textarea>
                </div>
                <button type="button" class="w-full bg-accent text-white py-5 rounded-full font-bold uppercase tracking-widest text-[11px] hover:shadow-xl hover:shadow-accent/20 transition-all">Update Strategi SEO</button>
            </div>
        </form>
    </div>
</div>
@endsection