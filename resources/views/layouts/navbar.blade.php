<div class="fixed top-6 left-1/2 -translate-x-1/2 w-full z-50 px-4">
    <div class="w-full max-w-7xl mx-auto transition-all duration-500 ease-in-out"
        id="navbar-wrapper">

        <nav id="navbar"
            class="glass-nav border border-white/50 rounded-full px-2 py-2 flex items-center justify-between transition-all duration-500">

            <div
                class="bg-primary text-white pl-6 pr-8 py-2.5 rounded-full flex items-center shadow-md shrink-0">
                <span class="text-xl font-title font-bold italic tracking-wider">
                    Getuk Asri
                </span>
            </div>

            <div
                class="hidden lg:flex flex-1 justify-center items-center gap-1 px-4 font-semibold text-primary text-[10px] uppercase tracking-[0.2em]">

                <a href="{{ route('home') }}"
                    class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('home') ? 'text-highlight' : 'hover:text-highlight' }}">
                    Beranda
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('home') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}">
                    </span>
                </a>

                <a href="{{ route('produk') }}"
                    class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('produk') ? 'text-highlight' : 'hover:text-highlight' }}">
                    Produk
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('produk') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}">
                    </span>
                </a>

                <a href="{{ route('tentang') }}"
                    class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('tentang') ? 'text-highlight' : 'hover:text-highlight' }}">
                    Tentang
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('tentang') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}">
                    </span>
                </a>

                <a href="{{ route('blog') }}"
                    class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('blog') ? 'text-highlight' : 'hover:text-highlight' }}">
                    Blog
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('blog') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}">
                    </span>
                </a>

                <a href="{{ route('kontak') }}"
                    class="px-3 py-2 transition-all duration-300 relative group {{ Route::is('kontak') ? 'text-highlight' : 'hover:text-highlight' }}">
                    Kontak
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-highlight transition-all duration-300 {{ Route::is('kontak') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}">
                    </span>
                </a>

            </div>

            <div class="flex items-center gap-2 shrink-0">

                <a href="https://wa.me/6282227771288"
                    class="hidden lg:inline-block bg-highlight hover:bg-secondary text-white px-8 py-3 rounded-full font-bold transition-all duration-300 text-[10px] uppercase tracking-widest shadow-lg hover:-translate-y-0.5">

                    Beli Sekarang
                </a>

                <button id="hamburger-btn"
                    class="lg:hidden flex flex-col justify-center gap-[5px] p-2 rounded-full hover:bg-white/30 transition-all duration-300"
                    aria-label="Toggle menu"
                    onclick="toggleMobileMenu()">

                    <span id="ham-line-1"
                        class="block w-[22px] h-[2px] bg-primary rounded transition-all duration-300 origin-center"></span>

                    <span id="ham-line-2"
                        class="block w-[22px] h-[2px] bg-primary rounded transition-all duration-300"></span>

                    <span id="ham-line-3"
                        class="block w-[22px] h-[2px] bg-primary rounded transition-all duration-300 origin-center"></span>

                </button>

            </div>

        </nav>

        <div id="mobile-menu"
            class="lg:hidden mt-2 glass-nav border border-white/50 rounded-2xl overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out">

            <div class="flex flex-col py-2">

                <a href="{{ route('home') }}"
                    class="px-6 py-3.5 text-[11px] font-semibold uppercase tracking-[0.2em] {{ Route::is('home') ? 'text-highlight border-l-2 border-highlight bg-highlight/5' : 'text-primary hover:text-highlight hover:bg-highlight/5' }}">
                    Beranda
                </a>

                <a href="{{ route('produk') }}"
                    class="px-6 py-3.5 text-[11px] font-semibold uppercase tracking-[0.2em] {{ Route::is('produk') ? 'text-highlight border-l-2 border-highlight bg-highlight/5' : 'text-primary hover:text-highlight hover:bg-highlight/5' }}">
                    Produk
                </a>

                <a href="{{ route('tentang') }}"
                    class="px-6 py-3.5 text-[11px] font-semibold uppercase tracking-[0.2em] {{ Route::is('tentang') ? 'text-highlight border-l-2 border-highlight bg-highlight/5' : 'text-primary hover:text-highlight hover:bg-highlight/5' }}">
                    Tentang
                </a>

                <a href="{{ route('blog') }}"
                    class="px-6 py-3.5 text-[11px] font-semibold uppercase tracking-[0.2em] {{ Route::is('blog') ? 'text-highlight border-l-2 border-highlight bg-highlight/5' : 'text-primary hover:text-highlight hover:bg-highlight/5' }}">
                    Blog
                </a>

                <a href="{{ route('kontak') }}"
                    class="px-6 py-3.5 text-[11px] font-semibold uppercase tracking-[0.2em] {{ Route::is('kontak') ? 'text-highlight border-l-2 border-highlight bg-highlight/5' : 'text-primary hover:text-highlight hover:bg-highlight/5' }}">
                    Kontak
                </a>

                <div class="px-4 pt-2 pb-3">

                    <a href="https://wa.me/6282227771288"
                        class="block text-center bg-highlight hover:bg-secondary text-white py-3 rounded-full font-bold text-[10px] uppercase tracking-widest shadow-lg transition-all duration-300">

                        Beli Sekarang
                    </a>

                </div>

            </div>

        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded",()=>{

    const navbarWrapper=document.getElementById("navbar-wrapper");

    if(navbarWrapper){

        window.addEventListener("scroll",()=>{

            if(window.scrollY>10){

                navbarWrapper.style.maxWidth="768px";

            }else{

                navbarWrapper.style.maxWidth="80rem";

            }

        });

    }

});

function toggleMobileMenu(){

    const menu=document.getElementById("mobile-menu");

    const l1=document.getElementById("ham-line-1");
    const l2=document.getElementById("ham-line-2");
    const l3=document.getElementById("ham-line-3");

    const isOpen=menu.classList.contains("max-h-96");

    if(isOpen){

        menu.classList.remove("max-h-96","opacity-100");
        menu.classList.add("max-h-0","opacity-0");

        l1.style.transform="";
        l2.style.opacity="";
        l3.style.transform="";

    }else{

        menu.classList.remove("max-h-0","opacity-0");
        menu.classList.add("max-h-96","opacity-100");

        l1.style.transform="translateY(7px) rotate(45deg)";
        l2.style.opacity="0";
        l3.style.transform="translateY(-7px) rotate(-45deg)";
    }
}
</script>