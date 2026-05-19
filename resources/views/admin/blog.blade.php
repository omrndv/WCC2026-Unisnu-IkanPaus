@extends('layouts.admin')
@section('title', 'Manajemen Konten & Blog')

@section('content')
<div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
    <div class="w-full md:w-auto">
        <p class="text-[10px] font-bold text-highlight uppercase tracking-[0.3em] mb-1">Literasi Digital</p>
        <h1 class="text-3xl md:text-4xl font-title font-bold text-primary italic">Daftar Cerita Asri</h1>
    </div>
    <div class="w-full md:w-auto flex justify-start md:justify-end">
        <button onclick="document.getElementById('modalTambahBlog').classList.remove('hidden')" class="w-full md:w-auto bg-primary text-highlight px-8 py-3 rounded-full font-bold text-[10px] uppercase tracking-widest shadow-lg hover:bg-secondary transition-all">
            + Tulis Artikel Baru
        </button>
    </div>
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
                @forelse($blogs as $item)
                <tr class="hover:bg-bgLight/5 transition-all group">
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-bgLight border border-gray-100 overflow-hidden shrink-0">
                                <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://images.unsplash.com/photo-1582738411706-bfc8e691d1c2?auto=format&fit=crop&q=80&w=200' }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="font-bold text-primary text-base">{{ $item->judul }}</div>
                                <div class="text-[10px] text-gray-400 italic">Oleh: {{ $item->penulis }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <span class="text-[10px] font-bold text-secondary tracking-widest uppercase">{{ $item->kategori }}</span>
                    </td>
                    <td class="px-8 py-6">
                        <span class="text-[9px] font-bold px-3 py-1 {{ $item->status == 'published' ? 'bg-accent/10 text-accent border-accent/20' : 'bg-gray-100 text-gray-400' }} rounded-full border">
                            {{ strtoupper($item->status) }}
                        </span>
                    </td>
                    <td class="px-8 py-6 text-gray-400 font-medium">{{ $item->created_at->format('d M Y') }}</td>
                    <td class="px-8 py-6 text-right">
                        <div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button onclick="openEditModal({{ json_encode($item) }}, '{{ asset('storage/' . $item->gambar) }}')" class="text-yellow-500 hover:text-yellow-700 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button onclick="confirmDeleteBlog({{ $item->id }}, '{{ $item->judul }}')" class="text-red-400 hover:text-red-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-10 text-center text-gray-400 italic">Belum ada cerita yang
                        ditulis.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div id="modalTambahBlog" style="z-index: 99999;" class="hidden fixed inset-0 bg-primary/60 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6">
    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="bg-white w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-[2rem] sm:rounded-[3rem] shadow-2xl flex flex-col md:flex-row relative">
        @csrf
        <div class="md:w-1/3 bg-bgLight/30 p-5 sm:p-10 border-b md:border-b-0 md:border-r border-gray-100 flex flex-col items-center justify-center text-center">
            <h4 class="font-title font-bold text-primary mb-4 sm:mb-6">Cover Artikel</h4>
            <div id="imagePreviewContainer" class="w-24 h-32 sm:w-32 sm:h-40 md:w-full md:aspect-[3/4] md:h-auto mx-auto rounded-2xl md:rounded-3xl border-2 border-dashed border-highlight/30 bg-white overflow-hidden flex flex-col items-center justify-center relative group">
                <img id="previewImage" src="#" class="hidden w-full h-full object-cover">
                <div id="placeholderUI" class="p-2 sm:p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-12 sm:w-12 text-highlight/40 mb-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-[8px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest">Unggah</p>
                </div>
                <input type="file" name="gambar" id="blogImageInput" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
            </div>
        </div>

        <div class="md:flex-1 p-6 sm:p-10 space-y-4 sm:space-y-6">
            <div class="flex justify-between items-center mb-2 sm:mb-4">
                <h3 class="text-xl sm:text-2xl font-title font-bold text-primary italic">Tulis Cerita Baru</h3>
                <button type="button" onclick="document.getElementById('modalTambahBlog').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors text-2xl leading-none">&times;</button>
            </div>

            <div class="space-y-4">
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Judul Artikel</label>
                    <input type="text" name="judul" required placeholder="Contoh: Rahasia Getuk..." class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm font-bold">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Kategori</label>
                        <select name="kategori" class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-primary">
                            <option value="Budaya">Budaya</option>
                            <option value="Kuliner">Kuliner</option>
                            <option value="Tips & Trik">Tips & Trik</option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status</label>
                        <select name="status" class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Konten Artikel</label>
                    <textarea name="konten" required rows="5" class="w-full h-32 sm:h-auto px-5 sm:px-6 py-3 sm:py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm italic leading-relaxed"></textarea>
                </div>
            </div>

            <button type="submit" class="w-full bg-primary text-highlight py-3 sm:py-4 mt-2 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">Terbitkan
                Sekarang</button>
        </div>
    </form>
</div>

<div id="modalEditBlog" style="z-index: 99999;" class="hidden fixed inset-0 bg-primary/60 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6">
    <form id="formEditBlog" action="" method="POST" enctype="multipart/form-data" class="bg-white w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-[2rem] sm:rounded-[3rem] shadow-2xl flex flex-col md:flex-row relative">
        @csrf
        @method('PUT')

        <div class="md:w-1/3 bg-bgLight/30 p-5 sm:p-10 border-b md:border-b-0 md:border-r border-gray-100 flex flex-col items-center justify-center text-center">
            <h4 class="font-title font-bold text-primary mb-4 sm:mb-6">Ubah Cover Artikel</h4>
            <div id="editImagePreviewContainer" class="w-24 h-32 sm:w-32 sm:h-40 md:w-full md:aspect-[3/4] md:h-auto mx-auto rounded-2xl md:rounded-3xl border-2 border-dashed border-highlight/30 bg-white overflow-hidden flex flex-col items-center justify-center relative group">
                <img id="editPreviewImage" src="#" class="w-full h-full object-cover">
                <div id="editPlaceholderUI" class="p-2 sm:p-6 hidden">
                    <p class="text-[8px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest">Ganti</p>
                </div>

                <input type="file" name="gambar" id="editBlogImageInput" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
            </div>
        </div>

        <div class="md:flex-1 p-6 sm:p-10 space-y-4 sm:space-y-6">
            <div class="flex justify-between items-center mb-2 sm:mb-4">
                <h3 class="text-xl sm:text-2xl font-title font-bold text-primary italic">Edit Cerita</h3>
                <button type="button" onclick="document.getElementById('modalEditBlog').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors text-2xl leading-none">&times;</button>
            </div>

            <div class="space-y-4">
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Judul Artikel</label>
                    <input type="text" name="judul" id="editJudul" required class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm font-bold">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Kategori</label>
                        <select name="kategori" id="editKategori"
                            class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-primary">
                            <option value="Budaya">Budaya</option>
                            <option value="Kuliner">Kuliner</option>
                            <option value="Tips & Trik">Tips & Trik</option>
                        </select>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status</label>
                        <select name="status" id="editStatus" class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Konten Artikel</label>
                    <textarea name="konten" id="editKonten" required rows="5" class="w-full h-32 sm:h-auto px-5 sm:px-6 py-3 sm:py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm italic leading-relaxed"></textarea>
                </div>
            </div>

            <div class="flex flex-col-reverse sm:flex-row gap-3 sm:gap-4 mt-4">
                <button type="button" onclick="document.getElementById('modalEditBlog').classList.add('hidden')" class="w-full sm:flex-1 bg-gray-100 text-gray-500 py-3 sm:py-4 rounded-full font-bold uppercase text-[10px]">Batal</button>
                <button type="submit" class="w-full sm:flex-[2] bg-primary text-highlight py-3 sm:py-4 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">
                    Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const modalTambah = document.getElementById('modalTambahBlog');
        const modalEdit = document.getElementById('modalEditBlog');

        if (modalTambah) document.body.appendChild(modalTambah);
        if (modalEdit) document.body.appendChild(modalEdit);
    });

    const fileInput = document.getElementById('blogImageInput');
    const previewImage = document.getElementById('previewImage');
    const placeholderUI = document.getElementById('placeholderUI');

    if (fileInput) {
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
    }

    function confirmDeleteBlog(id, title) {
        Swal.fire({
            title: 'Hapus Artikel?',
            text: `"${title}" akan dihapus selamanya dari sistem.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#5C2E00',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            background: '#F5E6D3',
            color: '#5C2E00',
            borderRadius: '2rem'
        }).then((result) => {
            if (result.isConfirmed) {
                let form = document.createElement('form');
                form.action = '/admin/blog/delete/' + id;
                form.method = 'POST';
                form.innerHTML = `@csrf @method('DELETE')`;
                document.body.appendChild(form);
                form.submit();
            }
        })
    }


    const editFileInput = document.getElementById('editBlogImageInput');
    const editPreviewImage = document.getElementById('editPreviewImage');
    const editPlaceholderUI = document.getElementById('editPlaceholderUI');

    if (editFileInput) {
        editFileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    editPreviewImage.src = e.target.result;
                    editPreviewImage.classList.remove('hidden');
                    editPlaceholderUI.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    }

    function openEditModal(blog, imageUrl) {
        document.getElementById('formEditBlog').action = '/admin/blog/update/' + blog.id;
        document.getElementById('editJudul').value = blog.judul;
        document.getElementById('editKategori').value = blog.kategori;
        document.getElementById('editStatus').value = blog.status;
        document.getElementById('editKonten').value = blog.konten;

        if (blog.gambar) {
            editPreviewImage.src = imageUrl;
            editPreviewImage.classList.remove('hidden');
            editPlaceholderUI.classList.add('hidden');
        } else {
            editPreviewImage.src =
                'https://images.unsplash.com/photo-1582738411706-bfc8e691d1c2?auto=format&fit=crop&q=80&w=200';
            editPreviewImage.classList.remove('hidden');
            editPlaceholderUI.classList.add('hidden');
        }

        document.getElementById('modalEditBlog').classList.remove('hidden');
    }
</script>
@endpush