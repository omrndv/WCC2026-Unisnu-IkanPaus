<div class="fixed top-6 left-0 w-full flex justify-center z-50 px-4">
    <nav class="glass-nav border border-white/50 rounded-full px-2 py-2 flex items-center justify-between transition-all duration-500 w-full max-w-7xl" id="navbar">
        <div class="bg-primary text-white pl-6 pr-8 py-2.5 rounded-full flex items-center shadow-md shrink-0">
            <span class="text-xl font-title font-bold italic tracking-wider">Getuk Asri</span>
        </div>

        <div class="hidden lg:flex items-center gap-1 px-4 font-semibold text-primary text-[10px] uppercase tracking-[0.2em]">
            <a href="{{ route('home') }}" class="px-3 py-2 hover:text-highlight transition-all duration-300 relative group">
                Beranda
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-highlight transition-all duration-300 group-hover:w-1/2"></span>
            </a>
            <a href="{{ route('produk') }}" class="px-3 py-2 hover:text-highlight transition-all duration-300 relative group">
                Produk
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-highlight transition-all duration-300 group-hover:w-1/2"></span>
            </a>
            <a href="{{ route('tentang') }}" class="px-3 py-2 hover:text-highlight transition-all duration-300 relative group">
                Tentang
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-highlight transition-all duration-300 group-hover:w-1/2"></span>
            </a>
            <a href="{{ route('blog') }}" class="px-3 py-2 hover:text-highlight transition-all duration-300 relative group">
                Blog
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-highlight transition-all duration-300 group-hover:w-1/2"></span>
            </a>
            <a href="{{ route('pesan') }}" class="px-3 py-2 hover:text-highlight transition-all duration-300 relative group">
                Pesan
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-highlight transition-all duration-300 group-hover:w-1/2"></span>
            </a>
            <a href="{{ route('kontak') }}" class="px-3 py-2 hover:text-highlight transition-all duration-300 relative group">
                Kontak
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-highlight transition-all duration-300 group-hover:w-1/2"></span>
            </a>
        </div>

        <div class="shrink-0">
            <a href="{{ url('/order') }}" class="inline-block bg-highlight hover:bg-secondary text-white px-8 py-3 rounded-full font-bold transition-all duration-300 text-[10px] uppercase tracking-widest shadow-lg transform hover:-translate-y-0.5">
                Beli Sekarang
            </a>
        </div>
    </nav>
</div>