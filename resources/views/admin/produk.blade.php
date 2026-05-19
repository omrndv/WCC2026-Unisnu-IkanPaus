@extends('layouts.admin')
@section('title', 'Katalog Varian Asri')

@section('content')
    <div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6"> 
        <div class="w-full md:w-auto">
            <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-highlight mb-2 block">Sistem Manajemen</span>
            <h1 class="text-3xl md:text-4xl font-title font-bold text-primary italic">@yield('title')</h1>
        </div>
        <div class="w-full md:w-auto flex justify-start md:justify-end">
            <button onclick="document.getElementById('modalTambahProduk').classList.remove('hidden')"
                class="w-full md:w-auto bg-primary text-highlight px-8 py-3 rounded-full font-bold text-[10px] uppercase tracking-widest shadow-lg hover:bg-secondary transition-all">
                + Tambah Varian Baru
            </button>
        </div>
    </div>

    @if ($errors->any())
        <div class="mb-8 bg-red-50 border border-red-200 text-red-500 px-6 py-4 rounded-2xl text-sm font-bold shadow-sm">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="mb-8 bg-green-50 border border-green-200 text-green-600 px-6 py-4 rounded-2xl text-sm font-bold shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($produk as $item)
            <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group relative flex flex-col">
                <div class="absolute top-8 right-8 z-10">
                    <span class="{{ $item->status == 'Tersedia' ? 'bg-accent/10 text-accent border-accent/20' : 'bg-red-100 text-red-500 border-red-200' }} border text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter shadow-sm backdrop-blur-md">
                        {{ $item->status }}
                    </span>
                </div>

                <div class="h-52 bg-bgLight rounded-[2rem] mb-6 overflow-hidden relative shrink-0">
                    <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://images.unsplash.com/photo-1505935428862-770b6f24f629?auto=format&fit=crop&q=80&w=800' }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>

                <div class="space-y-1 flex-1">
                    <h4 class="font-title font-bold text-xl text-primary italic">{{ $item->nama }}</h4>
                    <p class="text-xs text-gray-500 font-light mt-2 line-clamp-2 italic leading-relaxed">
                        {{ $item->deskripsi ? $item->deskripsi : 'Belum ada deskripsi untuk varian ini.' }}
                    </p>
                    <p class="text-secondary font-bold text-lg tracking-tight">Rp
                        {{ number_format($item->harga, 0, ',', '.') }}</p>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-50 flex gap-3 shrink-0">
                    <button onclick="editProduct({{ $item->id }}, '{{ addslashes($item->nama) }}', {{ $item->harga }}, '{{ $item->status }}', '{{ str_replace(["\r", "\n"], ["\\r", "\\n"], addslashes($item->deskripsi)) }}', '{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://images.unsplash.com/photo-1505935428862-770b6f24f629?auto=format&fit=crop&q=80&w=800' }}')"
                        class="flex-1 text-[10px] font-bold uppercase tracking-widest text-primary border border-bgLight py-3 rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                        Edit Data
                    </button>
                    <button onclick="confirmDeleteProduct({{ $item->id }}, '{{ addslashes($item->nama) }}')" class="text-[10px] font-bold uppercase tracking-widest text-red-400 border border-red-50/50 px-4 py-3 rounded-full hover:bg-red-500 hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <div id="modalTambahProduk" style="z-index: 99999;" class="hidden fixed inset-0 bg-primary/60 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6">
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="bg-white w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-[2rem] sm:rounded-[3rem] shadow-2xl flex flex-col md:flex-row relative">
            
            @csrf
            <div class="md:w-1/3 bg-bgLight/30 p-5 sm:p-10 border-b md:border-b-0 md:border-r border-gray-100 flex flex-col items-center justify-center text-center">
                <h4 class="font-title font-bold text-primary mb-4 sm:mb-6">Foto Varian</h4>
                <div id="productPreviewContainer" class="w-32 h-32 sm:w-40 sm:h-40 md:w-full md:aspect-square md:h-auto mx-auto rounded-2xl md:rounded-[2rem] border-2 border-dashed border-highlight/30 bg-white overflow-hidden flex flex-col items-center justify-center relative group">
                    <img id="productPreview" src="#" class="hidden w-full h-full object-cover">
                    <div id="productPlaceholder" class="p-2 sm:p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-12 sm:w-12 text-highlight/40 mb-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="text-[8px] sm:text-[9px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                            Klik unggah</p>
                    </div>
                    <input type="file" name="gambar" id="productImageInput" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
                </div>
            </div>

            <div class="md:flex-1 p-6 sm:p-10 space-y-4 sm:space-y-6">
                <div class="flex justify-between items-center mb-1 sm:mb-2">
                    <h3 class="text-xl sm:text-2xl font-title font-bold text-primary italic">Detail Varian Baru</h3>
                    <button type="button" onclick="document.getElementById('modalTambahProduk').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors text-2xl leading-none">&times;</button>
                </div>

                <div class="grid gap-4 sm:gap-5">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Nama Varian</label>
                        <input type="text" name="nama" required placeholder="Misal: Getuk Keju Lumer" class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm font-bold">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Harga (Rp)</label>
                            <input type="number" name="harga" required placeholder="25000" class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-sm font-bold text-secondary">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status Stok</label>
                            <select name="status" class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                                <option value="Tersedia">Tersedia</option>
                                <option value="Habis">Habis</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Deskripsi Singkat</label>
                        <textarea name="deskripsi" rows="3" placeholder="Jelaskan keunikan rasa varian ini..." class="w-full px-5 sm:px-6 py-3 sm:py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none text-xs italic"></textarea>
                    </div>
                </div>

                <button type="submit" class="w-full bg-primary text-highlight py-3 sm:py-4 mt-2 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">Simpan
                    ke Katalog</button>
            </div>
        </form>
    </div>

    <div id="modalEditProduk" style="z-index: 99999;"
        class="hidden fixed inset-0 bg-primary/60 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6">
        <form id="formEditProduk" method="POST" enctype="multipart/form-data" class="bg-white w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-[2rem] sm:rounded-[3rem] shadow-2xl flex flex-col md:flex-row relative">
            @csrf

            <div class="md:w-1/3 bg-bgLight/30 p-5 sm:p-10 border-b md:border-b-0 md:border-r border-gray-100 flex flex-col items-center justify-center text-center">
                <h4 class="font-title font-bold text-primary mb-4 sm:mb-6">Ubah Foto</h4>

                <div class="w-32 h-32 sm:w-40 sm:h-40 md:w-full md:aspect-square md:h-auto mx-auto rounded-2xl md:rounded-[2rem] border-2 border-highlight bg-white overflow-hidden relative group">
                    <img id="editPreview" src="#" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none z-10">
                        <p class="text-white text-[9px] bg-primary/80 px-3 py-1 sm:px-4 sm:py-2 rounded-full border border-highlight/50 font-bold uppercase backdrop-blur-sm shadow-lg">
                            Ganti Foto</p>
                    </div>
                    <input type="file" name="gambar" id="editImageInput" class="absolute inset-0 opacity-0 cursor-pointer z-20" accept="image/*">
                </div>
            </div>

            <div class="md:flex-1 p-6 sm:p-10 space-y-4 sm:space-y-6">
                <div class="flex justify-between items-center mb-1 sm:mb-2">
                    <h3 class="text-xl sm:text-2xl font-title font-bold text-primary italic">Sunting Varian</h3>
                    <button type="button" onclick="document.getElementById('modalEditProduk').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors text-2xl leading-none">&times;</button>
                </div>

                <div class="grid gap-4 sm:gap-5">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Nama Varian</label>
                        <input type="text" name="nama" id="editNama" required class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm font-bold">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Harga (Rp)</label>
                            <input type="number" name="harga" id="editHarga" required class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-sm font-bold text-secondary">
                        </div>
                        <div class="space-y-1">
                            <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status Stok</label>
                            <select name="status" id="editStatus"
                                class="w-full px-5 sm:px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                                <option value="Tersedia">Tersedia</option>
                                <option value="Habis">Habis</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Deskripsi Singkat</label>
                        <textarea name="deskripsi" id="editDeskripsi" rows="3" class="w-full px-5 sm:px-6 py-3 sm:py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none text-xs italic"></textarea>
                    </div>
                </div>

                <div class="flex flex-col-reverse sm:flex-row gap-3 sm:gap-4 mt-4">
                    <button type="button" onclick="document.getElementById('modalEditProduk').classList.add('hidden')" class="w-full sm:flex-1 bg-gray-100 text-gray-500 py-3 sm:py-4 rounded-full font-bold uppercase text-[10px]">Batal</button>
                    <button type="submit" class="w-full sm:flex-[2] bg-primary text-highlight py-3 sm:py-4 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalTambah = document.getElementById('modalTambahProduk');
            const modalEdit = document.getElementById('modalEditProduk');

            if (modalTambah) document.body.appendChild(modalTambah);
            if (modalEdit) document.body.appendChild(modalEdit);
        });

        const prodInput = document.getElementById('productImageInput');
        const prodPreview = document.getElementById('productPreview');
        const prodPlaceholder = document.getElementById('productPlaceholder');
        if (prodInput) {
            prodInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        prodPreview.src = e.target.result;
                        prodPreview.classList.remove('hidden');
                        prodPlaceholder.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });
        }

        const editInput = document.getElementById('editImageInput');
        const editPreview = document.getElementById('editPreview');
        if (editInput) {
            editInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        editPreview.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        }

        function editProduct(id, nama, harga, status, deskripsi, imgUrl) {
            document.getElementById('formEditProduk').action = '/admin/produk/update/' + id;
            document.getElementById('editNama').value = nama;
            document.getElementById('editHarga').value = harga;
            document.getElementById('editStatus').value = status;
            document.getElementById('editDeskripsi').value = deskripsi;
            document.getElementById('editPreview').src = imgUrl;
            document.getElementById('modalEditProduk').classList.remove('hidden');
        }

        function confirmDeleteProduct(id, name) {
            Swal.fire({
                title: 'Hapus Varian?',
                text: `Varian "${name}" akan dihapus permanen!`,
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
                    form.action = '/admin/produk/delete/' + id;
                    form.method = 'POST';
                    form.innerHTML = `@csrf @method('DELETE')`;
                    document.body.appendChild(form);
                    form.submit();
                }
            })
        }
    </script>
@endpush
