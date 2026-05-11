@extends('layouts.admin')
@section('title', 'Katalog Varian Asri')

@section('content')
<div class="mb-10 flex justify-between items-end">
    <div>
        <p class="text-[10px] font-bold text-highlight uppercase tracking-[0.3em] mb-1">Inventaris Produk</p>
        <h2 class="text-2xl font-title font-bold text-primary">Kelola Cita Rasa</h2>
    </div>
    <button onclick="document.getElementById('modalTambahProduk').classList.remove('hidden')" class="bg-primary text-highlight px-8 py-3 rounded-full font-bold text-[10px] uppercase tracking-widest shadow-lg hover:bg-secondary transition-all">
        + Tambah Varian Baru
    </button>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    {{-- Card Varian --}}
    <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group relative">
        <div class="absolute top-8 right-8 z-10">
            <span class="bg-accent/10 text-accent border border-accent/20 text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter shadow-sm backdrop-blur-md">Tersedia</span>
        </div>

        <div class="h-52 bg-bgLight rounded-[2rem] mb-6 overflow-hidden relative">
            <img id="displayImg-1" src="https://images.unsplash.com/photo-1505935428862-770b6f24f629?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>

        <div class="space-y-1">
            <h4 class="font-title font-bold text-xl text-primary italic">Original Gula Jawa</h4>
            <p class="text-secondary font-bold text-lg tracking-tight">Rp 25.000 <span class="text-[10px] text-gray-400 font-normal">/ besek</span></p>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-50 flex gap-3">
            <button onclick="editProduct('Original Gula Jawa', 25000, 'Tersedia', 'Resep legendaris dengan gula jawa asli pilihan.', 'https://images.unsplash.com/photo-1505935428862-770b6f24f629?auto=format&fit=crop&q=80&w=800')"
                class="flex-1 text-[10px] font-bold uppercase tracking-widest text-primary border border-bgLight py-3 rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                Edit Data
            </button>
            <button onclick="confirmDeleteProduct('Original Gula Jawa')" class="text-[10px] font-bold uppercase tracking-widest text-red-400 border border-red-50/50 px-4 py-3 rounded-full hover:bg-red-500 hover:text-white transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH PRODUK --}}
<div id="modalTambahProduk" class="hidden fixed inset-0 z-[99] bg-primary/40 backdrop-blur-sm flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-4xl rounded-[3rem] shadow-2xl overflow-hidden flex flex-col md:flex-row">
        <div class="md:w-1/3 bg-bgLight/30 p-10 border-r border-gray-100 flex flex-col items-center justify-center text-center">
            <h4 class="font-title font-bold text-primary mb-6">Foto Varian</h4>
            <div id="productPreviewContainer" class="w-full aspect-square rounded-[2rem] border-2 border-dashed border-highlight/30 bg-white overflow-hidden flex flex-col items-center justify-center relative group">
                <img id="productPreview" src="#" class="hidden w-full h-full object-cover">
                <div id="productPlaceholder" class="p-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-highlight/40 mb-4 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">Klik untuk pilih foto getuk</p>
                </div>
                <input type="file" id="productImageInput" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
            </div>
        </div>

        <div class="md:flex-1 p-10 space-y-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-2xl font-title font-bold text-primary italic">Detail Varian Baru</h3>
                <button onclick="document.getElementById('modalTambahProduk').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors text-2xl">&times;</button>
            </div>

            <div class="grid gap-5">
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Nama Varian</label>
                    <input type="text" placeholder="Misal: Getuk Keju Lumer" class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm font-bold">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Harga (Rp)</label>
                        <input type="number" placeholder="25000" class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-sm font-bold text-secondary">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status Stok</label>
                        <select class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                            <option>Tersedia</option>
                            <option>Habis</option>
                        </select>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Deskripsi Singkat</label>
                    <textarea rows="3" placeholder="Jelaskan keunikan rasa varian ini..." class="w-full px-6 py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none text-xs italic"></textarea>
                </div>
            </div>

            <button type="button" class="w-full bg-primary text-highlight py-4 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">Simpan ke Katalog</button>
        </div>
    </div>
</div>

{{-- MODAL EDIT PRODUK --}}
<div id="modalEditProduk" class="hidden fixed inset-0 z-[99] bg-primary/40 backdrop-blur-sm flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-4xl rounded-[3rem] shadow-2xl overflow-hidden flex flex-col md:flex-row">
        <div class="md:w-1/3 bg-bgLight/30 p-10 border-r border-gray-100 flex flex-col items-center justify-center text-center">
            <h4 class="font-title font-bold text-primary mb-6">Ubah Foto</h4>
            <div class="w-full aspect-square rounded-[2rem] border-2 border-highlight bg-white overflow-hidden relative group">
                <img id="editPreview" src="#" class="w-full h-full object-cover">
                <input type="file" id="editImageInput" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <p class="text-white text-[10px] font-bold uppercase">Ganti Foto</p>
                </div>
            </div>
        </div>

        <div class="md:flex-1 p-10 space-y-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-2xl font-title font-bold text-primary italic">Sunting Varian</h3>
                <button onclick="document.getElementById('modalEditProduk').classList.add('hidden')" class="text-gray-400 hover:text-red-500 transition-colors text-2xl">&times;</button>
            </div>

            <div class="grid gap-5">
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Nama Varian</label>
                    <input type="text" id="editNama" class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none focus:ring-2 focus:ring-highlight text-sm font-bold">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Harga (Rp)</label>
                        <input type="number" id="editHarga" class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-sm font-bold text-secondary">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Status Stok</label>
                        <select id="editStatus" class="w-full px-6 py-3 rounded-full bg-bgLight/20 border border-gray-100 outline-none text-xs font-bold text-accent">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Habis">Habis</option>
                        </select>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[9px] font-bold uppercase text-gray-400 ml-4">Deskripsi Singkat</label>
                    <textarea id="editDeskripsi" rows="3" class="w-full px-6 py-4 rounded-[1.5rem] bg-bgLight/20 border border-gray-100 outline-none text-xs italic"></textarea>
                </div>
            </div>

            <div class="flex gap-4">
                <button type="button" onclick="document.getElementById('modalEditProduk').classList.add('hidden')" class="flex-1 bg-gray-100 text-gray-500 py-4 rounded-full font-bold uppercase text-[10px]">Batal</button>
                <button type="button" onclick="saveEdit()" class="flex-[2] bg-primary text-highlight py-4 rounded-full font-bold uppercase tracking-[0.2em] text-[10px] shadow-xl hover:bg-secondary transition-all">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // PREVIEW IMAGE TAMBAH PRODUK
    const prodInput = document.getElementById('productImageInput');
    const prodPreview = document.getElementById('productPreview');
    const prodPlaceholder = document.getElementById('productPlaceholder');

    if (prodInput) {
        prodInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    prodPreview.src = e.target.result;
                    prodPreview.classList.remove('hidden');
                    prodPlaceholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    }

    // PREVIEW IMAGE EDIT PRODUK (FIXED)
    const editInput = document.getElementById('editImageInput');
    const editPreview = document.getElementById('editPreview');

    if (editInput) {
        editInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    editPreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    }

    // FUNGSI EDIT PRODUK (POPULATE DATA)
    function editProduct(nama, harga, status, deskripsi, imgUrl) {
        document.getElementById('editNama').value = nama;
        document.getElementById('editHarga').value = harga;
        document.getElementById('editStatus').value = status;
        document.getElementById('editDeskripsi').value = deskripsi;
        document.getElementById('editPreview').src = imgUrl;

        document.getElementById('modalEditProduk').classList.remove('hidden');
    }

    // SWEETALERT HAPUS
    function confirmDeleteProduct(name) {
        Swal.fire({
            title: 'Hapus Varian?',
            text: `Varian "${name}" akan dihapus permanen dari katalog.`,
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
                Swal.fire({
                    title: 'Terhapus!',
                    text: 'Varian telah dihapus.',
                    icon: 'success',
                    confirmButtonColor: '#5C2E00'
                });
            }
        })
    }

    // SIMULASI SIMPAN EDIT
    function saveEdit() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data varian telah diperbarui.',
            confirmButtonColor: '#5C2E00',
            background: '#F5E6D3',
            color: '#5C2E00',
        }).then(() => {
            document.getElementById('modalEditProduk').classList.add('hidden');
        });
    }
</script>
@endpush