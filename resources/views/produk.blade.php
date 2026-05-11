@extends('layouts.app')

@section('title', 'Katalog Produk - Warisan Rasa Banyumas')

@section('content')
    <!-- ========================================== -->
    <!-- HERO SECTION -->
    <!-- ========================================== -->
    <section class="relative bg-primary pt-32 pb-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-100 mix-blend-overlay"
            style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png'); background-repeat: repeat;">
        </div>

        <!-- Jika nanti ingin pakai file gambar batik sendiri, hapus div di atas dan gunakan yang di bawah ini: -->
        <!--
                        <div class="absolute inset-0 opacity-15 mix-blend-overlay"
                             style="background-image: url('{{ asset('images/pattern-batik.png') }}'); background-repeat: repeat; background-size: 300px;">
                        </div>
                        -->
        <div class="absolute inset-0 bg-gradient-to-b from-primary/30 via-transparent to-primary/90"></div>
        <div
            class="absolute top-0 right-0 w-[600px] h-[600px] bg-highlight rounded-full blur-[180px] opacity-15 -translate-y-1/2 translate-x-1/3">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary rounded-full blur-[150px] opacity-20 translate-y-1/3 -translate-x-1/4">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-3 px-5 py-2.5 bg-white/10 backdrop-blur-md rounded-full text-highlight font-bold tracking-widest uppercase text-xs mb-6 border border-white/20 animate-fade-in">
                    <span class="w-2 h-2 rounded-full bg-highlight animate-pulse"></span> Etalase Digital
                </div>
                <h1 class="text-5xl md:text-7xl font-title text-white mb-6 leading-[1.1] animate-slide-up">
                    Koleksi Rasa <br>
                    <span class="italic text-highlight">Nusantara</span>
                </h1>
                <p class="text-lg text-white/70 font-light max-w-xl leading-relaxed animate-slide-up delay-200">
                    Jelajahi puluhan varian getuk goreng autentik Banyumas. Dari resep klasik warisan 1940 hingga inovasi
                    rasa modern.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- FILTER BAR -->
    <!-- ========================================== -->
    <section
        class="relative z-10 bg-white/80 backdrop-blur-xl border-b border-gray-100 shadow-sm py-4 -mt-1 rounded-t-[2rem]"
        id="filter-bar">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                <!-- Search -->
                <div class="relative w-full lg:w-96 group">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" id="search-input" placeholder="Cari varian rasa..."
                        class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all placeholder-gray-400 hover:bg-white focus:bg-white">
                </div>

                <!-- Filter Groups -->
                <div class="flex items-center gap-3 overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 no-scrollbar">
                    <button
                        class="filter-btn active px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-primary text-white shadow-lg hover:shadow-primary/30 whitespace-nowrap"
                        data-filter="all">Semua</button>
                    <button
                        class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-600 hover:bg-gray-200 hover:shadow-md whitespace-nowrap"
                        data-filter="klasik">Klasik</button>
                    <button
                        class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-600 hover:bg-gray-200 hover:shadow-md whitespace-nowrap"
                        data-filter="premium">Premium</button>
                </div>

                <!-- Sort -->
                <div class="flex items-center gap-4">
                    <select id="sort-select"
                        class="bg-gray-50 border border-gray-200 rounded-full px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary cursor-pointer hover:bg-white transition-colors">
                        <option value="popular">Paling Populer</option>
                        <option value="price-low">Harga: Rendah - Tinggi</option>
                        <option value="price-high">Harga: Tinggi - Rendah</option>
                    </select>

                    <div class="hidden md:flex items-center bg-gray-100 rounded-full p-1">
                        <button
                            class="view-btn p-2 rounded-full bg-white shadow-sm text-primary transition-all hover:scale-105"
                            data-cols="2" title="2 Kolom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z" />
                            </svg>
                        </button>
                        <button
                            class="view-btn p-2 rounded-full text-gray-400 hover:text-primary transition-all hover:scale-105"
                            data-cols="3" title="3 Kolom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- MAIN CATALOG AREA -->
    <!-- ========================================== -->
    <section class="py-12 bg-[#FAFAFA] min-h-screen">
        <div class="container mx-auto px-6">

            <!-- VISUAL BREAKER 1: PROMO BANNER -->
            <div
                class="mb-12 relative rounded-[2.5rem] bg-primary overflow-hidden shadow-xl flex flex-col md:flex-row items-center justify-between p-8 md:p-12 border border-highlight/20 group">
                <!-- Background Ornament -->
                <div class="absolute inset-0 opacity-50 mix-blend-overlay"
                    style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');"></div>
                <div
                    class="absolute -right-20 -top-20 w-64 h-64 bg-highlight/30 rounded-full blur-3xl transition-transform duration-700 group-hover:scale-150">
                </div>

                <!-- Text Content -->
                <div class="relative z-10 max-w-xl mb-8 md:mb-0">
                    <span
                        class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-md text-highlight border border-white/20 rounded-full text-xs font-bold tracking-widest mb-4">PROMO
                        MINGGU INI</span>
                    <h3 class="text-3xl md:text-4xl font-title text-white font-bold mb-4 leading-tight">Beli 3 Box
                        Getuk,<br>Gratis 1 Kripik Tempe!</h3>
                    <p class="text-white/70 mb-6 font-light">Berlaku untuk semua varian Getuk Goreng Premium. Cocok untuk
                        stok cemilan keluarga di rumah.</p>
                    <button
                        class="bg-highlight text-primary px-8 py-3.5 rounded-full font-bold hover:bg-white transition-all duration-300 shadow-[0_0_20px_rgba(244,168,67,0.3)] transform hover:-translate-y-1">
                        Klaim Promo Sekarang
                    </button>
                </div>

                <!-- Floating Image -->
                <div class="relative z-10 w-full md:w-1/3 flex justify-center">
                    <div class="relative w-48 h-48 md:w-56 md:h-56">
                        <div class="absolute inset-0 bg-highlight rounded-full animate-pulse opacity-20 blur-xl"></div>
                        <img src="{{ asset('images/produk/getukgoreng.jpeg') }}" alt="Promo"
                            class="relative z-10 w-full h-full object-cover rounded-full border-4 border-white/20 shadow-2xl transform rotate-12 group-hover:rotate-0 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- PRODUCT GRID -->
            <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                @php
                    $products = [
                        [
                            'id' => 1,
                            'name' => 'Original Gula Jawa',
                            'category' => 'klasik',
                            'price' => 25000,
                            'rating' => 4.9,
                            'badge' => 'TERLARIS',
                            'badge_color' => 'bg-highlight',
                            'desc' =>
                                'Cita rasa asli gula kelapa yang manis, legit, dan gurih melegenda sejak tahun 1940.',
                        ],
                        [
                            'id' => 2,
                            'name' => 'Cokelat Lumer Premium',
                            'category' => 'premium',
                            'price' => 35000,
                            'rating' => 4.8,
                            'badge' => 'PREMIUM',
                            'badge_color' => 'bg-accent',
                            'desc' =>
                                'Isian cokelat Belgian premium yang meleleh sempurna di mulut dengan tekstur singkong super lembut.',
                        ],
                        [
                            'id' => 4,
                            'name' => 'Keju Susu Holland',
                            'category' => 'premium',
                            'price' => 30000,
                            'rating' => 4.7,
                            'badge' => 'NEW',
                            'badge_color' => 'bg-accent',
                            'desc' =>
                                'Perpaduan gurih keju cheddar premium dan susu segar dalam balutan singkong yang renyah.',
                        ],
                        [
                            'id' => 5,
                            'name' => 'Matcha Kyoto',
                            'category' => 'premium',
                            'price' => 40000,
                            'rating' => 4.8,
                            'badge' => 'PREMIUM',
                            'badge_color' => 'bg-accent',
                            'desc' =>
                                'Bubuk matcha grade ceremonial dari Uji, Jepang. Rasa teh hijau yang autentik dengan sentuhan gula kelapa.',
                        ],
                        [
                            'id' => 7,
                            'name' => 'Pandan Kelapa',
                            'category' => 'klasik',
                            'price' => 28000,
                            'rating' => 4.6,
                            'badge' => 'KLASIK',
                            'badge_color' => 'bg-primary',
                            'desc' =>
                                'Aroma pandan asli yang menyegarkan dipadukan dengan parutan kelapa sangrai gurih.',
                        ],
                        [
                            'id' => 8,
                            'name' => 'Kacang Caramel',
                            'category' => 'premium',
                            'price' => 32000,
                            'rating' => 4.7,
                            'badge' => 'PREMIUM',
                            'badge_color' => 'bg-accent',
                            'desc' =>
                                'Kacang tanah pilihan dengan lapisan caramel yang renyah, perpaduan sempurna manis dan gurih.',
                        ],
                        [
                            'id' => 9,
                            'name' => 'Durian Montong',
                            'category' => 'premium',
                            'price' => 38000,
                            'rating' => 4.9,
                            'badge' => 'PREMIUM',
                            'badge_color' => 'bg-accent',
                            'desc' =>
                                'Daging durian Montong asli yang creamy dan legit, favorit para pecinta durian sejati.',
                        ],
                    ];

                    $productImage = asset('images/produk/getukgoreng.jpeg');
                @endphp

                @foreach ($products as $product)
                    <!-- Product Card Statis -->
                    <div class="product-card group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_25px_50px_rgba(92,46,0,0.12)] transition-all duration-500 border border-gray-100 relative"
                        data-category="{{ $product['category'] }}" data-price="{{ $product['price'] }}"
                        data-popular="{{ $product['rating'] * 20 }}" data-name="{{ strtolower($product['name']) }}">

                        <div class="relative h-80 overflow-hidden img-container bg-gray-100">
                            <div class="absolute top-5 left-5 z-20">
                                <span
                                    class="{{ $product['badge_color'] }} text-white px-4 py-1.5 rounded-full text-xs font-bold tracking-wider shadow-md">{{ $product['badge'] }}</span>
                            </div>

                            <button
                                class="wishlist-btn absolute top-5 right-5 z-20 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>

                            <img src="{{ $productImage }}" alt="{{ $product['name'] }}"
                                class="product-img w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

                            <div
                                class="shine-effect absolute inset-0 bg-gradient-to-tr from-transparent via-white/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none z-10">
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-6 translate-y-4 group-hover:translate-y-0 z-20">
                                <button onclick="openQuickView({{ $product['id'] }})"
                                    class="w-full bg-white text-primary py-3 rounded-full font-bold text-sm hover:bg-highlight hover:text-white transition-all duration-300 mb-3 shadow-lg transform hover:scale-105">
                                    Lihat Detail Cepat
                                </button>
                                <button
                                    class="add-to-cart w-full bg-highlight text-white py-3 rounded-full font-bold text-sm hover:bg-white hover:text-primary transition-all duration-300 shadow-lg flex items-center justify-center gap-2 transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </div>

                        <div class="p-8 relative z-10 bg-white">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3
                                        class="text-xl font-title font-bold text-primary group-hover:text-secondary transition-colors">
                                        {{ $product['name'] }}</h3>
                                    <p class="text-sm text-gray-400 mt-1">Box isi 10 pcs</p>
                                </div>
                                <div class="flex items-center gap-1 text-highlight">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-bold text-gray-600">{{ $product['rating'] }}</span>
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm mb-6 line-clamp-2 leading-relaxed">{{ $product['desc'] }}</p>

                            <div class="flex items-end justify-between border-t border-gray-100 pt-6">
                                <div>
                                    <span class="text-2xl font-title font-bold text-secondary">Rp
                                        {{ number_format($product['price'], 0, ',', '.') }}</span>
                                    <span class="text-xs text-gray-400 block">/ box</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button
                                        class="qty-minus w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-colors">-</button>
                                    <span class="w-8 text-center text-sm font-bold qty-display">1</span>
                                    <button
                                        class="qty-plus w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-colors">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12 mb-24">
                <button id="load-more"
                    class="inline-flex items-center gap-3 bg-white border-2 border-primary text-primary px-10 py-4 rounded-full font-bold text-lg hover:bg-primary hover:text-white transition-all duration-500 shadow-lg hover:shadow-xl group">
                    <span>Muat Lebih Banyak Varian</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-y-1 transition-transform"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>


            <!-- VISUAL BREAKER 2: TESTIMONIAL QUOTE -->
            <div
                class="mb-24 bg-highlight/5 rounded-[2rem] p-10 md:p-16 text-center relative overflow-hidden border border-highlight/10">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute top-8 left-1/2 -translate-x-1/2 w-32 h-32 text-highlight/10" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <div class="flex justify-center text-highlight mb-6">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <p class="text-2xl md:text-3xl font-title text-primary leading-relaxed italic mb-8">
                        "Satu-satunya getuk goreng yang rasanya tidak pernah berubah dari saya kecil sampai sekarang punya
                        cucu. Manisnya pas, singkongnya empuk, pengemasannya juga sangat rapi."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden border-2 border-white shadow-sm">
                            <img src="https://i.pravatar.cc/100?img=5" alt="Customer" class="w-full h-full object-cover">
                        </div>
                        <div class="text-left">
                            <h5 class="font-bold text-primary">Ibu Sudjiati</h5>
                            <p class="text-xs text-gray-500 uppercase tracking-widest">Pelanggan Setia sejak 1990</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- QUICK VIEW MODAL & UTILITIES -->
    <!-- ========================================== -->
    <div id="quick-view-modal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity opacity-0" id="modal-backdrop"></div>
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div class="bg-white rounded-[2.5rem] max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform scale-95 opacity-0 transition-all duration-500"
                id="modal-content">
                <button onclick="closeQuickView()"
                    class="absolute top-6 right-6 w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-all z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="grid md:grid-cols-2">
                    <div
                        class="h-80 md:h-full relative overflow-hidden rounded-t-[2.5rem] md:rounded-l-[2.5rem] md:rounded-tr-none bg-gray-100">
                        <img id="modal-img" src="{{ asset('images/produk/getukgoreng.jpeg') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-10 md:p-12">
                        <div id="modal-badges" class="flex flex-wrap gap-2 mb-4"></div>
                        <h2 id="modal-title" class="text-3xl md:text-4xl font-title font-bold text-primary mb-4"></h2>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex text-highlight" id="modal-rating"></div>
                            <span class="text-sm text-gray-400">124 ulasan</span>
                        </div>
                        <p id="modal-desc" class="text-gray-600 leading-relaxed mb-8"></p>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-3 text-sm text-gray-600">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Tanpa pengawet & pemanis buatan
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-600">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Tahan 7 hari dalam suhu ruang
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-600">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Pengiriman seluruh Indonesia
                            </div>
                        </div>

                        <div class="flex items-end justify-between border-t border-gray-100 pt-6 mb-8">
                            <div>
                                <span id="modal-price" class="text-4xl font-title font-bold text-secondary"></span>
                                <span class="text-gray-400 ml-2" id="modal-unit">/ box isi 10 pcs</span>
                            </div>
                            <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
                                <button
                                    class="w-8 h-8 flex items-center justify-center text-primary font-bold text-lg hover:bg-white rounded-full transition-colors modal-qty-minus">-</button>
                                <span class="w-8 text-center font-bold modal-qty-display">1</span>
                                <button
                                    class="w-8 h-8 flex items-center justify-center text-primary font-bold text-lg hover:bg-white rounded-full transition-colors modal-qty-plus">+</button>
                            </div>
                        </div>

                        <button
                            class="add-to-cart w-full bg-primary text-white py-4 rounded-full font-bold text-lg hover:bg-secondary transition-all duration-300 shadow-xl hover:-translate-y-1 flex items-center justify-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Cart Button -->
    <div class="fixed bottom-8 right-8 z-40">
        <button
            class="bg-primary text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center hover:bg-secondary hover:scale-110 transition-all duration-300 relative group cart-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span id="cart-count"
                class="absolute -top-2 -right-2 bg-highlight text-primary text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center border-2 border-white transform scale-0 transition-transform duration-300">0</span>
            <span
                class="absolute right-full mr-4 bg-primary text-white text-sm px-4 py-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Lihat
                Keranjang</span>
        </button>
    </div>

    <!-- Toast Notification -->
    <div id="toast"
        class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 transform translate-y-20 opacity-0 transition-all duration-500">
        <div class="bg-primary text-white px-8 py-4 rounded-full shadow-2xl flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-highlight" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span class="font-semibold">Berhasil ditambahkan ke keranjang!</span>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const productsData = {
            @php
                $allProducts = array_merge($products, [['id' => 6, 'name' => 'Hampers Sultan', 'category' => 'hampers', 'price' => 150000, 'rating' => 5.0, 'badge' => 'LIMITED', 'badge_color' => 'bg-red-500', 'desc' => 'Koleksi lengkap 6 varian best seller dalam box kayu jati ukir khas Banyumas.'], ['id' => 10, 'name' => 'Hampers Lebaran', 'category' => 'hampers', 'price' => 120000, 'rating' => 4.9, 'badge' => 'SEASONAL', 'badge_color' => 'bg-green-600', 'desc' => 'Paket spesial Lebaran dengan 4 varian + takjil dan kartu ucapan selamat Idul Fitri.']]);
            @endphp
            @foreach ($allProducts as $product)
                {{ $product['id'] }}: {
                    title: "{{ $product['name'] }}",
                    price: "Rp {{ number_format($product['price'], 0, ',', '.') }}",
                    unit: "/ item",
                    desc: "{{ $product['desc'] }}",
                    img: "{{ asset('images/produk/getukgoreng.jpeg') }}",
                    badge: '<span class="{{ $product['badge_color'] }} text-white px-3 py-1 rounded-full text-xs font-bold">{{ $product['badge'] }}</span>',
                    rating: {{ ceil($product['rating']) }}
                },
            @endforeach
        };

        let cartCount = 0;

        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');
        const searchInput = document.getElementById('search-input');
        const sortSelect = document.getElementById('sort-select');

        function filterProducts() {
            const activeFilter = document.querySelector('.filter-btn.bg-primary')?.dataset.filter || 'all';
            const search = searchInput.value.toLowerCase();
            const sortValue = sortSelect.value;

            let visibleCards = [];

            productCards.forEach(card => {
                const category = card.dataset.category;
                const name = card.dataset.name;
                const desc = card.querySelector('p').textContent.toLowerCase();
                const matchesCategory = activeFilter === 'all' || category === activeFilter;
                const matchesSearch = name.includes(search) || desc.includes(search);

                if (matchesCategory && matchesSearch) {
                    card.style.display = 'block';
                    visibleCards.push(card);
                } else {
                    card.style.display = 'none';
                }
            });

            // Sort
            visibleCards.sort((a, b) => {
                if (sortValue === 'price-low') return parseInt(a.dataset.price) - parseInt(b.dataset.price);
                if (sortValue === 'price-high') return parseInt(b.dataset.price) - parseInt(a.dataset.price);
                if (sortValue === 'popular') return parseInt(b.dataset.popular) - parseInt(a.dataset.popular);
                return 0;
            });

            const grid = document.getElementById('product-grid');
            visibleCards.forEach(card => grid.appendChild(card));
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white', 'shadow-lg');
                    b.classList.add('bg-gray-100', 'text-gray-600');
                });
                btn.classList.remove('bg-gray-100', 'text-gray-600');
                btn.classList.add('bg-primary', 'text-white', 'shadow-lg');
                filterProducts();
            });
        });

        searchInput.addEventListener('input', filterProducts);
        sortSelect.addEventListener('change', filterProducts);

        // Quantity handlers
        document.querySelectorAll('.qty-plus').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const display = btn.parentElement.querySelector('.qty-display');
                display.textContent = parseInt(display.textContent) + 1;
            });
        });

        document.querySelectorAll('.qty-minus').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const display = btn.parentElement.querySelector('.qty-display');
                if (parseInt(display.textContent) > 1) {
                    display.textContent = parseInt(display.textContent) - 1;
                }
            });
        });

        // Add to cart
        document.querySelectorAll('.add-to-cart').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                cartCount++;
                updateCartCount();
                showToast();

                gsap.to(btn, {
                    scale: 0.95,
                    duration: 0.1,
                    yoyo: true,
                    repeat: 1
                });

                const cartBtn = document.querySelector('.cart-bounce');
                gsap.fromTo(cartBtn, {
                    scale: 1.2
                }, {
                    scale: 1,
                    duration: 0.4,
                    ease: "elastic.out(1, 0.3)"
                });
            });
        });

        function updateCartCount() {
            const badge = document.getElementById('cart-count');
            badge.textContent = cartCount;
            badge.classList.remove('scale-0');
            badge.classList.add('scale-100');
            gsap.fromTo(badge, {
                scale: 1.5
            }, {
                scale: 1,
                duration: 0.3,
                ease: "back.out(1.7)"
            });
        }

        function showToast() {
            const toast = document.getElementById('toast');
            toast.classList.remove('translate-y-20', 'opacity-0');
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }

        // Wishlist toggle
        document.querySelectorAll('.wishlist-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const svg = btn.querySelector('svg');
                if (btn.classList.contains('text-red-500')) {
                    btn.classList.remove('text-red-500');
                    btn.classList.add('text-gray-400');
                    svg.setAttribute('fill', 'none');
                } else {
                    btn.classList.remove('text-gray-400');
                    btn.classList.add('text-red-500');
                    svg.setAttribute('fill', 'currentColor');
                    gsap.fromTo(btn, {
                        scale: 1.3
                    }, {
                        scale: 1,
                        duration: 0.3,
                        ease: "elastic.out(1, 0.3)"
                    });
                }
            });
        });

        // Quick View Modal
        function openQuickView(id) {
            const product = productsData[id];
            if (!product) return;

            document.getElementById('modal-title').textContent = product.title;
            document.getElementById('modal-price').textContent = product.price;
            document.getElementById('modal-desc').textContent = product.desc;
            document.getElementById('modal-img').src = product.img;

            const badgesContainer = document.getElementById('modal-badges');
            badgesContainer.innerHTML = product.badge;

            const ratingContainer = document.getElementById('modal-rating');
            ratingContainer.innerHTML = '';
            for (let i = 0; i < 5; i++) {
                const star = document.createElement('svg');
                star.className = 'w-5 h-5 ' + (i < product.rating ? 'fill-current' : 'text-gray-300');
                star.setAttribute('viewBox', '0 0 20 20');
                star.innerHTML =
                    '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>';
                ratingContainer.appendChild(star);
            }

            const modal = document.getElementById('quick-view-modal');
            const backdrop = document.getElementById('modal-backdrop');
            const content = document.getElementById('modal-content');

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            setTimeout(() => {
                backdrop.classList.remove('opacity-0');
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeQuickView() {
            const modal = document.getElementById('quick-view-modal');
            const backdrop = document.getElementById('modal-backdrop');
            const content = document.getElementById('modal-content');

            backdrop.classList.add('opacity-0');
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 500);
        }

        document.getElementById('modal-backdrop').addEventListener('click', closeQuickView);

        // View toggle
        const viewBtns = document.querySelectorAll('.view-btn');
        const productGrid = document.getElementById('product-grid');

        viewBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                viewBtns.forEach(b => {
                    b.classList.remove('bg-white', 'shadow-sm', 'text-primary');
                    b.classList.add('text-gray-400');
                });
                btn.classList.remove('text-gray-400');
                btn.classList.add('bg-white', 'shadow-sm', 'text-primary');

                const cols = btn.dataset.cols;
                productGrid.className = `grid gap-8 mb-16 ${
                cols === '2' ? 'grid-cols-1 md:grid-cols-2' : 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'
            }`;
            });
        });

        // GSAP Animations (Hanya Hero & Floating Button)
        gsap.from(".hero-bg h1", {
            duration: 1.2,
            y: 60,
            opacity: 0,
            ease: "power4.out",
            delay: 0.2
        });

        gsap.from(".fixed.bottom-8", {
            delay: 1.5,
            scale: 0,
            opacity: 0,
            duration: 0.6,
            ease: "back.out(1.7)"
        });

        // Keyboard accessibility
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeQuickView();
        });
    </script>
@endpush

@push('styles')
    <style>
        /* Shine Effect */
        .shine-effect {
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .group:hover .shine-effect {
            transform: translateX(100%);
        }

        /* Hide scrollbar */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Line clamp */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Animations */
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.8s ease-out forwards;
        }

        .animate-slide-up {
            animation: slide-up 1s ease-out forwards;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #c4a574;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #5C2E00;
        }

        /* Selection */
        ::selection {
            background-color: rgba(244, 168, 67, 0.3);
            color: #5C2E00;
        }

        /* Filter bar rounded top */
        #filter-bar {
            border-radius: 2rem 2rem 0 0;
            margin-top: -1rem;
        }
    </style>
@endpush
