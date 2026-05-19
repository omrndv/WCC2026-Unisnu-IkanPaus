@extends('layouts.app')

@section('title', 'Tentang Getuk Goreng Asri')
@section('description', 'Kenali cerita, sejarah, dan tradisi Getuk Goreng Asri sebagai oleh-oleh khas Sokaraja Banyumas dengan varian Original Jawa dan Durian.')

@section('content')
    <div class="about-page">
        <section class="relative bg-primary pt-36 pb-32 overflow-hidden">
            <div class="absolute inset-0 opacity-10 mix-blend-overlay"
                style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png'); background-repeat: repeat;">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-primary/30 via-transparent to-primary/90"></div>
            <div
                class="absolute top-0 right-0 w-[500px] h-[500px] bg-highlight rounded-full blur-[150px] opacity-15 translate-x-1/3">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary rounded-full blur-[150px] opacity-20 translate-y-1/3 -translate-x-1/4">
            </div>

            <div class="container mx-auto px-6 relative z-10 text-center">
                <span
                    class="about-hero-item inline-block py-1.5 px-5 border border-highlight/50 bg-white/10 backdrop-blur-md text-highlight rounded-full text-xs font-semibold tracking-[0.2em] uppercase mb-6 shadow-lg">
                    Sejak Tahun 1990
                </span>
                <h1 class="about-hero-item text-5xl md:text-6xl lg:text-7xl font-title text-white mb-6 leading-[1.1]">
                    Menjaga Rasa, <br> <span class="italic text-highlight">Merawat Tradisi</span>
                </h1>
                <p class="about-hero-item text-lg text-white/70 font-light max-w-2xl mx-auto leading-relaxed">
                    Kisah perjalanan Getuk Goreng Asri dari dapur kecil Mbah Asri di Sokaraja hingga menjadi simbol kehangatan
                    keluarga dan kebanggaan Banyumas.
                </p>
            </div>
        </section>

        <section class="py-24 bg-white relative z-10 -mt-8 rounded-t-[3rem]">
            <div class="container mx-auto px-6">

                <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center mb-32">
                    <div class="relative group about-reveal about-reveal-left">
                        <div
                            class="absolute -inset-4 bg-highlight/10 rounded-[3rem] rotate-3 group-hover:rotate-0 transition-transform duration-700">
                        </div>
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] bg-gray-100">
                            <img src="{{ asset('images/produk/getukgoreng.jpeg') }}" alt="Tradisi Mbah Asri"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>

                    <div class="about-reveal about-reveal-right">
                        <h2 class="text-sm font-bold tracking-[0.2em] text-highlight uppercase mb-4">Babak Pertama</h2>
                        <h3 class="text-3xl md:text-4xl lg:text-5xl font-title text-primary font-bold mb-6 leading-tight">
                            Resep yang Lahir dari <br><span class="italic font-light">Ketidaksengajaan</span>
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-6 text-lg">
                            Pada masa penjajahan, Mbah Asri menjajakan getuk basah di pinggir jalan Sokaraja. Ketika dagangan
                            tak habis, beliau memutar otak agar singkong tidak basi. Digorenglah getuk tersebut bersama lelehan
                            nira kelapa murni.
                        </p>
                        <p class="text-gray-600 font-light leading-relaxed">
                            Tak disangka, inovasi sederhana itu melahirkan cita rasa manis-gurih yang khas, dengan tekstur luar
                            yang renyah namun lembut di dalam. Sebuah ketidaksengajaan yang kini menjadi legenda.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center mb-32">
                    <div class="order-2 md:order-1 about-reveal about-reveal-left">
                        <h2 class="text-sm font-bold tracking-[0.2em] text-highlight uppercase mb-4">Filosofi Dapur</h2>
                        <h3 class="text-3xl md:text-4xl lg:text-5xl font-title text-primary font-bold mb-6 leading-tight">
                            Kuali Tembaga & <br><span class="italic font-light">Api Kayu Bakar</span>
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-6 text-lg">
                            Di tengah gempuran modernisasi pabrik, kami memilih jalan sunyi: mempertahankan proses manual. Kami
                            masih menggunakan tungku kayu bakar dan kuali tembaga raksasa.
                        </p>
                        <p class="text-gray-600 font-light leading-relaxed">
                            Penggunaan kayu bakar memberikan aroma *smoky* (asap) alami yang meresap ke dalam singkong,
                            sementara kuali tembaga memastikan panas merata untuk karamelisasi gula jawa yang sempurna tanpa
                            membuatnya pahit.
                        </p>
                    </div>

                    <div class="order-1 md:order-2 relative group about-reveal about-reveal-right">
                        <div
                            class="absolute -inset-4 bg-primary/10 rounded-[3rem] -rotate-3 group-hover:rotate-0 transition-transform duration-700">
                        </div>
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] bg-gray-100">
                            <img src="{{ asset('images/produk/getukgoreng.jpeg') }}" alt="Kuali Tembaga"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-24 bg-primary text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-16 about-reveal about-reveal-up">
                    <h3 class="text-3xl md:text-5xl font-title mb-4">
                        Rahasia di Balik <span class="italic text-highlight">Satu Gigitan</span>
                    </h3>
                    <p class="font-light text-white/80 max-w-2xl mx-auto">
                        Kami menolak kompromi. Rasa yang melegenda hanya bisa diciptakan dari bahan-bahan yang dirawat dengan
                        doa dan keringat petani lokal.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div
                        class="about-reveal about-reveal-up bg-white/5 backdrop-blur-md border border-white/10 p-8 md:p-12 rounded-[2.5rem] hover:bg-white/10 transition-colors">
                        <div
                            class="w-16 h-16 rounded-full bg-highlight flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(244,168,67,0.4)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-title font-bold mb-4">Singkong Mentega Banyumas</h4>
                        <p class="font-light text-white/70 leading-relaxed">
                            Tidak semua singkong bisa menjadi Getuk Asri. Kami secara eksklusif menggunakan *Singkong Mentega*
                            (Singkong Kuning) dari dataran tinggi Banyumas yang dipanen tepat pada usia 9 bulan untuk
                            mendapatkan tekstur yang empuk, tidak berserat, dan warna kuning alami.
                        </p>
                    </div>

                    <div
                        class="about-reveal about-reveal-up bg-white/5 backdrop-blur-md border border-white/10 p-8 md:p-12 rounded-[2.5rem] hover:bg-white/10 transition-colors">
                        <div
                            class="w-16 h-16 rounded-full bg-highlight flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(244,168,67,0.4)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-title font-bold mb-4">Nira Kelapa Penderes Lokal</h4>
                        <p class="font-light text-white/70 leading-relaxed">
                            Kunci karamelisasi yang sempurna ada pada kualitas gula. Kami mengambil langsung gula aren cair
                            (nira kelapa) dari penderes lokal di Banyumas setiap subuh. Tanpa campuran gula pasir, tanpa
                            pengawet, murni manis dari alam.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-32 bg-[#FAF8F5] overflow-hidden">
            <div class="container mx-auto px-6">
                <div class="text-center mb-24 about-reveal about-reveal-up">
                    <h3 class="text-4xl md:text-5xl font-title text-primary mb-6">
                        Jejak Langkah <span class="italic text-highlight">Sang Legenda</span>
                    </h3>
                    <div class="w-24 h-1.5 bg-highlight mx-auto rounded-full"></div>
                </div>

                <div class="relative max-w-5xl mx-auto">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-highlight/10 via-highlight/50 to-primary/10 hidden md:block rounded-full">
                    </div>

                    <div class="space-y-24">
                        <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                            <div class="flex-1 md:text-right md:pr-16 mb-8 md:mb-0">
                                <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">1940</span>
                                <h4 class="text-2xl font-bold text-primary mb-3">Lahirnya Sebuah Nama</h4>
                                <p class="text-gray-500 font-light leading-relaxed">
                                    Mbah Asri mulai menjajakan getuk goreng secara asongan di Sokaraja. Bermodal pikulan bambu
                                    dan senyum yang ramah.
                                </p>
                            </div>
                            <div
                                class="w-16 h-16 bg-white rounded-full border-4 border-highlight shadow-[0_0_30px_rgba(244,168,67,0.3)] z-10 flex items-center justify-center shrink-0">
                                <div class="w-4 h-4 bg-primary rounded-full"></div>
                            </div>
                            <div class="flex-1 md:pl-16 hidden md:block"></div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                            <div class="flex-1 md:pr-16 hidden md:block"></div>
                            <div
                                class="w-16 h-16 bg-white rounded-full border-4 border-primary shadow-lg z-10 flex items-center justify-center shrink-0">
                                <div class="w-4 h-4 bg-highlight rounded-full"></div>
                            </div>
                            <div class="flex-1 md:text-left md:pl-16 mt-8 md:mt-0">
                                <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">1975</span>
                                <h4 class="text-2xl font-bold text-primary mb-3">Resep yang Disempurnakan</h4>
                                <p class="text-gray-500 font-light leading-relaxed">
                                    Proses penumbukan singkong mulai dimodifikasi untuk mendapatkan tekstur yang lebih kalis.
                                    Getuk Asri mulai dikenal di luar Banyumas.
                                </p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                            <div class="flex-1 md:text-right md:pr-16 mb-8 md:mb-0">
                                <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">1995</span>
                                <h4 class="text-2xl font-bold text-primary mb-3">Pusat Oleh-Oleh Utama</h4>
                                <p class="text-gray-500 font-light leading-relaxed">
                                    Mendirikan gerai permanen yang ikonik. Di era ini, kemasan *besek bambu* mulai dipatenkan
                                    sebagai identitas visual buah tangan khas Banyumas.
                                </p>
                            </div>
                            <div
                                class="w-16 h-16 bg-white rounded-full border-4 border-highlight shadow-[0_0_30px_rgba(244,168,67,0.3)] z-10 flex items-center justify-center shrink-0">
                                <div class="w-4 h-4 bg-primary rounded-full"></div>
                            </div>
                            <div class="flex-1 md:pl-16 hidden md:block"></div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                            <div class="flex-1 md:pr-16 hidden md:block"></div>
                            <div
                                class="w-16 h-16 bg-white rounded-full border-4 border-primary shadow-lg z-10 flex items-center justify-center shrink-0">
                                <div class="w-4 h-4 bg-highlight rounded-full"></div>
                            </div>
                            <div class="flex-1 md:text-left md:pl-16 mt-8 md:mt-0">
                                <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">2015</span>
                                <h4 class="text-2xl font-bold text-primary mb-3">Eksplorasi Rasa Modern</h4>
                                <p class="text-gray-500 font-light leading-relaxed">
                                    Menjawab tantangan zaman, kami meluncurkan varian Cokelat Lumer dan Keju Susu tanpa
                                    mengubah metode penggorengan tradisional.
                                </p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                            <div class="flex-1 md:text-right md:pr-16 mb-8 md:mb-0">
                                <span class="text-6xl font-title text-highlight/40 block mb-2 tracking-widest text-shadow">
                                    2026
                                </span>
                                <h4 class="text-2xl font-bold text-primary mb-3">Lompatan Digital</h4>
                                <p class="text-gray-500 font-light leading-relaxed">
                                    Platform *Warisan Rasa Banyumas* diluncurkan terintegrasi dengan KasirPro. Membawa warisan
                                    Mbah Asri dari etalase lokal menuju panggung global.
                                </p>
                            </div>
                            <div
                                class="w-20 h-20 bg-highlight rounded-full border-4 border-white shadow-[0_0_40px_rgba(244,168,67,0.6)] z-10 flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <div class="flex-1 md:pl-16 hidden md:block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16 about-reveal about-reveal-up">
                    <h3 class="text-3xl md:text-4xl font-title text-primary mb-4">Nilai yang Kami Pegang</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="about-card about-reveal about-reveal-up bg-gray-50 p-10 md:p-12 rounded-[2.5rem] border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div
                            class="w-16 h-16 bg-primary/5 rounded-2xl flex items-center justify-center text-primary mb-8 border border-primary/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-primary mb-4">Autentisitas</h4>
                        <p class="text-gray-500 font-light leading-relaxed">
                            Menolak menggunakan bahan pengawet and perasa buatan demi menjaga keaslian rasa sesuai wasiat pendiri.
                        </p>
                    </div>

                    <div
                        class="about-card about-reveal about-reveal-up bg-gray-50 p-10 md:p-12 rounded-[2.5rem] border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div
                            class="w-16 h-16 bg-highlight/10 rounded-2xl flex items-center justify-center text-highlight mb-8 border border-highlight/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-primary mb-4">Pemberdayaan</h4>
                        <p class="text-gray-500 font-light leading-relaxed">
                            Memberikan lapangan kerja bagi ibu-ibu and pengrajin besek bambu lokal di wilayah Sokaraja and sekitarnya.
                        </p>
                    </div>

                    <div
                        class="about-card about-reveal about-reveal-up bg-gray-50 p-10 md:p-12 rounded-[2.5rem] border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div
                            class="w-16 h-16 bg-secondary/5 rounded-2xl flex items-center justify-center text-secondary mb-8 border border-secondary/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-primary mb-4">Inovasi Hijau</h4>
                        <p class="text-gray-500 font-light leading-relaxed">
                            Berkomitmen pada *packaging* berkelanjutan (sustainable) yang mudah terurai oleh alam demi kelestarian bumi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('styles')
    <style>
        .about-page .about-hero-item {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1),
                transform 1s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .about-page .about-hero-item.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .about-page .about-reveal {
            opacity: 0;
            transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1),
                transform 1s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .about-page .about-reveal-up {
            transform: translateY(60px);
        }

        .about-page .about-reveal-left {
            transform: translateX(-80px);
        }

        .about-page .about-reveal-right {
            transform: translateX(80px);
        }

        .about-page .about-reveal.is-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        @media (prefers-reduced-motion: reduce) {
            .about-page .about-hero-item,
            .about-page .about-reveal {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        (function () {
            function initTentangAnimation() {
                const page = document.querySelector(".about-page");

                if (!page) return;

                const heroItems = page.querySelectorAll(".about-hero-item");

                heroItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add("is-visible");
                    }, 200 + index * 180);
                });

                const revealItems = page.querySelectorAll(".about-reveal");

                if (!("IntersectionObserver" in window)) {
                    revealItems.forEach(item => item.classList.add("is-visible"));
                    return;
                }

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) return;

                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    });
                }, {
                    threshold: 0.12,
                    rootMargin: "0px 0px -40px 0px"
                });

                revealItems.forEach((item, index) => {
                    item.style.transitionDelay = `${index % 3 * 100}ms`;
                    observer.observe(item);
                });
            }

            if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", initTentangAnimation);
            } else {
                initTentangAnimation();
            }
        })();
    </script>
@endpush