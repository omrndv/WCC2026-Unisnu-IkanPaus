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
                Menjaga Rasa, <br>
                <span class="italic text-highlight">Merawat Tradisi</span>
            </h1>

            <p class="about-hero-item text-lg text-white/70 font-light max-w-2xl mx-auto leading-relaxed">
                Getuk Goreng Asri hadir sejak tahun 1990 sebagai bagian dari cita rasa khas Sokaraja, Banyumas.
                Kami menjaga rasa tradisional lewat dua varian utama: Original Jawa dan Durian.
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
                        <img src="{{ asset('images/produk/fotogetuk.jpeg') }}" alt="Getuk Goreng Asri Sokaraja"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <div class="about-reveal about-reveal-right">
                    <h2 class="text-sm font-bold tracking-[0.2em] text-highlight uppercase mb-4">
                        Awal Cerita
                    </h2>

                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-title text-primary font-bold mb-6 leading-tight">
                        Dari Sokaraja untuk <br>
                        <span class="italic font-light">Pecinta Getuk Goreng</span>
                    </h3>

                    <p class="text-gray-600 font-light leading-relaxed mb-6 text-lg">
                        Sejak tahun 1990, Getuk Goreng Asri mulai dikenal sebagai salah satu pilihan oleh-oleh khas
                        Sokaraja, Banyumas. Berawal dari produksi sederhana, kami terus menjaga rasa manis gurih yang
                        akrab di lidah masyarakat.
                    </p>

                    <p class="text-gray-600 font-light leading-relaxed text-lg">
                        Bagi kami, getuk goreng bukan sekadar camilan. Di dalamnya ada rasa rumahan, cerita perjalanan,
                        dan kebiasaan keluarga Indonesia yang suka membawa oleh-oleh untuk orang tersayang.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center mb-32">
                <div class="order-2 md:order-1 about-reveal about-reveal-left">
                    <h2 class="text-sm font-bold tracking-[0.2em] text-highlight uppercase mb-4">
                        Ciri Khas Kami
                    </h2>

                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-title text-primary font-bold mb-6 leading-tight">
                        Original Jawa & <br>
                        <span class="italic font-light">Durian yang Khas</span>
                    </h3>

                    <p class="text-gray-600 font-light leading-relaxed mb-6 text-lg">
                        Kami fokus pada dua varian utama agar rasa tetap terjaga: Original Jawa untuk kamu yang menyukai
                        cita rasa klasik, dan Durian untuk kamu yang ingin sensasi lebih legit dengan aroma khas.
                    </p>

                    <p class="text-gray-600 font-light leading-relaxed text-lg">
                        Setiap produk dibuat untuk tetap sederhana, mudah dinikmati, dan cocok dibawa sebagai oleh-oleh,
                        hampers, maupun camilan keluarga.
                    </p>
                </div>

                <div class="order-1 md:order-2 relative group about-reveal about-reveal-right">
                    <div
                        class="absolute -inset-4 bg-primary/10 rounded-[3rem] -rotate-3 group-hover:rotate-0 transition-transform duration-700">
                    </div>

                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] bg-gray-100">
                        <img src="{{ asset('images/produk/fotogetuk_2.jpeg') }}" alt="Varian Getuk Goreng Asri"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16 about-reveal about-reveal-up">
                <h3 class="text-3xl md:text-5xl font-title mb-4">
                    Dua Rasa yang <span class="italic text-highlight">Paling Dicari</span>
                </h3>

                <p class="font-light text-white/80 max-w-2xl mx-auto">
                    Rasa yang baik tidak harus berlebihan. Kami menjaga kualitas bahan, proses pembuatan, dan kemasan
                    agar getuk goreng tetap enak dinikmati sampai ke tangan pelanggan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div
                    class="about-reveal about-reveal-up bg-white/5 backdrop-blur-md border border-white/10 p-8 md:p-12 rounded-[2.5rem] hover:bg-white/10 transition-colors">
                    <div
                        class="w-16 h-16 rounded-full bg-highlight flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(244,168,67,0.4)]">
                        <span class="text-3xl">🤎</span>
                    </div>

                    <h4 class="text-2xl font-title font-bold mb-4">Original Jawa</h4>

                    <p class="font-light text-white/70 leading-relaxed">
                        Varian Original Jawa menjadi pilihan klasik untuk pelanggan yang menyukai rasa getuk goreng
                        tradisional. Manisnya pas, teksturnya lembut, dan cocok untuk semua usia.
                    </p>
                </div>

                <div
                    class="about-reveal about-reveal-up bg-white/5 backdrop-blur-md border border-white/10 p-8 md:p-12 rounded-[2.5rem] hover:bg-white/10 transition-colors">
                    <div
                        class="w-16 h-16 rounded-full bg-highlight flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(244,168,67,0.4)]">
                        <span class="text-3xl">💛</span>
                    </div>

                    <h4 class="text-2xl font-title font-bold mb-4">Durian</h4>

                    <p class="font-light text-white/70 leading-relaxed">
                        Varian Durian hadir untuk pelanggan yang ingin rasa lebih berani. Aroma durian yang khas berpadu
                        dengan manisnya getuk goreng, menghasilkan rasa yang legit dan berbeda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-[#FAF8F5] overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24 about-reveal about-reveal-up">
                <h3 class="text-4xl md:text-5xl font-title text-primary mb-6">
                    Perjalanan <span class="italic text-highlight">Getuk Goreng Asri</span>
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
                            <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">1990</span>
                            <h4 class="text-2xl font-bold text-primary mb-3">Awal Getuk Goreng Asri</h4>
                            <p class="text-gray-500 font-light leading-relaxed">
                                Getuk Goreng Asri mulai hadir di Sokaraja sebagai usaha oleh-oleh lokal yang membawa
                                cita rasa manis gurih khas Banyumas.
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
                            <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">2000</span>
                            <h4 class="text-2xl font-bold text-primary mb-3">Mulai Dikenal Pelanggan</h4>
                            <p class="text-gray-500 font-light leading-relaxed">
                                Dari pelanggan sekitar Sokaraja, Getuk Goreng Asri mulai dikenal oleh pembeli dari luar
                                daerah yang mencari oleh-oleh khas Banyumas.
                            </p>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                        <div class="flex-1 md:text-right md:pr-16 mb-8 md:mb-0">
                            <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">2010</span>
                            <h4 class="text-2xl font-bold text-primary mb-3">Menjaga Rasa Klasik</h4>
                            <p class="text-gray-500 font-light leading-relaxed">
                                Varian Original Jawa menjadi identitas utama yang terus dijaga karena rasanya sederhana,
                                familiar, dan cocok untuk keluarga.
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
                            <span class="text-6xl font-title text-gray-200 block mb-2 tracking-widest">2012</span>
                            <h4 class="text-2xl font-bold text-primary mb-3">Varian Durian Hadir</h4>
                            <p class="text-gray-500 font-light leading-relaxed">
                                Varian Durian dihadirkan untuk pelanggan yang ingin rasa lebih unik, legit, dan berbeda
                                tanpa meninggalkan ciri khas getuk goreng.
                            </p>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center about-timeline about-reveal about-reveal-up">
                        <div class="flex-1 md:text-right md:pr-16 mb-8 md:mb-0">
                            <span class="text-6xl font-title text-highlight/40 block mb-2 tracking-widest text-shadow">
                                2026
                            </span>
                            <h4 class="text-2xl font-bold text-primary mb-3">Lebih Dekat Secara Digital</h4>
                            <p class="text-gray-500 font-light leading-relaxed">
                                Getuk Goreng Asri mulai memperkuat kehadiran digital agar pelanggan lebih mudah melihat
                                produk, membaca cerita, dan melakukan pemesanan secara online.
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>

                    <h4 class="text-2xl font-bold text-primary mb-4">Konsistensi Rasa</h4>

                    <p class="text-gray-500 font-light leading-relaxed">
                        Kami menjaga rasa Original Jawa dan Durian agar tetap konsisten, sederhana, dan mudah diterima
                        oleh pelanggan.
                    </p>
                </div>

                <div
                    class="about-card about-reveal about-reveal-up bg-gray-50 p-10 md:p-12 rounded-[2.5rem] border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-highlight/10 rounded-2xl flex items-center justify-center text-highlight mb-8 border border-highlight/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 1 1 0 5.292M15 21H3v-1a6 6 0 0 1 12 0v1zm0 0h6v-1a6 6 0 0 0-9-5.197M13 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
                        </svg>
                    </div>

                    <h4 class="text-2xl font-bold text-primary mb-4">Pelayanan Ramah</h4>

                    <p class="text-gray-500 font-light leading-relaxed">
                        Setiap pesanan kami layani dengan baik, mulai dari pertanyaan produk, pemesanan, hingga
                        kebutuhan oleh-oleh dan hampers.
                    </p>
                </div>

                <div
                    class="about-card about-reveal about-reveal-up bg-gray-50 p-10 md:p-12 rounded-[2.5rem] border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-secondary/5 rounded-2xl flex items-center justify-center text-secondary mb-8 border border-secondary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7m16 0H4m16 0a2 2 0 0 0 0-4h-3.17M4 12a2 2 0 0 1 0-4h3.17M12 21V8m0 0H7.5A2.5 2.5 0 1 1 10 5.5c0 1.5 2 2.5 2 2.5zm0 0h4.5A2.5 2.5 0 1 0 14 5.5c0 1.5-2 2.5-2 2.5z" />
                        </svg>
                    </div>

                    <h4 class="text-2xl font-bold text-primary mb-4">Kemasan Layak Oleh-Oleh</h4>

                    <p class="text-gray-500 font-light leading-relaxed">
                        Produk dikemas rapi agar cocok dibawa pulang, diberikan kepada keluarga, atau dijadikan buah
                        tangan khas Banyumas.
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
    (function() {
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
                revealItems.forEach((item) => item.classList.add("is-visible"));
                return;
            }

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
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