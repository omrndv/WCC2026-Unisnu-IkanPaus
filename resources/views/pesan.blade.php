@extends('layouts.app')

@section('title', 'Pemesanan & Custom Hampers - Warisan Rasa Banyumas')

@section('content')
    <section class="relative bg-primary pt-36 pb-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10 mix-blend-overlay"
            style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png'); background-repeat: repeat;">
        </div>

        <div class="absolute inset-0 bg-gradient-to-b from-primary/30 via-transparent to-primary/90"></div>
        <div
            class="absolute top-0 right-0 w-[400px] h-[400px] bg-highlight rounded-full blur-[150px] opacity-15 translate-x-1/3">
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="hero-text text-4xl md:text-5xl lg:text-6xl font-title text-white mb-4 opacity-0">
                Selesaikan <span class="italic text-highlight">Pesananmu</span>
            </h1>
            <p class="hero-text text-lg text-white/70 font-light max-w-2xl mx-auto opacity-0">
                Pesan varian reguler atau rancang hampers spesialmu sendiri. Pesanan akan langsung terhubung ke WhatsApp
                admin kami.
            </p>
        </div>
    </section>

    <section class="py-12 bg-[#FAFAFA] min-h-screen relative z-10 -mt-8 rounded-t-[2.5rem]">
        <div class="container mx-auto px-6 mt-4">
            <div class="flex flex-col lg:flex-row gap-10">

                <div class="w-full lg:w-7/12 order-2 lg:order-1 flex flex-col gap-8">

                    <div
                        class="form-box bg-white p-8 md:p-10 rounded-[2rem] shadow-[0_8px_30px_rgba(0,0,0,0.03)] border border-gray-100 opacity-0">
                        <h2 class="text-2xl font-title font-bold text-primary mb-6 flex items-center gap-3">
                            <span
                                class="w-8 h-8 rounded-full bg-highlight/20 text-highlight flex items-center justify-center text-sm">1</span>
                            Pilih Tipe Pesanan
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <label class="cursor-pointer relative block group">
                                <input type="radio" name="order_type" value="reguler" class="peer sr-only" checked
                                    onchange="toggleOrderType()">
                                <div
                                    class="p-6 rounded-2xl border-2 border-gray-100 group-hover:border-primary/30 peer-checked:border-primary peer-checked:bg-[#FAF8F5] transition-all h-full">
                                    <h3 class="font-bold text-primary mb-1 text-lg">Pesanan Reguler</h3>
                                    <p class="text-sm text-gray-500 font-light">Beli satuan/box untuk konsumsi harian.</p>

                                    <div
                                        class="radio-outer absolute top-6 right-6 w-6 h-6 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center transition-colors">
                                        <div
                                            class="radio-inner w-3 h-3 bg-primary rounded-full opacity-0 scale-50 transition-all duration-300">
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <label class="cursor-pointer relative block group">
                                <input type="radio" name="order_type" value="hampers" class="peer sr-only"
                                    onchange="toggleOrderType()">
                                <div
                                    class="p-6 rounded-2xl border-2 border-gray-100 group-hover:border-primary/30 peer-checked:border-highlight peer-checked:bg-highlight/5 transition-all h-full">
                                    <span
                                        class="absolute -top-3 right-6 bg-highlight text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Spesial</span>
                                    <h3 class="font-bold text-primary mb-1 text-lg">Custom Hampers</h3>
                                    <p class="text-sm text-gray-500 font-light">Buat isian & kemasan eksklusif sendiri.</p>

                                    <div
                                        class="radio-outer absolute top-6 right-6 w-6 h-6 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center transition-colors">
                                        <div
                                            class="radio-inner w-3 h-3 bg-highlight rounded-full opacity-0 scale-50 transition-all duration-300">
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="hampers-builder"
                        class="hidden bg-white p-8 md:p-10 rounded-[2rem] shadow-[0_8px_30px_rgba(0,0,0,0.03)] border border-highlight/30 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-highlight/10 rounded-bl-full -z-10"></div>
                        <h2 class="text-2xl font-title font-bold text-primary mb-2 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-highlight" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            Hampers Builder
                        </h2>
                        <p class="text-gray-500 text-sm mb-8 font-light">Pilih kemasan, varian rasa, dan kartu ucapanmu.</p>

                        <div class="mb-8">
                            <h4 class="font-bold text-primary mb-4 text-sm uppercase tracking-wider">1. Pilih Kemasan</h4>
                            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                                <label class="cursor-pointer group block">
                                    <input type="radio" name="packaging" value="besek" class="peer sr-only" checked>
                                    <div
                                        class="border border-gray-200 rounded-xl p-4 text-center peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
                                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-lg mb-3 overflow-hidden"><img
                                                src="https://images.unsplash.com/photo-1514517604298-cf80e0fb7f1e?auto=format&fit=crop&q=80&w=200"
                                                class="w-full h-full object-cover"></div>
                                        <h5 class="font-bold text-primary text-sm">Besek Bambu</h5>
                                        <p class="text-xs text-highlight font-bold mt-1">+ Rp 15.000</p>
                                    </div>
                                </label>
                                <label class="cursor-pointer group block">
                                    <input type="radio" name="packaging" value="premium" class="peer sr-only">
                                    <div
                                        class="border border-gray-200 rounded-xl p-4 text-center peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
                                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-lg mb-3 overflow-hidden"><img
                                                src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?auto=format&fit=crop&q=80&w=200"
                                                class="w-full h-full object-cover"></div>
                                        <h5 class="font-bold text-primary text-sm">Box Premium</h5>
                                        <p class="text-xs text-highlight font-bold mt-1">+ Rp 25.000</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="flex justify-between items-end mb-4">
                                <h4 class="font-bold text-primary text-sm uppercase tracking-wider">2. Isi Varian (Maks. 3)
                                </h4>
                                <span class="text-xs text-gray-400">Pilih <span id="isian-count">0</span>/3</span>
                            </div>
                            <div class="space-y-3">
                                <label
                                    class="flex items-center justify-between p-3 border border-gray-100 rounded-xl hover:bg-gray-50 cursor-pointer transition-colors">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox"
                                            class="w-5 h-5 rounded border-gray-300 text-highlight focus:ring-highlight custom-isian">
                                        <span class="font-medium text-primary">Original Gula Jawa</span>
                                    </div>
                                    <span class="text-sm font-bold text-gray-500">Rp 25.000</span>
                                </label>
                                <label
                                    class="flex items-center justify-between p-3 border border-gray-100 rounded-xl hover:bg-gray-50 cursor-pointer transition-colors">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox"
                                            class="w-5 h-5 rounded border-gray-300 text-highlight focus:ring-highlight custom-isian">
                                        <span class="font-medium text-primary">Cokelat Lumer Premium</span>
                                    </div>
                                    <span class="text-sm font-bold text-gray-500">Rp 35.000</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-bold text-primary mb-4 text-sm uppercase tracking-wider">3. Kartu Ucapan
                                (Gratis)</h4>
                            <textarea rows="3" placeholder="Tulis ucapan untuk penerima..."
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm focus:outline-none focus:ring-2 focus:ring-highlight/50 focus:border-highlight transition-all resize-none"></textarea>
                        </div>
                    </div>

                    <div
                        class="form-box bg-white p-8 md:p-10 rounded-[2rem] shadow-[0_8px_30px_rgba(0,0,0,0.03)] border border-gray-100 opacity-0">
                        <h2 class="text-2xl font-title font-bold text-primary mb-6 flex items-center gap-3">
                            <span
                                class="w-8 h-8 rounded-full bg-highlight/20 text-highlight flex items-center justify-center text-sm"
                                id="step-number">2</span>
                            Informasi Pengiriman
                        </h2>

                        <div class="space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-bold text-primary mb-2">Nama Lengkap</label>
                                    <input type="text" placeholder="Cth: Bagus Purnama"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-primary mb-2">Nomor WhatsApp</label>
                                    <input type="tel" id="wa-input" placeholder="0812xxxxxx"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-primary mb-2">Metode Penerimaan</label>
                                <select
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-pointer">
                                    <option value="kirim">Kirim via Kurir (JNE/Paxel)</option>
                                    <option value="ambil">Ambil di Toko (Sokaraja)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-primary mb-2">Alamat Lengkap</label>
                                <textarea rows="3" placeholder="Masukkan alamat lengkap pengiriman..."
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl p-4 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="w-full lg:w-5/12 order-1 lg:order-2">
                    <div
                        class="form-box bg-white rounded-[2.5rem] shadow-[0_15px_40px_rgba(0,0,0,0.06)] border border-gray-100 p-8 lg:p-10 sticky top-24 opacity-0">
                        <h3 class="text-2xl font-title font-bold text-primary mb-6 border-b border-gray-100 pb-4">Ringkasan
                            Pesanan</h3>

                        <div class="space-y-4 mb-6 min-h-[150px]">
                            <div class="flex justify-between items-center reguler-item">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-lg bg-gray-100 overflow-hidden">
                                        <img src="{{ asset('images/produk/getukgoreng.jpeg') }}"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-primary text-sm">Getuk Original</h5>
                                        <p class="text-xs text-gray-500">1 x Rp 25.000</p>
                                    </div>
                                </div>
                                <span class="font-bold text-primary text-sm">Rp 25.000</span>
                            </div>

                            <div id="hampers-summary" class="hidden">
                                <div class="bg-highlight/10 border border-highlight/20 rounded-xl p-4">
                                    <div class="flex justify-between items-start mb-2">
                                        <h5 class="font-bold text-primary text-sm flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-highlight"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                                    clip-rule="evenodd" />
                                                <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                                            </svg>
                                            Custom Hampers
                                        </h5>
                                        <span class="font-bold text-primary text-sm">Rp 85.000</span>
                                    </div>
                                    <ul class="text-xs text-gray-500 space-y-1 list-disc list-inside">
                                        <li>Besek Bambu</li>
                                        <li>Getuk Original</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-4 space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Subtotal</span>
                                <span class="font-bold text-primary">Rp 25.000</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Ongkos Kirim</span>
                                <span class="font-bold text-primary text-right">Dihitung di WA</span>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4 mb-8">
                            <div class="flex justify-between items-end">
                                <span class="text-lg font-bold text-primary">Total Estimasi</span>
                                <span class="text-3xl font-title font-bold text-secondary">Rp 25.000</span>
                            </div>
                        </div>

                        <button
                            class="w-full bg-green-500 text-white py-4 rounded-full font-bold text-lg hover:bg-green-600 transition-all duration-300 shadow-lg flex items-center justify-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.305-.885-.653-1.482-1.46-1.655-1.758-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Kirim Pesanan via WA
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // GSAP Murni untuk mencegah teks hilang
        document.addEventListener("DOMContentLoaded", function() {
            gsap.to(".hero-text", {
                duration: 1,
                y: 0,
                opacity: 1,
                stagger: 0.2,
                ease: "power3.out",
                delay: 0.1
            });

            gsap.to(".form-box", {
                duration: 1,
                y: 0,
                opacity: 1,
                stagger: 0.2,
                ease: "power3.out",
                delay: 0.3
            });
        });

        function toggleOrderType() {
            const orderType = document.querySelector('input[name="order_type"]:checked').value;
            const hampersBuilder = document.getElementById('hampers-builder');
            const stepNumber = document.getElementById('step-number');
            const regulerItem = document.querySelector('.reguler-item');
            const hampersSummary = document.getElementById('hampers-summary');

            if (orderType === 'hampers') {
                hampersBuilder.classList.remove('hidden');
                gsap.fromTo(hampersBuilder, {
                    opacity: 0,
                    height: 0,
                    y: -20
                }, {
                    opacity: 1,
                    height: 'auto',
                    y: 0,
                    duration: 0.5,
                    ease: "power2.out"
                });
                stepNumber.textContent = "3";
                if (regulerItem) regulerItem.style.display = 'none';
                hampersSummary.classList.remove('hidden');
            } else {
                gsap.to(hampersBuilder, {
                    opacity: 0,
                    height: 0,
                    y: -20,
                    duration: 0.4,
                    ease: "power2.in",
                    onComplete: () => {
                        hampersBuilder.classList.add('hidden');
                    }
                });
                stepNumber.textContent = "2";
                if (regulerItem) regulerItem.style.display = 'flex';
                hampersSummary.classList.add('hidden');
            }
        }

        const isianCheckboxes = document.querySelectorAll('.custom-isian');
        const isianCountText = document.getElementById('isian-count');

        isianCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedCount = document.querySelectorAll('.custom-isian:checked').length;
                if (checkedCount > 3) {
                    this.checked = false;
                    alert("Maksimal hanya bisa memilih 3 varian rasa untuk satu hampers ya!");
                    return;
                }
                isianCountText.textContent = checkedCount;
            });
        });
    </script>
@endpush

@push('styles')
    <style>
        .radio-inner {
            transform: scale(0.5);
        }

        input[type="radio"][value="reguler"]:checked+div .radio-outer {
            border-color: #5C2E00;
        }

        input[type="radio"][value="reguler"]:checked+div .radio-inner {
            opacity: 1;
            transform: scale(1);
        }

        input[type="radio"][value="hampers"]:checked+div .radio-outer {
            border-color: #F4A843;
        }

        input[type="radio"][value="hampers"]:checked+div .radio-inner {
            opacity: 1;
            transform: scale(1);
        }
    </style>
@endpush
