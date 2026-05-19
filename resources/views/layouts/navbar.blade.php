<div class="fixed top-6 left-0 w-full flex justify-center z-50 px-4">
    <nav class="glass-nav border border-white/50 rounded-full px-2 py-2 flex items-center justify-between transition-all duration-500 w-full max-w-7xl" id="navbar">

        <div class="bg-primary text-white pl-6 pr-8 py-2.5 rounded-full flex items-center shadow-md shrink-0">
            <span class="text-xl font-title font-bold italic tracking-wider">Getuk Asri</span>
        </div>

        <div class="hidden lg:flex items-center gap-1 px-4 font-semibold text-primary text-[10px] uppercase tracking-[0.2em]">

            {{-- Beranda --}}
            <a href="{{ route('home') }}" class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('home') ? 'text-highlight' : 'hover:text-highlight' }}">
                Beranda
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('home') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
            </a>

            {{-- Produk --}}
            <a href="{{ route('produk') }}" class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('produk') ? 'text-highlight' : 'hover:text-highlight' }}">
                Produk
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('produk') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
            </a>

            {{-- Tentang --}}
            <a href="{{ route('tentang') }}" class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('tentang') ? 'text-highlight' : 'hover:text-highlight' }}">
                Tentang
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('tentang') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
            </a>

            {{-- Blog --}}
            <a href="{{ route('blog') }}" class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('blog') ? 'text-highlight' : 'hover:text-highlight' }}">
                Blog
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('blog') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
            </a>

            {{-- Kontak --}}
            <a href="{{ route('kontak') }}" class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('kontak') ? 'text-highlight' : 'hover:text-highlight' }}">
                Kontak
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('kontak') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
            </a>
        </div>

        <div class="shrink-0">
            <a href="https://wa.me/6282227771288" class="inline-block bg-highlight hover:bg-secondary text-white px-8 py-3 rounded-full font-bold transition-all duration-300 text-[10px] uppercase tracking-widest shadow-lg transform hover:-translate-y-0.5">
                Beli Sekarang
            </a>
        </div>
    </nav>
</div>