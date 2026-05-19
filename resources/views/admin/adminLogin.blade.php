@extends('layouts.login')

@section('title', 'Login Admin')

@section('content')
    <div class="min-h-screen flex">
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-primary items-center justify-center">
            <img src="{{ asset('images/produk/getukgoreng.jpeg') }}" alt="Tradisi Getuk" class="absolute inset-0 w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 opacity-20 mix-blend-overlay" style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/80 to-transparent"></div>
            <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-highlight rounded-full blur-[120px] opacity-20 translate-x-1/2 -translate-y-1/2">
            </div>

            <div class="relative z-10 p-12 max-w-lg text-center mt-20">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center mx-auto mb-8 border border-white/20 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-highlight">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .414.336.75.75.75z" />
                    </svg>
                </div>
                <h1 class="text-4xl font-title font-bold text-white mb-4 leading-tight">Login Admin<br><span class="text-highlight italic">Getuk Goreng Asri</span></h1>
                <p class="text-white/70 font-light leading-relaxed">Kelola katalog produk, pantau pesanan pelanggan, dan sesuaikan pengaturan website Getuk Goreng Asri.</p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center bg-[#FAF8F5] p-8 sm:p-12 lg:p-16 relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-highlight/10 rounded-bl-full pointer-events-none"></div>
            <div class="w-full max-w-md relative z-10">
                <a href="/" class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-primary transition-colors mb-10 font-light group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Beranda
                </a>

                <div class="mb-10">
                    <h2 class="text-3xl font-title font-bold text-primary mb-2">Selamat Datang!</h2>
                    <p class="text-gray-500 font-light text-sm">Masukkan username dan kata sandi admin Anda.</p>
                </div>

                <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-6">
                    @csrf

                    @if ($errors->any())
                        <div class="bg-red-50 text-red-500 p-4 rounded-xl text-sm border border-red-100 flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <div>
                        <label for="username" class="block text-sm font-medium text-primary mb-2">Username Admin</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus placeholder="username" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-highlight/50 focus:border-highlight transition-all shadow-sm">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-primary mb-2">Kata Sandi</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-highlight/50 focus:border-highlight transition-all shadow-sm">
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors focus:outline-none">
                                <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-4 rounded-xl font-medium hover:bg-secondary transition-all duration-300 shadow-lg shadow-primary/20 flex justify-center items-center gap-2 group">
                        <span>Masuk ke Dashboard</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
            }
        }
    </script>
@endpush
