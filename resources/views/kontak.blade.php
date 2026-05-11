@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<section class="pt-40 pb-20 bg-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-batik-pattern opacity-10 pointer-events-none"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="overflow-hidden mb-4">
            <span class="inline-block py-1 px-4 border border-highlight/50 text-highlight rounded-full text-xs font-semibold tracking-widest uppercase slide-up">Hubungi Kami</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-title text-white mb-6 slide-up">Mari <span class="italic text-highlight">Bicara</span></h1>
        <p class="text-white/70 max-w-2xl mx-auto font-light slide-up">Ada pertanyaan tentang produk, kerjasama reseller, atau sekadar ingin menyapa? Kami siap membantu Anda.</p>
    </div>
</section>

<section class="py-24 bg-white relative">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-16">

            <div class="lg:w-1/3 space-y-8 relative z-10"> {{-- Tambah z-10 --}}
                {{-- Card Lokasi --}}
                <div class="contact-info bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div class="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-highlight mb-6 shadow-lg shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-title font-bold text-primary mb-2">Lokasi Utama</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Jl. Raya Sokaraja No. 5, Dusun I, Sokaraja Kulon, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181</p>
                </div>

                {{-- Card Email & WA --}}
                <div class="contact-info bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-highlight mb-6 shadow-lg shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-title font-bold text-primary mb-2">Email & WhatsApp</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">halo@getukasri.com<br>+62 816-681-308</p>
                </div>

                {{-- Card Jam Operasional --}}
                <div class="contact-info bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-highlight mb-6 shadow-lg shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-title font-bold text-primary mb-2">Jam Operasional</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-semibold">Setiap Hari</p>
                    <p class="text-gray-400 text-sm">07.45 – 19.30 WIB</p>
                </div>
            </div>

            <div class="lg:w-2/3 bg-[#FAFAFA] p-10 md:p-16 rounded-[3rem] border border-gray-100 shadow-sm slide-up-form">
                <form action="#" class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-primary ml-4">Nama Lengkap</label>
                            <input type="text" class="w-full px-8 py-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-highlight outline-none transition-all" placeholder="Nadiv...">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-primary ml-4">Alamat Email</label>
                            <input type="email" class="w-full px-8 py-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-highlight outline-none transition-all" placeholder="nadiv@email.com">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-primary ml-4">Subjek Pesan</label>
                        <select class="w-full px-8 py-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-highlight outline-none transition-all appearance-none">
                            <option>Pertanyaan Produk</option>
                            <option>Kerjasama Reseller</option>
                            <option>Kritik & Saran</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-primary ml-4">Pesan Anda</label>
                        <textarea rows="5" class="w-full px-8 py-6 rounded-[2rem] bg-white border border-gray-200 focus:ring-2 focus:ring-highlight outline-none transition-all resize-none" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>
                    <button class="w-full bg-primary text-white py-5 rounded-full font-bold text-lg hover:bg-secondary transition duration-300 shadow-xl flex items-center justify-center gap-3 group">
                        Kirim Pesan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-2 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-[#FAFAFA]">
    <div class="container mx-auto px-6">
        <div class="rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white h-[500px] relative group">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1235478426!2d109.28784841477544!3d-7.457465494620027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655b8c9119d495%3A0x7fc9fd33f528a555!2sGetuk%20Goreng%20ASRI!5e0!3m2!1sid!2sid!4v1715083000000!5m2!1sid!2sid"
                class="w-full h-full grayscale hover:grayscale-0 transition-all duration-1000"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
            <div class="absolute bottom-10 left-10 bg-white p-6 rounded-2xl shadow-xl pointer-events-none group-hover:opacity-0 transition duration-500">
                <p class="text-primary font-bold">Kunjungi Toko Fisik Kami</p>
                <p class="text-gray-400 text-xs mt-1 italic">Klik peta untuk melihat detail lokasi</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    gsap.from(".slide-up", {
        duration: 1,
        y: 50,
        opacity: 0,
        stagger: 0.2,
        ease: "power3.out"
    });

    gsap.from(".contact-info", {
        scrollTrigger: {
            trigger: ".contact-info",
            start: "top 95%", // Dibikin muncul lebih cepet biar ga ngebug kelamaan transparan
            toggleActions: "play none none none"
        },
        x: -30,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: "power2.out",
        clearProps: "all" // PENTING: Menghapus style GSAP (opacity 0) setelah animasi selesai
    });

    gsap.from(".slide-up-form", {
        scrollTrigger: {
            trigger: ".slide-up-form",
            start: "top 80%",
        },
        y: 100,
        opacity: 0,
        duration: 1.2,
        ease: "power4.out"
    });
</script>
@endpush