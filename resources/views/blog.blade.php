@extends('layouts.app')

@section('title', 'Cerita & Budaya')

@section('content')
<section class="pt-40 pb-20 bg-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-batik-pattern opacity-10 pointer-events-none"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="overflow-hidden mb-4">
            <span class="inline-block py-1 px-4 border border-highlight/50 text-highlight rounded-full text-xs font-semibold tracking-widest uppercase slide-up">Jendela Banyumas</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-title text-white mb-6 slide-up">Cerita & <span class="italic text-highlight">Budaya</span></h1>
        <p class="text-white/70 max-w-2xl mx-auto font-light slide-up">Menelusuri jejak sejarah getuk goreng dan kearifan lokal masyarakat Sokaraja melalui tulisan.</p>
    </div>
</section>

<section class="py-10 bg-white border-b border-gray-100 sticky top-20 z-30 shadow-sm">
    <div class="container mx-auto px-6 flex justify-center gap-4 md:gap-8 overflow-x-auto hide-scrollbar text-sm font-medium">
        @php
        $currentCat = request('category');
        @endphp

        <a href="{{ route('blog') }}"
            class="pb-2 whitespace-nowrap transition-all duration-300 {{ !$currentCat ? 'text-primary border-b-2 border-highlight' : 'text-gray-400 hover:text-primary' }}">
            Semua Cerita
        </a>

        <a href="{{ route('blog', ['category' => 'sejarah']) }}"
            class="pb-2 whitespace-nowrap transition-all duration-300 {{ $currentCat == 'sejarah' ? 'text-primary border-b-2 border-highlight' : 'text-gray-400 hover:text-primary' }}">
            Sejarah Kuliner
        </a>

        <a href="{{ route('blog', ['category' => 'budaya']) }}"
            class="pb-2 whitespace-nowrap transition-all duration-300 {{ $currentCat == 'budaya' ? 'text-primary border-b-2 border-highlight' : 'text-gray-400 hover:text-primary' }}">
            Budaya Banyumas
        </a>

        <a href="{{ route('blog', ['category' => 'tips']) }}"
            class="pb-2 whitespace-nowrap transition-all duration-300 {{ $currentCat == 'tips' ? 'text-primary border-b-2 border-highlight' : 'text-gray-400 hover:text-primary' }}">
            Tips & Resep
        </a>
    </div>
</section>

<section class="py-20 bg-[#FAFAFA]">
    <div class="container mx-auto px-6">
        @if($currentCat)
        <div class="mb-10 text-gray-500 text-sm italic">
            Menampilkan cerita dalam kategori: <span class="text-primary font-bold capitalize">{{ $currentCat }}</span>
        </div>
        @endif

        <div class="grid md:grid-cols-3 gap-12">
            @forelse($blogs as $blog)
            <article class="group blog-card">
                <div class="rounded-[2rem] overflow-hidden mb-6 relative shadow-lg">
                    @if($blog->gambar)
                    <img src="{{ asset('storage/' . $blog->gambar) }}" alt="{{ $blog->judul }}"
                        class="w-full h-72 object-cover transition-transform duration-700 group-hover:scale-110">
                    @else
                    <div class="w-full h-72 bg-bgLight/40 flex items-center justify-center text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    @endif
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-primary px-4 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">
                        {{ $blog->kategori }}
                    </div>
                </div>
                <div class="px-2">
                    <div class="flex items-center gap-4 text-xs text-gray-400 mb-3">
                        <span>{{ $blog->created_at->translatedFormat('d F Y') }}</span>
                        <span class="w-1 h-1 bg-highlight rounded-full"></span>
                        <span>{{ ceil(str_word_count(strip_tags($blog->konten)) / 200) }} Menit Baca</span>
                    </div>
                    <h3 class="text-2xl font-title text-primary mb-4 group-hover:text-highlight transition duration-300">
                        {{ $blog->judul }}
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                        {{ Str::limit(strip_tags($blog->konten), 150) }}
                    </p>
                    <a href="#" class="text-primary font-bold text-sm border-b border-primary pb-1 hover:text-highlight hover:border-highlight transition inline-flex items-center gap-2">
                        Baca Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-20 text-gray-400 italic font-medium">
                Belum ada cerita yang diterbitkan.
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($blogs->hasPages())
        <div class="mt-20 flex justify-center items-center gap-4">
            @if($blogs->onFirstPage())
            <button disabled class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center text-gray-300 cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            @else
            <a href="{{ $blogs->previousPageUrl() }}" class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            @endif

            <span class="text-sm font-bold text-primary">
                Halaman {{ $blogs->currentPage() }} dari {{ $blogs->lastPage() }}
            </span>

            @if($blogs->hasMorePages())
            <a href="{{ $blogs->nextPageUrl() }}" class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            @else
            <button disabled class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center text-gray-300 cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            @endif
        </div>
        @endif
    </div>
</section>

<section class="py-24 bg-highlight overflow-hidden relative">
    <div class="absolute inset-0 bg-batik-pattern opacity-10 mix-blend-multiply"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="bg-white rounded-[3rem] p-12 md:p-20 shadow-2xl flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-title text-primary mb-4 leading-tight">Langganan <span class="italic">Kabar Asri</span></h2>
                <p class="text-gray-500 font-light">Dapatkan update cerita budaya, tips kuliner, dan promo eksklusif langsung ke email Anda.</p>
            </div>
            <div class="md:w-1/2 w-full">
                <form class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Alamat email Anda" class="flex-1 px-8 py-4 rounded-full bg-bgLight/50 border-none focus:ring-2 focus:ring-primary outline-none text-primary transition-all">
                    <button class="bg-primary text-white px-10 py-4 rounded-full font-bold hover:bg-secondary transition duration-300 whitespace-nowrap shadow-lg">Daftar Sekarang</button>
                </form>
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

    gsap.from(".blog-card", {
        scrollTrigger: {
            trigger: ".blog-card",
            start: "top 85%",
        },
        y: 60,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out"
    });
</script>
@endpush