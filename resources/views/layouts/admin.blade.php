<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#5C2E00',
                        secondary: '#8B4513',
                        bgLight: '#F5E6D3',
                        accent: '#4A7C59',
                        highlight: '#F4A843',
                    },
                    fontFamily: {
                        'title': ['Playfair Display', 'serif'],
                        'body': ['Poppins', 'sans-serif'],
                    },
                    backgroundImage: {
                        'batik-pattern': "url('data:image/svg+xml,%3Csvg width=\\'60\\' height=\\'60\\' viewBox=\\'0 0 60 60\\' xmlns=\\'http://www.w3.org/2000/svg\\'%3E%3Cg fill=\\'none\\' fill-rule=\\'evenodd\\'%3E%3Cg fill=\\'%23f4a843\\' fill-opacity=\\'0.05\\'%3E%3Cpath d=\\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')",
                    }
                }
            }
        }
    </script>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(244, 168, 67, 0.2);
            border-radius: 10px;
        }

        @media (max-width: 1024px) {
            .sidebar-hidden {
                transform: translateX(-100%);
            }

            .sidebar-open {
                transform: translateX(0);
            }
        }

        @media (min-width: 1024px) {
            .sidebar-desktop-fix {
                transform: translateX(0) !important;
                position: sticky !important;
                top: 0;
            }
        }
    </style>
</head>

<body class="bg-[#FAFAFA] font-body text-primary selection:bg-highlight selection:text-primary overflow-x-hidden">

    <div class="lg:hidden bg-primary p-4 flex justify-between items-center fixed top-0 left-0 right-0 z-[100] shadow-xl">
        <h2 class="text-xl font-title font-bold italic text-highlight tracking-widest uppercase">Admin Asri</h2>
        <button onclick="toggleSidebar()" class="text-highlight p-2 bg-white/10 rounded-xl active:scale-95 transition-all">
            <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <div class="flex min-h-screen relative">
        <aside id="sidebar" class="fixed lg:sticky inset-y-0 left-0 w-72 bg-primary text-white p-8 z-[110] transition-transform duration-300 sidebar-hidden sidebar-desktop-fix shrink-0 shadow-2xl flex flex-col h-screen">
            <div class="absolute inset-0 bg-batik-pattern opacity-20 pointer-events-none"></div>

            <div class="relative z-10 flex flex-col h-full">
                <h2 class="hidden lg:block text-2xl font-title font-bold italic mb-12 text-highlight border-b border-highlight/20 pb-6 text-center tracking-widest uppercase">Admin Asri</h2>

                <nav class="space-y-2 flex-1 overflow-y-auto pr-2 custom-scrollbar">
                    <a href="{{ route('admin.dashboard') }}" class="group flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ Route::is('admin.dashboard') ? 'bg-highlight text-primary font-bold shadow-lg' : 'opacity-70 hover:opacity-100 hover:bg-white/5' }}">
                        <span class="text-sm uppercase tracking-[0.2em]">Dashboard</span>
                    </a>
                    <a href="{{ route('admin.produk') }}" class="group flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ Route::is('admin.produk') ? 'bg-highlight text-primary font-bold shadow-lg' : 'opacity-70 hover:opacity-100 hover:bg-white/5' }}">
                        <span class="text-sm uppercase tracking-[0.2em]">Katalog Produk</span>
                    </a>
                    <a href="{{ route('admin.blog') }}" class="group flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ Route::is('admin.blog') ? 'bg-highlight text-primary font-bold shadow-lg' : 'opacity-70 hover:opacity-100 hover:bg-white/5' }}">
                        <span class="text-sm uppercase tracking-[0.2em]">Kelola Blog</span>
                    </a>
                    <a href="{{ route('admin.contacts') }}" class="group flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ Route::is('admin.contacts') ? 'bg-highlight text-primary font-bold shadow-lg' : 'opacity-70 hover:opacity-100 hover:bg-white/5' }}">
                        <span class="text-sm uppercase tracking-[0.2em]">Pesan Masuk</span>
                    </a>
                    <a href="{{ route('admin.settings') }}" class="group flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ Route::is('admin.settings') ? 'bg-highlight text-primary font-bold shadow-lg' : 'opacity-70 hover:opacity-100 hover:bg-white/5' }}">
                        <span class="text-sm uppercase tracking-[0.2em]">Pengaturan</span>
                    </a>
                    <a href="{{ route('admin.logs') }}" class="group flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ Route::is('admin.logs') ? 'bg-highlight text-primary font-bold shadow-lg' : 'opacity-70 hover:opacity-100 hover:bg-white/5' }}">
                        <span class="text-sm uppercase tracking-[0.2em]">Log Aktivitas</span>
                    </a>

                    <div class="pt-6 mt-6 border-t border-white/5 space-y-2">
                        <form action="{{ route('admin.clear-cache') }}" method="POST" id="formClearCache">
                            @csrf
                            <button type="button" onclick="confirmClearCache()" class="w-full flex items-center justify-between px-6 py-3 rounded-xl border border-red-500/30 text-red-400 hover:bg-red-500 hover:text-white transition-all duration-300 group">
                                <span class="text-[10px] font-bold uppercase tracking-[0.2em]">Clear Cache</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </button>
                        </form>
                        <button onclick="Swal.fire({title: 'Optimasi...', text: 'Database sedang dioptimalkan', icon: 'success', timer: 1500, showConfirmButton: false, background: '#F5E6D3', color: '#5C2E00'})" class="w-full flex items-center justify-between px-6 py-3 rounded-xl border border-accent/30 text-accent hover:bg-accent hover:text-white transition-all duration-300 group text-left">
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em]">Optimize DB</span>
                        </button>
                    </div>

                    <div class="pt-4 pb-8 space-y-2">
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">@csrf</form>
                        <a href="#" onclick="event.preventDefault(); confirmLogout(event);" class="flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 text-red-400 hover:bg-red-500 hover:text-white group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span class="text-sm uppercase tracking-[0.2em]">Logout</span>
                        </a>
                        <a href="{{ route('home') }}" class="flex items-center gap-3 px-6 py-4 text-xs font-bold uppercase tracking-widest text-highlight/50 border border-highlight/10 rounded-xl hover:text-highlight transition-all">
                            Main Website
                        </a>
                    </div>
                </nav>
            </div>
        </aside>

        <main class="flex-1 min-w-0">
            <div class="p-6 md:p-12 mt-20 lg:mt-0">
                <header class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 md:mb-16 border-b border-gray-100 pb-8 gap-6 relative z-10">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-highlight mb-2 block">Sistem Manajemen</span>
                        <h1 class="text-3xl md:text-4xl font-title font-bold text-primary italic">@yield('title')</h1>
                    </div>

                    <div class="flex items-center gap-4 bg-white p-4 md:p-0 rounded-3xl md:bg-transparent shadow-sm md:shadow-none w-full md:w-auto relative">
                        <div class="text-right flex-1 md:flex-none">
                            <p class="text-sm font-bold text-primary" id="greeting">Nadiv Muhammad</p>
                            <p class="text-[9px] md:text-[10px] font-medium text-gray-400 uppercase tracking-widest" id="liveClock">00:00:00 WIB</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-bgLight rounded-full border-2 border-highlight/20 flex items-center justify-center font-title italic font-bold text-primary shadow-sm shrink-0">
                            N
                        </div>
                    </div>
                </header>

                <div class="animate-fade-in relative z-0">
                    @yield('content')
                </div>
            </div>
        </main>

        <div id="overlay" onclick="toggleSidebar()" class="hidden fixed inset-0 bg-primary/60 backdrop-blur-md z-[105] lg:hidden"></div>
    </div>

    @stack('scripts')

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar.classList.toggle('sidebar-hidden');
            sidebar.classList.toggle('sidebar-open');
            overlay.classList.toggle('hidden');
        }

        function updateClock() {
            const now = new Date();
            const hours = now.getHours();
            const greetingElement = document.getElementById('greeting');
            const clockElement = document.getElementById('liveClock');
            let greet = "Selamat Malam";

            if (hours < 12) greet = "Selamat Pagi";
            else if (hours < 15) greet = "Selamat Siang";
            else if (hours < 18) greet = "Selamat Sore";

            if (greetingElement) greetingElement.innerText = `${greet}, Nadiv!`;
            if (clockElement) clockElement.innerText = now.toLocaleTimeString('id-ID') + " WIB";
        }
        setInterval(updateClock, 1000);
        updateClock();

        function confirmClearCache() {
            Swal.fire({
                title: 'Bersihkan Cache?',
                text: 'Halaman akan dimuat ulang setelah cache dibersihkan.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#5C2E00',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Bersihkan!',
                cancelButtonText: 'Batal',
                background: '#F5E6D3',
                color: '#5C2E00',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formClearCache').submit();
                }
            });
        }

        function confirmLogout(e) {
            Swal.fire({
                title: 'Sudah Selesai?',
                text: "Logout dari Admin Getuk Asri?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#5C2E00',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout!',
                background: '#F5E6D3',
                color: '#5C2E00',
                borderRadius: '2rem'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            })
        }
    </script>
</body>

</html>