@extends('layouts.app')

@section('title', 'Katalog Getuk Goreng Original Jawa dan Durian')
@section('description', 'Lihat katalog Getuk Goreng Asri varian Original Jawa dan Durian khas Sokaraja Banyumas. Pesan getuk goreng untuk oleh-oleh, hampers, dan camilan keluarga.')

@section('content')

<section class="relative bg-primary pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 opacity-100 mix-blend-overlay" style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png'); background-repeat: repeat;"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-primary/30 via-transparent to-primary/90"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-highlight rounded-full blur-[180px] opacity-15 -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary rounded-full blur-[150px] opacity-20 translate-y-1/3 -translate-x-1/4"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white/10 backdrop-blur-md rounded-full text-highlight font-bold tracking-widest uppercase text-xs mb-6 border border-white/20 animate-fade-in">
                <span class="w-2 h-2 rounded-full bg-highlight animate-pulse"></span> Etalase Digital
            </div>
            
            <h1 class="text-5xl md:text-7xl font-title text-white mb-6 leading-[1.1] animate-slide-up">
                Koleksi Rasa <br>
                <span class="italic text-highlight">Nusantara</span>
            </h1>
            
            <p class="text-lg text-white/70 font-light max-w-xl leading-relaxed animate-slide-up delay-200">
                Jelajahi puluhan varian getuk goreng autentik Banyumas. Dari resep klasik warisan 1940 hingga inovasi rasa modern.
            </p>
        </div>
    </div>
</section>

<section id="filter-bar" class="relative z-10 bg-white/80 backdrop-blur-xl border-b border-gray-100 shadow-sm py-4 -mt-1 rounded-t-[2rem]">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
            
            <div class="relative w-full lg:w-96 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" id="search-input" placeholder="Cari varian rasa..." class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all placeholder-gray-400 hover:bg-white focus:bg-white">
            </div>

            <div class="flex items-center gap-3 overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 no-scrollbar">
                <button data-filter="all" class="filter-btn active px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-primary text-white shadow-lg hover:shadow-primary/30 whitespace-nowrap">Semua</button>
                <button data-filter="klasik" class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-600 hover:bg-gray-200 hover:shadow-md whitespace-nowrap">Klasik</button>
                <button data-filter="premium" class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-600 hover:bg-gray-200 hover:shadow-md whitespace-nowrap">Premium</button>
            </div>

            <div class="flex items-center gap-4">
                <select id="sort-select" class="bg-gray-50 border border-gray-200 rounded-full px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary cursor-pointer hover:bg-white transition-colors">
                    <option value="popular">Paling Populer</option>
                    <option value="price-low">Harga: Rendah - Tinggi</option>
                    <option value="price-high">Harga: Tinggi - Rendah</option>
                </select>

                <div class="hidden md:flex items-center bg-gray-100 rounded-full p-1">
                    <button data-cols="2" title="2 Kolom" class="view-btn p-2 rounded-full bg-white shadow-sm text-primary transition-all hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z" />
                        </svg>
                    </button>
                    <button data-cols="3" title="3 Kolom" class="view-btn p-2 rounded-full text-gray-400 hover:text-primary transition-all hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-12 bg-[#FAFAFA] min-h-screen">
    <div class="container mx-auto px-6">

        <div class="mb-12 relative rounded-[2.5rem] bg-primary overflow-hidden shadow-xl flex flex-col md:flex-row items-center justify-between p-8 md:p-12 border border-highlight/20 group">
            <div class="absolute inset-0 opacity-50 mix-blend-overlay" style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');"></div>
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-highlight/30 rounded-full blur-3xl transition-transform duration-700 group-hover:scale-150"></div>

            <div class="relative z-10 max-w-xl mb-8 md:mb-0">
                <span class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-md text-highlight border border-white/20 rounded-full text-xs font-bold tracking-widest mb-4">
                    PROMO MINGGU INI
                </span>
                <h3 class="text-3xl md:text-4xl font-title text-white font-bold mb-4 leading-tight">
                    Beli 3 Box Getuk,<br>Gratis 1 Kripik Tempe!
                </h3>
                <p class="text-white/70 mb-6 font-light">
                    Berlaku untuk semua varian Getuk Goreng Premium. Cocok untuk stok cemilan keluarga di rumah.
                </p>
                <button class="bg-highlight text-primary px-8 py-3.5 rounded-full font-bold hover:bg-white transition-all duration-300 shadow-[0_0_20px_rgba(244,168,67,0.3)] transform hover:-translate-y-1">
                    Klaim Promo Sekarang
                </button>
            </div>

            <div class="relative z-10 w-full md:w-1/3 flex justify-center">
                <div class="relative w-48 h-48 md:w-56 md:h-56">
                    <div class="absolute inset-0 bg-highlight rounded-full animate-pulse opacity-20 blur-xl"></div>
                    <img src="{{ asset('images/produk/fotogetuk.jpeg') }}" alt="Promo" class="relative z-10 w-full h-full object-cover rounded-full border-4 border-white/20 shadow-2xl transform rotate-12 group-hover:rotate-0 transition-transform duration-500">
                </div>
            </div>
        </div>

        <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @forelse($produk as $p)
                <div class="product-card group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_25px_50px_rgba(92,46,0,0.12)] transition-all duration-500 border border-gray-100 relative"
                     data-id="{{ $p->id }}" 
                     data-category="{{ $p->kategori ?? 'klasik' }}"
                     data-price="{{ $p->harga }}" 
                     data-popular="100" 
                     data-name="{{ strtolower($p->nama) }}">

                    <div class="relative h-80 overflow-hidden img-container bg-gray-100">
                        @if ($loop->first)
                            <div class="absolute top-5 left-5 z-20">
                                <span class="bg-highlight text-white px-4 py-1.5 rounded-full text-xs font-bold tracking-wider shadow-md">TERLARIS</span>
                            </div>
                        @endif

                        <button class="wishlist-btn absolute top-5 right-5 z-20 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-white transition-all duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>

                        @if ($p->gambar)
                            <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="product-img w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-bgLight/40 flex items-center justify-center text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif

                        <div class="shine-effect absolute inset-0 bg-gradient-to-tr from-transparent via-white/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none z-10"></div>

                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-6 translate-y-4 group-hover:translate-y-0 z-20">
                            <button onclick="openQuickView({{ $p->id }})" class="w-full bg-white text-primary py-3 rounded-full font-bold text-sm hover:bg-highlight hover:text-white transition-all duration-300 mb-3 shadow-lg">
                                Lihat Detail Cepat
                            </button>
                            <button class="add-to-cart w-full bg-highlight text-white py-3 rounded-full font-bold text-sm hover:bg-white hover:text-primary transition-all duration-300 shadow-lg flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <div class="p-8 relative z-10 bg-white">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <h3 class="text-xl font-title font-bold text-primary group-hover:text-secondary transition-colors">{{ $p->nama }}</h3>
                                <p class="text-sm text-gray-400 mt-1">Deskripsi Singkat</p>
                            </div>
                            <div class="flex items-center gap-1 text-highlight">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-sm font-bold text-gray-600">5.0</span>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm mb-6 line-clamp-2 leading-relaxed">{{ $p->deskripsi }}</p>

                        <div class="flex items-end justify-between border-t border-gray-100 pt-6">
                            <div>
                                <span class="text-2xl font-title font-bold text-secondary">Rp {{ number_format($p->harga, 0, ',', '.') }}</span>
                                <span class="text-xs text-gray-400 block">/ bungkus</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="qty-minus w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-colors">-</button>
                                <span class="w-8 text-center text-sm font-bold qty-display">1</span>
                                <button class="qty-plus w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-colors">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-20 text-gray-400 italic">
                    Belum ada produk tersedia.
                </div>
            @endforelse
        </div>

        <div class="text-center mt-12 mb-24">
            <button id="load-more" class="inline-flex items-center gap-3 bg-white border-2 border-primary text-primary px-10 py-4 rounded-full font-bold text-lg hover:bg-primary hover:text-white transition-all duration-500 shadow-lg hover:shadow-xl group">
                <span>Muat Lebih Banyak Varian</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-y-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="mb-24 bg-highlight/5 rounded-[2rem] p-10 md:p-16 text-center relative overflow-hidden border border-highlight/10">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-1/2 -translate-x-1/2 w-32 h-32 text-highlight/10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
            </svg>
            <div class="relative z-10 max-w-3xl mx-auto">
                <div class="flex justify-center text-highlight mb-6">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
                <p class="text-2xl md:text-3xl font-title text-primary leading-relaxed italic mb-8">
                    "Satu-satunya getuk goreng yang rasanya tidak pernah berubah dari saya kecil sampai sekarang punya
                    cucu. Manisnya pas, singkongnya empuk, pengemasannya juga sangat rapi."
                </p>
                <div class="flex items-center justify-center gap-4">
                    
                    <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center border-2 border-white shadow-sm shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                    
                    <div class="text-left">
                        <h5 class="font-bold text-primary">Ibu Sudjiati</h5>
                        <p class="text-xs text-gray-500 uppercase tracking-widest">Pelanggan Setia sejak 1997</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div id="quick-view-modal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity opacity-0" id="modal-backdrop"></div>
    <div class="absolute inset-0 flex items-center justify-center p-4">
        <div id="modal-content" class="bg-white rounded-[2.5rem] max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform scale-95 opacity-0 transition-all duration-500">
            <button onclick="closeQuickView()" class="absolute top-6 right-6 w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-all z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="grid md:grid-cols-2">
                <div class="h-80 md:h-full relative overflow-hidden rounded-t-[2.5rem] md:rounded-l-[2.5rem] md:rounded-tr-none bg-gray-100">
                    <img id="modal-img" src="{{ asset('images/produk/getukgoreng.jpeg') }}" alt="" class="w-full h-full object-cover">
                </div>
                
                <div class="p-10 md:p-12">
                    <div id="modal-badges" class="flex flex-wrap gap-2 mb-4"></div>
                    <h2 id="modal-title" class="text-3xl md:text-4xl font-title font-bold text-primary mb-1"></h2>
                    
                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex text-highlight" id="modal-rating"></div>
                    </div>
                    
                    <p id="modal-desc" class="text-gray-600 leading-relaxed mb-8"></p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Halal dan Aman Dikonsumsi
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Tersedia dalam banyak varian rasa unik
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Pengiriman seluruh Indonesia
                        </div>
                    </div>

                    <div class="flex items-end justify-between border-t border-gray-100 pt-6 mb-8">
                        <div>
                            <span id="modal-price" class="text-4xl font-title font-bold text-secondary"></span>
                            <span class="text-gray-400 ml-2" id="modal-unit">/ bungkus</span>
                        </div>
                        <div class="flex items-center gap-3 bg-gray-100 rounded-full px-4 py-2">
                            <button class="w-8 h-8 flex items-center justify-center text-primary font-bold text-lg hover:bg-white rounded-full transition-colors modal-qty-minus">-</button>
                            <span class="w-8 text-center font-bold modal-qty-display">1</span>
                            <button class="w-8 h-8 flex items-center justify-center text-primary font-bold text-lg hover:bg-white rounded-full transition-colors modal-qty-plus">+</button>
                        </div>
                    </div>

                    <button class="add-to-cart w-full bg-primary text-white py-4 rounded-full font-bold text-lg hover:bg-secondary transition-all duration-300 shadow-xl hover:-translate-y-1 flex items-center justify-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cart-overlay" onclick="closeCart()" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[60] hidden opacity-0 transition-opacity duration-300"></div>

<div id="cart-modal" class="fixed top-0 right-0 h-full w-full sm:w-[420px] bg-[#FAFAFA] shadow-2xl z-[70] transform translate-x-full transition-transform duration-300 flex flex-col">
    
    <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-white rounded-bl-3xl shadow-sm relative z-10">
        <h2 class="text-xl font-title font-bold text-primary flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-highlight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Keranjang Anda
        </h2>
        <button onclick="closeCart()" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 text-gray-400 hover:bg-red-50 hover:text-red-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto p-6" id="cart-items-container">
        <div class="h-full flex flex-col items-center justify-center text-gray-400 opacity-70">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            <p class="italic text-sm">Keranjang masih kosong</p>
        </div>
    </div>

    <div class="p-6 bg-white border-t border-gray-100 rounded-tl-3xl shadow-[0_-10px_30px_rgba(0,0,0,0.03)] relative z-10">
        
        <div class="mb-5">
            <label class="block text-sm font-bold text-primary mb-3">Pilihan Kemasan (Wajib)</label>
            <div class="grid grid-cols-3 gap-3">
                
                <div class="relative">
                    <input type="radio" name="packaging" id="pack-besek" value="Besek (Klasik)" class="peer sr-only" checked onchange="updateCartUI()">
                    <label for="pack-besek" class="cursor-pointer rounded-xl border-2 border-gray-100 bg-white p-2 text-center transition-all hover:border-highlight/50 peer-checked:border-highlight peer-checked:bg-highlight/5 peer-checked:ring-1 peer-checked:ring-highlight block h-full">
                        <img src="{{ asset('images/produk/besekbiasa.jpeg') }}" alt="Besek Biasa" class="w-full h-16 object-cover rounded-lg mb-2">
                        <div class="font-bold text-xs text-primary leading-tight">Biasa / Besek</div>
                        <div class="text-[10px] text-gray-500 mt-1">Gratis</div>
                    </label>
                </div>

                <div class="relative">
                    <input type="radio" name="packaging" id="pack-hampers" value="Hampers (Premium)" class="peer sr-only" onchange="updateCartUI()">
                    <label for="pack-hampers" class="cursor-pointer rounded-xl border-2 border-gray-100 bg-white p-2 text-center transition-all hover:border-highlight/50 peer-checked:border-highlight peer-checked:bg-highlight/5 peer-checked:ring-1 peer-checked:ring-highlight block h-full">
                        <img src="{{ asset('images/produk/besekbesar.jpeg') }}" alt="Hampers" class="w-full h-16 object-cover rounded-lg mb-2">
                        <div class="font-bold text-xs text-primary leading-tight">Besek Besar</div>
                        <div class="text-[10px] text-highlight font-medium mt-1">+Rp 5rb</div>
                    </label>
                </div>

                <div class="relative">
                    <input type="radio" name="packaging" id="pack-parcel" value="Parcel (Spesial)" class="peer sr-only" onchange="updateCartUI()">
                    <label for="pack-parcel" class="cursor-pointer rounded-xl border-2 border-gray-100 bg-white p-2 text-center transition-all hover:border-highlight/50 peer-checked:border-highlight peer-checked:bg-highlight/5 peer-checked:ring-1 peer-checked:ring-highlight block h-full">
                        <img src="{{ asset('images/produk/kardus.jpeg ') }}" alt="Parcel" class="w-full h-16 object-cover rounded-lg mb-2">
                        <div class="font-bold text-xs text-primary leading-tight">Kardus</div>
                        <div class="text-[10px] text-highlight font-medium mt-1">+Rp 7rb</div>
                    </label>
                </div>

            </div>
        </div>

        <div class="flex justify-between items-end mb-6">
            <span class="text-sm text-gray-500 font-medium">Total Estimasi</span>
            <span class="text-3xl font-title font-bold text-secondary" id="cart-total-price">Rp 0</span>
        </div>

        <button onclick="checkoutWhatsApp()" class="w-full bg-[#25D366] text-white py-4 rounded-full font-bold text-lg hover:bg-[#1ebe5d] transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2 transform hover:-translate-y-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
            </svg>
            Checkout via WhatsApp
        </button>
    </div>
</div>

<div class="fixed bottom-8 right-8 z-40">
    <button onclick="openCart()" class="bg-primary text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center hover:bg-secondary hover:scale-110 transition-all duration-300 relative group cart-btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span id="cart-count" class="absolute -top-2 -right-2 bg-highlight text-primary text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center border-2 border-white transform scale-0 transition-transform duration-300">0</span>
        <span class="absolute right-full mr-4 bg-primary text-white text-sm px-4 py-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Lihat Keranjang</span>
    </button>
</div>

<div id="toast" class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 transform translate-y-20 opacity-0 transition-all duration-500">
    <div class="bg-primary text-white px-8 py-4 rounded-full shadow-2xl flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-highlight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span class="font-semibold">Berhasil ditambahkan ke keranjang!</span>
    </div>
</div>

@endsection

@push('styles')
<style>
.shine-effect { transform: translateX(-100%); transition: transform 0.6s; }
    .group:hover .shine-effect { transform: translateX(100%); }
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .line-clamp-1 { display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; }

    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes slide-up {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes pop-elastic {
        0%   { transform: scale(1); }
        40%  { transform: scale(1.3); }
        70%  { transform: scale(0.9); }
        100% { transform: scale(1); }
    }
    @keyframes badge-bounce {
        0%   { transform: scale(1); }
        40%  { transform: scale(1.5); }
        70%  { transform: scale(0.85); }
        100% { transform: scale(1); }
    }
    @keyframes cart-entrance {
        from { transform: scale(0); opacity: 0; }
        to   { transform: scale(1); opacity: 1; }
    }

    .animate-fade-in  { animation: fade-in 0.8s ease-out forwards; }
    .animate-slide-up { animation: slide-up 1s ease-out forwards; }
    .delay-200        { animation-delay: 0.2s; }

    .cart-pop  { animation: pop-elastic 0.4s ease-out forwards; }
    .badge-pop { animation: badge-bounce 0.3s ease-out forwards; }

    .wishlist-pop { animation: pop-elastic 0.35s ease-out forwards; }

    .cart-btn { animation: cart-entrance 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 1.5s both; }

    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #f1f1f1; }
    ::-webkit-scrollbar-thumb { background: #c4a574; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: #5C2E00; }
    ::selection { background-color: rgba(244, 168, 67, 0.3); color: #5C2E00; }

    #filter-bar { border-radius: 2rem 2rem 0 0; margin-top: -1rem; }
</style>
@endpush

@push('scripts')
<script>
let cartArray = [];
    let currentQuickViewId = null;
    
    const productsData = {
        @foreach ($produk as $p)
            {{ $p->id }}: {
                title: "{{ $p->nama }}",
                price: "Rp {{ number_format($p->harga, 0, ',', '.') }}",
                rawPrice: {{ $p->harga }},
                unit: "/ box",
                desc: "{{ addslashes($p->deskripsi) }}",
                img: "{{ $p->gambar ? asset('storage/' . $p->gambar) : asset('images/produk/getukgoreng.jpeg') }}",
                badge: '<span class="bg-primary text-white px-3 py-1 rounded-full text-xs font-bold">{{ $p->status ?? 'Tersedia' }}</span>',
                rating: 5
            },
        @endforeach
    };

    function openCart() {
        const modal = document.getElementById('cart-modal');
        const overlay = document.getElementById('cart-overlay');
        overlay.classList.remove('hidden');
        setTimeout(() => {
            overlay.classList.remove('opacity-0');
            modal.classList.remove('translate-x-full');
        }, 10);
    }

    function closeCart() {
        const modal = document.getElementById('cart-modal');
        const overlay = document.getElementById('cart-overlay');
        modal.classList.add('translate-x-full');
        overlay.classList.add('opacity-0');
        setTimeout(() => overlay.classList.add('hidden'), 300);
    }

    function addToCart(id, qty) {
        const existingItem = cartArray.find(item => item.id == id);
        if (existingItem) {
            existingItem.qty += qty;
        } else {
            cartArray.push({ id: id, qty: qty });
        }
        updateCartUI();
        showToast();
        animateCartButton();
    }

    function removeFromCart(index) {
        cartArray.splice(index, 1);
        updateCartUI();
    }

    function updateCartUI() {
        const container = document.getElementById('cart-items-container');
        const totalEl = document.getElementById('cart-total-price');
        const badge = document.getElementById('cart-count');
        const packaging = document.querySelector('input[name="packaging"]:checked').value;

        let totalItems = 0;
        cartArray.forEach(item => totalItems += item.qty);
        badge.textContent = totalItems;
        
        if (totalItems > 0) {
            badge.classList.remove('scale-0');
            badge.classList.add('scale-100');
        } else {
            badge.classList.add('scale-0');
            badge.classList.remove('scale-100');
        }

        if (cartArray.length === 0) {
            container.innerHTML = `
                <div class="h-full flex flex-col items-center justify-center text-gray-400 opacity-70">
                    <svg class="h-16 w-16 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <p class="italic text-sm">Keranjang masih kosong</p>
                </div>`;
            totalEl.textContent = 'Rp 0';
            return;
        }

        let html = '';
        let totalSubPrice = 0;

        cartArray.forEach((item, index) => {
            const prod = productsData[item.id];
            const subtotal = prod.rawPrice * item.qty;
            totalSubPrice += subtotal;

            html += `
                <div class="flex gap-4 items-center bg-white p-4 rounded-2xl shadow-sm border border-gray-100 mb-4 animate-fade-in">
                    <img src="${prod.img}" alt="${prod.title}" class="w-16 h-16 object-cover rounded-xl bg-gray-50">
                    <div class="flex-1">
                        <h4 class="font-bold text-primary text-sm line-clamp-1">${prod.title}</h4>
                        <p class="text-xs text-gray-400 mt-1">${prod.price} x ${item.qty}</p>
                        <div class="font-bold text-secondary text-sm mt-1">Rp ${subtotal.toLocaleString('id-ID')}</div>
                    </div>
                    <button onclick="removeFromCart(${index})" class="p-2 text-gray-300 hover:text-red-500 hover:bg-red-50 rounded-full transition-colors">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>`;
        });

        let packFee = 0;
        if (packaging.includes("Hampers")) packFee = 5000;
        else if (packaging.includes("Parcel")) packFee = 7000;

        const grandTotal = totalSubPrice + packFee;
        container.innerHTML = html;
        totalEl.textContent = `Rp ${grandTotal.toLocaleString('id-ID')}`;
    }

    function checkoutWhatsApp() {
        if (cartArray.length === 0) return alert("Oops, keranjang Anda masih kosong!");

        const phone = "6285228776676";
        const packaging = document.querySelector('input[name="packaging"]:checked').value;
        let totalSubPrice = 0;
        let message = `Halo Admin Getuk Goreng Asri! 👋\n\nSaya ingin melakukan pre-order pesanan berikut:\n\n`;

        cartArray.forEach(item => {
            const prod = productsData[item.id];
            const subtotal = prod.rawPrice * item.qty;
            totalSubPrice += subtotal;
            message += `▪️ ${item.qty}x ${prod.title} (Rp ${subtotal.toLocaleString('id-ID')})\n`;
        });

        let packFee = 0;
        if (packaging.includes("Hampers")) packFee = 5000;
        else if (packaging.includes("Parcel")) packFee = 7000;

        const grandTotal = totalSubPrice + packFee;

        message += `\n📦 *Jenis Kemasan:* ${packaging}\n`;
        if (packFee > 0) message += `*Biaya Tambahan Kemasan:* Rp ${packFee.toLocaleString('id-ID')}\n`;
        message += `\n💰 *Total Estimasi:* Rp ${grandTotal.toLocaleString('id-ID')}\n\nMohon info ketersediaan stoknya ya. Terima kasih! 🙏`;

        window.open(`https://wa.me/${phone}?text=${encodeURIComponent(message)}`, "_blank");
    }

    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const card = btn.closest('.product-card');
            let id, qty;

            if (card) {
                id = card.dataset.id;
                qty = parseInt(card.querySelector('.qty-display').textContent);
            } else {
                id = currentQuickViewId;
                qty = parseInt(document.querySelector('.modal-qty-display').textContent);
                closeQuickView();
            }
            addToCart(id, qty);
        });
    });

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

    if (searchInput) searchInput.addEventListener('input', filterProducts);
    if (sortSelect) sortSelect.addEventListener('change', filterProducts);

    document.querySelectorAll('.qty-plus, .modal-qty-plus').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const display = btn.parentElement.querySelector('.qty-display, .modal-qty-display');
            display.textContent = parseInt(display.textContent) + 1;
        });
    });

    document.querySelectorAll('.qty-minus, .modal-qty-minus').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const display = btn.parentElement.querySelector('.qty-display, .modal-qty-display');
            if (parseInt(display.textContent) > 1) {
                display.textContent = parseInt(display.textContent) - 1;
            }
        });
    });

    document.querySelectorAll('.wishlist-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const svg = btn.querySelector('svg');
            if (btn.classList.contains('text-red-500')) {
                btn.classList.remove('text-red-500');
                btn.classList.add('text-gray-400');
                svg.setAttribute('fill', 'none');
                btn.classList.remove('wishlist-pop');
            } else {
                btn.classList.remove('text-gray-400');
                btn.classList.add('text-red-500');
                svg.setAttribute('fill', 'currentColor');
                btn.classList.remove('wishlist-pop');
                void btn.offsetWidth;
                btn.classList.add('wishlist-pop');
            }
        });
    });

    function showToast() {
        const toast = document.getElementById('toast');
        toast.classList.remove('translate-y-20', 'opacity-0');
        setTimeout(() => toast.classList.add('translate-y-20', 'opacity-0'), 3000);
    }

    function animateCartButton() {
        const cartBtn = document.querySelector('.cart-btn');
        const badge = document.getElementById('cart-count');
        cartBtn.classList.remove('cart-pop');
        void cartBtn.offsetWidth;
        cartBtn.classList.add('cart-pop');

        badge.classList.remove('badge-pop');
        void badge.offsetWidth;
        badge.classList.add('badge-pop');
    }

    function openQuickView(id) {
        currentQuickViewId = id;
        const product = productsData[id];
        if (!product) return;

        document.getElementById('modal-title').textContent = product.title;
        document.getElementById('modal-price').textContent = product.price;
        document.getElementById('modal-desc').textContent = product.desc;
        document.getElementById('modal-img').src = product.img;
        document.getElementById('modal-badges').innerHTML = product.badge;

        const ratingContainer = document.getElementById('modal-rating');
        ratingContainer.innerHTML = '';
        for (let i = 0; i < 5; i++) {
            const star = document.createElement('svg');
            star.className = 'w-5 h-5 ' + (i < product.rating ? 'fill-current' : 'text-gray-300');
            star.setAttribute('viewBox', '0 0 20 20');
            star.innerHTML = '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>';
            ratingContainer.appendChild(star);
        }

        document.querySelector('.modal-qty-display').textContent = '1';

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
            productGrid.className = `grid gap-8 mb-16 ${cols === '2' ? 'grid-cols-1 md:grid-cols-2' : 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'}`;
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeQuickView();
            closeCart();
        }
    });
</script>
@endpush