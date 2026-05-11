@extends('layouts.admin')
@section('title', 'Manajemen Konten & Blog')

@section('content')
<div class="mb-10 flex justify-between items-end">
    <div>
        <p class="text-[10px] font-bold text-highlight uppercase tracking-[0.3em] mb-1">Literasi Digital</p>
        <h2 class="text-2xl font-title font-bold text-primary">Daftar Cerita Asri</h2>
    </div>
    <button onclick="document.getElementById('modalTambahBlog').classList.remove('hidden')" class="bg-primary text-highlight px-8 py-3 rounded-full font-bold text-[10px] uppercase tracking-widest shadow-lg hover:bg-secondary transition-all">
        + Tulis Artikel Baru
    </button>
</div>

<div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-primary text-highlight text-[10px] uppercase font-bold tracking-[0.2em]">
                <tr>
                    <th class="px-8 py-5">Artikel</th>
                    <th class="px-8 py-5">Kategori</th>
                    <th class="px-8 py-5">Status</th>
                    <th class="px-8 py-5">Tanggal</th>
                    <th class="px-8 py-5 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                <tr class="hover:bg-bgLight/5 transition-all group">
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-bgLight overflow-hidden shrink-0 border border-gray-100">
                                <img src="https://images.unsplash.com/photo-1582738411706-bfc8e691d1c2?auto=format&fit=crop&q=80&w=200" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="font-bold text-primary text-base">Filosofi Batik Banyumasan</div>
                                <div class="text-[10px] text-gray-400 italic">Oleh: Admin Nadiv</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <span class="text-[10px] font-bold text-secondary tracking-widest uppercase">Budaya</span>
                    </td>
                    <td class="px-8 py-6">
                        <span class="text-[9px] font-bold px-3 py-1 bg-accent/10 text-accent rounded-full border border-accent/20">PUBLISHED</span>
                    </td>
                    <td class="px-8 py-6 text-gray-400 font-medium">12 Mei 2026</td>
                    <td class="px-8 py-6 text-right">
                        <div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="text-primary hover:text-highlight transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg></button>
                            <button class="text-secondary hover:text-primary transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="modalTambahBlog" class="hidden fixed inset-0 z-[99] bg-primary/40 backdrop-blur-sm flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-4xl rounded-[3rem] shadow-2xl overflow-hidden flex flex-col md:flex-row">
        <div class="md:w-1/3 bg-bgLight/30 p-10 border-r border-gray-100 flex flex-col items-center justify-center text-center">
            <h4 class="font-title font-bold text-primary mb-6">Cover Artikel</h4>
            <div id="imagePreviewContainer" class="w-full aspect-[3/4] rounded-3xl border-2 border-dashed border-highlight/30 bg-white overflow-hidden flex flex-col items-center justify-center relative group">
                <img id="previewImage" src="#" class="hidden w-full h-full object-cover">
                <div id="placeholderUI" class="p-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-highlight/40 mb-4 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Klik untuk unggah gambar</p>
                </div>
                <input type="file" id="blogImageInput" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
            </div>
            <p class="mt-4 text-[9px] text-gray-400 italic">Format: JPG, PNG (Maks 2MB)</p>
        </div>

        <div class="md:flex-1 p-10 space-y-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-title font-bold text-primary italic">Tulis Cerita Baru</h3>
                <button onclick="document.getElementById('modalTambahBlog').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors">&times; Close</button>
            </div>

            <div class="space-y-4">
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Judul Artikel</label>
                    <input type="text" placeholder="Contoh: Rahasia Getuk Goreng Renyah..." class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Kategori</label>
                        <select class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-primary">
                            <option>Budaya</option>
                            <option>Kuliner</option>
                            <option>Tips & Trik</option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status</label>
                        <select class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                            <option>Published</option>
                            <option>Draft</option>
                        </select>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Konten Artikel</label>
                    <textarea rows="5" placeholder="Tuliskan cerita menarik di sini..." class="w-full px-6 py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm italic leading-relaxed"></textarea>
                </div>
            </div>

            <button type="button" class="w-full bg-primary text-highlight py-4 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">Terbitkan Sekarang</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // MEDIA MANAGER - IMAGE PREVIEW
    const fileInput = document.getElementById('blogImageInput');
    const previewImage = document.getElementById('previewImage');
    const placeholderUI = document.getElementById('placeholderUI');

    fileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.classList.remove('hidden');
                placeholderUI.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush