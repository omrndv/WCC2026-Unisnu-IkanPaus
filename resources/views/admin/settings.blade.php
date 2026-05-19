@extends('layouts.admin')
@section('title', 'Konfigurasi Warisan')

@section('content')
<div class="max-w-6xl space-y-10">
    <div class="grid md:grid-cols-2 gap-10">

        <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-8">
            <h3 class="font-title font-bold text-xl border-b border-bgLight pb-4 text-primary italic text-center">Identitas Digital</h3>

            @if(session('success_identitas'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-3 rounded-2xl text-xs font-medium flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                {{ session('success_identitas') }}
            </div>
            @endif

            <form action="{{ route('admin.settings.identitas') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Nama Website</label>
                    <input type="text" name="web_name" value="{{ $settings['web_name'] ?? '' }}"
                        class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 focus:ring-2 focus:ring-highlight outline-none text-primary font-bold text-sm">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Slogan Hero</label>
                    <input type="text" name="web_slogan" value="{{ $settings['web_slogan'] ?? '' }}"
                        class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-medium text-sm italic">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Status Toko</label>
                    <select name="store_status" class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-sm">
                        <option value="buka"  {{ ($settings['store_status'] ?? '') == 'buka'  ? 'selected' : '' }}>Buka (Menerima Pesanan)</option>
                        <option value="tutup" {{ ($settings['store_status'] ?? '') == 'tutup' ? 'selected' : '' }}>Tutup Sementara (Maintenance)</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Running Text (Marquee)</label>
                    <textarea name="running_text" rows="2"
                        class="w-full px-6 py-4 rounded-[1.5rem] bg-bgLight/10 border border-gray-100 outline-none text-primary text-xs leading-relaxed italic">{{ $settings['running_text'] ?? '' }}</textarea>
                </div>

                <button type="submit" class="w-full bg-primary text-highlight py-4 rounded-full font-bold uppercase tracking-widest text-[11px] hover:bg-secondary transition-all shadow-md">Simpan Identitas</button>
            </form>
        </div>

        <div class="space-y-10">
            <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-8">
                <h3 class="font-title font-bold text-xl border-b border-bgLight pb-4 text-primary italic text-center">Hubungan Pelanggan</h3>

                @if(session('success_kontak'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-3 rounded-2xl text-xs font-medium flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    {{ session('success_kontak') }}
                </div>
                @endif

                <form action="{{ route('admin.settings.kontak') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Nomor WhatsApp (CS)</label>
                        <div class="relative">
                            <span class="absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 font-bold text-sm">+62</span>
                            <input type="text" name="wa_number" value="{{ $settings['wa_number'] ?? '' }}"
                                class="w-full pl-16 pr-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Link Google Maps (Iframe/URL)</label>
                        <input type="text" name="maps_url" value="{{ $settings['maps_url'] ?? '' }}"
                            class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary text-xs">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Instagram</label>
                            <input type="text" name="instagram" value="{{ $settings['instagram'] ?? '' }}"
                                class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-xs">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Email Bisnis</label>
                            <input type="email" name="email_bisnis" value="{{ $settings['email_bisnis'] ?? '' }}"
                                class="w-full px-6 py-4 rounded-full bg-bgLight/10 border border-gray-100 outline-none text-primary font-bold text-xs">
                        </div>
                    </div>

                    <div class="bg-primary p-8 rounded-[2rem] text-white relative overflow-hidden group mt-2">
                        <div class="absolute inset-0 bg-batik-pattern opacity-10 group-hover:scale-110 transition-transform duration-700"></div>
                        <div class="relative z-10 space-y-5">
                            <h4 class="font-title font-bold text-lg text-highlight italic border-b border-white/10 pb-3 flex justify-between items-center">
                                Waktu Operasional
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </h4>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-[9px] font-bold uppercase tracking-widest text-highlight">Mulai Buka</label>
                                    <input type="time" name="jam_buka" value="{{ $settings['jam_buka'] ?? '07:45' }}"
                                        class="w-full mt-2 bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-sm outline-none focus:bg-white/20 transition-all text-white">
                                </div>
                                <div>
                                    <label class="text-[9px] font-bold uppercase tracking-widest text-highlight">Waktu Tutup</label>
                                    <input type="time" name="jam_tutup" value="{{ $settings['jam_tutup'] ?? '19:30' }}"
                                        class="w-full mt-2 bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-sm outline-none focus:bg-white/20 transition-all text-white">
                                </div>
                            </div>
                            <p class="text-[10px] italic text-white/40 tracking-wide">*Perubahan jam operasional akan terupdate real-time di footer & halaman kontak.</p>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-accent text-white py-4 rounded-full font-bold uppercase tracking-widest text-[11px] hover:opacity-90 transition-all shadow-md shadow-accent/20">Simpan Kontak & Maps</button>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-8">
        <div class="flex items-center gap-4 border-b border-bgLight pb-6">
            <div class="w-12 h-12 bg-accent/10 rounded-2xl flex items-center justify-center text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
            <div>
                <h3 class="font-title font-bold text-2xl text-primary italic">Optimasi Mesin Pencari (SEO)</h3>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Membantu Getuk Asri ditemukan di Google</p>
            </div>
        </div>

        @if(session('success_seo'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-3 rounded-2xl text-xs font-medium flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            {{ session('success_seo') }}
        </div>
        @endif

        <form action="{{ route('admin.settings.seo') }}" method="POST" class="grid md:grid-cols-3 gap-10">
            @csrf
            <div class="md:col-span-1 space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Meta Title</label>
                    <input type="text" name="seo_title" value="{{ $settings['seo_title'] ?? '' }}"
                        class="w-full px-6 py-4 rounded-2xl bg-bgLight/5 border border-gray-100 outline-none text-primary text-xs font-bold leading-tight">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Keywords</label>
                    <textarea name="seo_keywords" rows="3"
                        class="w-full px-6 py-4 rounded-2xl bg-bgLight/5 border border-gray-100 outline-none text-primary text-[11px] leading-relaxed">{{ $settings['seo_keywords'] ?? '' }}</textarea>
                </div>
            </div>

            <div class="md:col-span-2 space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 ml-4">Meta Description</label>
                    <textarea name="seo_description" rows="6"
                        class="w-full px-8 py-6 rounded-[2.5rem] bg-bgLight/5 border border-gray-100 outline-none text-primary text-xs italic leading-relaxed">{{ $settings['seo_description'] ?? '' }}</textarea>
                </div>
                <button type="submit" class="w-full bg-accent text-white py-5 rounded-full font-bold uppercase tracking-widest text-[11px] hover:shadow-xl hover:shadow-accent/20 transition-all">Update Strategi SEO</button>
            </div>
        </form>
    </div>
</div>
@endsection