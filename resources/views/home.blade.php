@extends('layouts.app')

@section('title', 'Warisan Rasa Banyumas')

@section('content')
<!-- Hero Section -->
<section class="hero-bg h-screen flex items-center justify-center text-center text-white px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-batik-pattern opacity-10 mix-blend-overlay"></div>
    <div class="max-w-4xl z-10 hero-content mt-16">
        <div class="overflow-hidden mb-6">
            <span class="inline-block py-1.5 px-5 border border-highlight/50 bg-black/30 backdrop-blur-md text-highlight rounded-full text-xs font-semibold tracking-[0.25em] uppercase slide-up shadow-lg">Warisan Kuliner Banyumas</span>
        </div>
        <div class="overflow-hidden mb-8">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-title leading-[1.1] slide-up text-shadow-xl">
                Sejak 1940, Rasa yang <br> <span class="text-highlight italic">Tak Lekang Waktu</span>
            </h1>
        </div>
        <div class="overflow-hidden mb-12">
            <p class="text-lg md:text-xl opacity-90 font-light slide-up max-w-2xl mx-auto drop-shadow-md">
                Menghidupkan memori kampung halaman melalui resep kuno getuk goreng asli Banyumas, tanpa pengawet buatan.
            </p>
        </div>
        <div class="overflow-hidden">
            <div class="slide-up">
                <a href="#produk" class="inline-flex items-center gap-3 bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-highlight hover:text-white transition duration-500 shadow-2xl hover:shadow-highlight/50 group">
                    Jelajahi Rasa Kami
                    <svg xmlns="http://www.w3.org/2000/sv" class="h-5 w-5 group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-80 animate-bounce">
        <span class="text-[10px] tracking-[0.3em] uppercase font-light">Scroll</span>
        <div class="w-[26px] h-[40px] border-2 border-white/70 rounded-full flex justify-center p-1">
            <div class="w-1.5 h-2.5 bg-white rounded-full"></div>
        </div>
    </div>
</section>

<!-- Marquee Section -->
<div class="bg-primary text-highlight py-5 border-y border-highlight/30 overflow-hidden flex whitespace-nowrap shadow-inner">
    <div class="animate-marquee flex items-center font-title italic text-xl md:text-2xl tracking-wider">
        <span class="mx-8">100% Asli Banyumas</span> •
        <span class="mx-8">Resep Tradisional Sejak 1940</span> •
        <span class="mx-8">Tanpa Pemanis Buatan</span> •
        <span class="mx-8">Cocok Untuk Oleh-Oleh</span> •
        <span class="mx-8">Pengiriman Seluruh Indonesia</span> •
        <span class="mx-8">100% Asli Banyumas</span> •
        <span class="mx-8">Resep Tradisional Sejak 1940</span> •
        <span class="mx-8">Tanpa Pemanis Buatan</span> •
        <span class="mx-8">Cocok Untuk Oleh-Oleh</span> •
        <span class="mx-8">Pengiriman Seluruh Indonesia</span> •
    </div>
</div>

<!-- Live Counter Section -->
<section class="py-20 bg-white relative z-10 -mt-1 shadow-md">
    <div class="container mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-primary divide-x divide-gray-100">
        <div class="gsap-counter-box px-4">
            <div class="text-5xl md:text-6xl font-title font-bold mb-2 text-secondary"><span class="counter" data-target="84">0</span>+</div>
            <p class="text-xs text-gray-500 uppercase tracking-[0.2em] font-semibold">Tahun Berdiri</p>
        </div>
        <div class="gsap-counter-box px-4">
            <div class="text-5xl md:text-6xl font-title font-bold mb-2 text-secondary"><span class="counter" data-target="15">0</span>K+</div>
            <p class="text-xs text-gray-500 uppercase tracking-[0.2em] font-semibold">Produk Terjual</p>
        </div>
        <div class="gsap-counter-box px-4">
            <div class="text-5xl md:text-6xl font-title font-bold mb-2 text-secondary"><span class="counter" data-target="5000">0</span>+</div>
            <p class="text-xs text-gray-500 uppercase tracking-[0.2em] font-semibold">Pelanggan Puas</p>
        </div>
        <div class="gsap-counter-box px-4">
            <div class="text-5xl md:text-6xl font-title font-bold mb-2 text-secondary"><span class="counter" data-target="12">0</span></div>
            <p class="text-xs text-gray-500 uppercase tracking-[0.2em] font-semibold">Varian Rasa</p>
        </div>
    </div>
</section>

<!-- Warisan Digital Section -->
<section class="py-32 bg-bgLight/40 relative">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-bgLight opacity-60 rounded-bl-[120px] -z-10"></div>
    <div class="container mx-auto px-6 lg:px-20 relative">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="relative rounded-[2.5rem] shadow-2xl story-img group">
                <div class="img-zoom-container rounded-[2.5rem] border-8 border-white">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjBrsvpDDyg29jlxQXR3B1M8tJj7ChIgY925DQM7cLQzmvt4kZgVKAO07JTPaVz7ebn7Gi0RHecO7V1vzhCMdfmPXAu8PByudONcq7QU0Al99dD6oXPYtbhMrW-3-7eUs-_hrBxEO2x9btv/s1600/DSC09354.jpg" alt="Dapur Tradisional" class="w-full h-[650px] object-cover">
                </div>
                <div class="absolute -bottom-10 -right-10 bg-white p-8 rounded-3xl shadow-xl hidden md:block border border-gray-100 group-hover:-translate-y-4 group-hover:-translate-x-4 transition-transform duration-500">
                    <div class="flex items-center gap-5">
                        <div class="w-16 h-16 bg-highlight/10 rounded-full flex items-center justify-center text-highlight">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1 font-medium tracking-wide">Tradisi Sejak</div>
                            <div class="text-2xl font-title font-bold text-primary">Tahun 1940</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="story-text">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white rounded-full shadow-sm text-accent font-bold tracking-widest uppercase text-xs mb-8 border border-gray-100">
                    <span class="w-2.5 h-2.5 rounded-full bg-accent animate-pulse"></span> Warisan Digital
                </div>
                <h3 class="text-4xl md:text-5xl lg:text-6xl font-title text-primary mb-8 leading-[1.15]">Sebuah Perjalanan <br><span class="italic text-secondary">Rasa & Karsa</span></h3>
                <p class="text-gray-600 mb-6 leading-relaxed text-lg font-light">
                    Bermula dari dapur kecil di sudut Sokaraja, Mbah Asri memulai tradisi menggoreng singkong pilihan dengan gula kelapa murni. Tidak ada mesin modern, hanya kehangatan kayu bakar dan dedikasi pada kualitas otentik.
                </p>
                <p class="text-gray-600 mb-12 leading-relaxed text-lg font-light">
                    Kini, setelah 8 dekade berlalu, kami memadukan resep kuno tersebut dengan standar kebersihan modern. Setiap gigitan adalah mesin waktu yang membawa Anda kembali ke kehangatan rumah.
                </p>
                <a href="/tentang" class="inline-flex items-center justify-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-medium hover:bg-secondary transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    Masuk ke Museum Digital
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quiz Teaser Section -->
<section class="py-32 bg-primary text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-batik-pattern opacity-[0.04]"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-highlight rounded-full blur-[150px] opacity-20 -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary rounded-full blur-[120px] opacity-30 translate-y-1/3 -translate-x-1/4"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl md:text-6xl font-title mb-6 quiz-elem leading-tight drop-shadow-md">Bingung Pilih <span class="italic text-highlight">Rasa Apa?</span></h2>
        <p class="text-lg md:text-xl text-white/80 mb-12 max-w-3xl mx-auto font-light quiz-elem leading-relaxed">
            Ikuti <strong class="text-highlight font-semibold">Flavor Finder Quiz</strong> singkat kami! Jawab 3 pertanyaan ringan dan biarkan AI kami mencocokkan kepribadianmu dengan varian Getuk Goreng yang paling pas.
        </p>
        <button class="quiz-elem bg-highlight text-primary px-12 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-primary transition-all duration-300 shadow-[0_0_30px_rgba(244,168,67,0.3)] hover:shadow-[0_0_40px_rgba(255,255,255,0.5)] hover:-translate-y-2 transform">
            Mulai Kuis (1 Menit)
        </button>
    </div>
</section>

<!-- Catalog Section -->
<section id="produk" class="py-32 bg-[#FAFAFA] container mx-auto px-6 relative">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 relative z-10">
        <div>
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-white rounded-full text-secondary font-bold tracking-[0.2em] uppercase text-xs mb-6 shadow-sm border border-gray-100">
                Etalase Rasa
            </div>
            <h3 class="text-4xl md:text-5xl font-title text-primary">Katalog Pilihan Asri</h3>
        </div>
        <a href="/produk" class="mt-6 md:mt-0 text-secondary font-semibold group flex items-center gap-3">
            Lihat Semua Produk
            <span class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:bg-highlight group-hover:text-white transition-all duration-300 group-hover:translate-x-1 border border-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-10 relative z-10">
        <!-- Product Card 1 -->
        <div class="group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(92,46,0,0.1)] transition-all duration-500 border border-gray-100 product-card relative flex flex-col">
            <div class="h-80 overflow-hidden relative img-zoom-container w-full shrink-0">
                <div class="absolute top-5 left-5 bg-highlight text-white px-4 py-1.5 rounded-full text-xs font-bold z-20 tracking-wider shadow-md">TERLARIS</div>
                <img src="https://images.unsplash.com/photo-1505935428862-770b6f24f629?auto=format&fit=crop&q=80&w=800" alt="Getuk Original" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[2px] z-10">
                    <button class="bg-white text-primary px-8 py-3 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-highlight hover:text-white">Lihat Detail</button>
                </div>
            </div>
            <div class="p-8 relative z-10 bg-white flex flex-col grow">
                <button class="absolute -top-8 right-8 bg-primary text-white p-4 rounded-full shadow-xl hover:bg-highlight transition-all duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </button>
                <h4 class="text-2xl font-title font-bold text-primary mb-3">Original Gula Jawa</h4>
                <p class="text-gray-500 text-sm mb-8 leading-relaxed line-clamp-2 grow">Cita rasa asli gula kelapa yang manis, legit, dan gurih melegenda sejak dulu kala.</p>
                <div class="flex items-end justify-between border-t border-gray-100 pt-6">
                    <span class="text-secondary font-bold text-3xl">Rp 25.000 <span class="text-sm font-normal text-gray-400 block -mt-1">/ box isi 10</span></span>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(92,46,0,0.1)] transition-all duration-500 border border-gray-100 product-card relative flex flex-col">
            <div class="h-80 overflow-hidden relative img-zoom-container w-full shrink-0">
                <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?auto=format&fit=crop&q=80&w=800" alt="Getuk Cokelat" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[2px] z-10">
                    <button class="bg-white text-primary px-8 py-3 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-highlight hover:text-white">Lihat Detail</button>
                </div>
            </div>
            <div class="p-8 relative z-10 bg-white flex flex-col grow">
                <button class="absolute -top-8 right-8 bg-primary text-white p-4 rounded-full shadow-xl hover:bg-highlight transition-all duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </button>
                <h4 class="text-2xl font-title font-bold text-primary mb-3">Varian Cokelat Lumer</h4>
                <p class="text-gray-500 text-sm mb-8 leading-relaxed line-clamp-2 grow">Paduan singkong pilihan yang lembut dengan isian cokelat premium yang lumer di mulut.</p>
                <div class="flex items-end justify-between border-t border-gray-100 pt-6">
                    <span class="text-secondary font-bold text-3xl">Rp 30.000 <span class="text-sm font-normal text-gray-400 block -mt-1">/ box isi 10</span></span>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(92,46,0,0.1)] transition-all duration-500 border border-gray-100 product-card relative flex flex-col">
            <div class="h-80 overflow-hidden relative img-zoom-container w-full shrink-0">
                <div class="absolute top-5 left-5 bg-accent text-white px-4 py-1.5 rounded-full text-xs font-bold z-20 tracking-wider shadow-md">NEW ARRIVAL</div>
                <img src="https://images.unsplash.com/photo-1514517604298-cf80e0fb7f1e?auto=format&fit=crop&q=80&w=800" alt="Hampers" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[2px] z-10">
                    <button class="bg-white text-primary px-8 py-3 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-highlight hover:text-white">Lihat Detail</button>
                </div>
            </div>
            <div class="p-8 relative z-10 bg-white flex flex-col grow">
                <button class="absolute -top-8 right-8 bg-primary text-white p-4 rounded-full shadow-xl hover:bg-highlight transition-all duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </button>
                <h4 class="text-2xl font-title font-bold text-primary mb-3">Hampers Besek Asri</h4>
                <p class="text-gray-500 text-sm mb-8 leading-relaxed line-clamp-2 grow">Kemasan anyaman bambu eksklusif, sangat cocok untuk hantaran dan oleh-oleh premium.</p>
                <div class="flex items-end justify-between border-t border-gray-100 pt-6">
                    <span class="text-secondary font-bold text-3xl">Rp 85.000 <span class="text-sm font-normal text-gray-400 block -mt-1">/ set besek</span></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-32 bg-white relative overflow-hidden border-t border-gray-100">
    <div class="absolute inset-0 bg-bgLight/20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-accent font-bold tracking-[0.2em] uppercase mb-4 text-xs">Kata Mereka</h2>
            <h3 class="text-4xl md:text-5xl font-title text-primary">Ulasan Pelanggan Setia</h3>
        </div>

        <div class="flex flex-wrap justify-center gap-10">
            <!-- Testimonial 1 -->
            <div class="bg-white p-10 rounded-[2.5rem] shadow-[0_10px_40px_rgba(0,0,0,0.03)] w-full md:w-[45%] lg:w-[30%] border border-gray-50 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="flex text-highlight mb-6">
                    @for($i=0; $i<5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                </div>
                <p class="text-gray-600 mb-8 italic text-[15px] leading-relaxed">"Selalu jadi andalan buat oleh-oleh kalau pulang ke Jakarta. Rasa manisnya pas, gak bikin eneg, dan kemasan beseknya kelihatan mewah banget."</p>
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden"><img src="https://i.pravatar.cc/100?img=1" alt="User"></div>
                    <div>
                        <h5 class="font-bold text-primary text-sm">Budi Santoso</h5>
                        <p class="text-xs text-gray-500 font-medium">Diaspora Banyumas</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-10 rounded-[2.5rem] shadow-[0_10px_40px_rgba(0,0,0,0.03)] w-full md:w-[45%] lg:w-[30%] border border-gray-50 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="flex text-highlight mb-6">
                    @for($i=0; $i<5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                </div>
                <p class="text-gray-600 mb-8 italic text-[15px] leading-relaxed">"Sistem order via WhatsApp-nya cepet banget responsnya. Anak saya yang tadinya gak suka jajanan tradisional malah ketagihan varian cokelatnya!"</p>
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden"><img src="https://i.pravatar.cc/100?img=5" alt="User"></div>
                    <div>
                        <h5 class="font-bold text-primary text-sm">Siti Rahmawati</h5>
                        <p class="text-xs text-gray-500 font-medium">Ibu Rumah Tangga</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 (Added for balance) -->
            <div class="bg-white p-10 rounded-[2.5rem] shadow-[0_10px_40px_rgba(0,0,0,0.03)] w-full md:w-[45%] lg:w-[30%] border border-gray-50 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                <div class="flex text-highlight mb-6">
                    @for($i=0; $i<5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                </div>
                <p class="text-gray-600 mb-8 italic text-[15px] leading-relaxed">"Gak nyangka getuk bisa dikemas sebagus ini. Order hampers buat acara kantor dan klien pada nanya beli di mana. Mantap Getuk Asri!"</p>
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden"><img src="https://i.pravatar.cc/100?img=33" alt="User"></div>
                    <div>
                        <h5 class="font-bold text-primary text-sm">Andi Wijaya</h5>
                        <p class="text-xs text-gray-500 font-medium">Event Organizer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section (Added for better conversion) -->
<section class="py-24 bg-bgLight relative overflow-hidden">
    <div class="absolute inset-0 bg-batik-pattern opacity-10 mix-blend-multiply"></div>
    <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl">
        <h2 class="text-4xl md:text-5xl font-title text-primary mb-6">Siap Menikmati Kelezatan Asli Banyumas?</h2>
        <p class="text-lg text-primary/80 mb-10 max-w-2xl mx-auto font-light">Pesan sekarang dan bawa pulang kehangatan tradisi dalam setiap gigitannya. Kami melayani pengiriman ke seluruh Indonesia.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/order" class="bg-primary text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-secondary transition-all duration-300 shadow-xl hover:-translate-y-1">Pesan Sekarang</a>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-green-600 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-green-700 transition-all duration-300 shadow-xl hover:-translate-y-1 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.305-.885-.653-1.482-1.46-1.655-1.758-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                Order via WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    const tl = gsap.timeline();
    tl.from(".slide-up", {
        duration: 1.2,
        y: 80,
        opacity: 0,
        stagger: 0.2,
        ease: "power4.out",
        delay: 0.3
    });

    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        gsap.to(counter, {
            scrollTrigger: {
                trigger: ".gsap-counter-box",
                start: "top 90%"
            },
            innerText: target,
            duration: 2.5,
            snap: {
                innerText: 1
            },
            ease: "power2.out"
        });
    });

    gsap.from(".story-img", {
        scrollTrigger: {
            trigger: ".story-img",
            start: "top 75%"
        },
        x: -60,
        opacity: 0,
        duration: 1.5,
        ease: "power3.out"
    });

    gsap.from(".story-text", {
        scrollTrigger: {
            trigger: ".story-text",
            start: "top 75%"
        },
        x: 60,
        opacity: 0,
        duration: 1.5,
        ease: "power3.out",
        delay: 0.2
    });

    gsap.from(".quiz-elem", {
        scrollTrigger: {
            trigger: ".quiz-elem",
            start: "top 90%",
            toggleActions: "play none none none"
        },
        y: 50,
        opacity: 0,
        duration: 1.2,
        stagger: 0.3,
        ease: "power3.out"
    });

    gsap.from(".product-card", {
        scrollTrigger: {
            trigger: "#produk", // Trigger pakai ID sectionnya
            start: "top 85%", // Muncul pas section produk baru masuk 15% ke layar
            toggleActions: "play none none none"
        },
        y: 50, // Jarak dorong dikurangin dikit biar gak terlalu jauh (lebih smooth)
        opacity: 0,
        duration: 1,
        stagger: 0.2, // Kartu muncul gantian (kerasa premium)
        ease: "power3.out",
        clearProps: "all" // PENTING: Menghapus style opacity 0 setelah kelar animasi
    });
</script>
@endpush