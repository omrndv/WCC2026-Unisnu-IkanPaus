@extends('layouts.app')

@section('title', 'Hasil Quiz - ' . $rekomendasi['varian'])

@section('content')
    <section class="min-h-screen bg-primary relative overflow-hidden flex items-center py-32">
        <div class="absolute inset-0 bg-batik-pattern opacity-[0.04]"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-highlight rounded-full blur-[150px] opacity-20 -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary rounded-full blur-[120px] opacity-30 translate-y-1/3 -translate-x-1/4"></div>

        <div class="container mx-auto px-6 relative z-10 max-w-xl text-center">
            <div class="quiz-result-emoji text-8xl mb-6">
                {{ $rekomendasi['emoji'] }}
            </div>

            <div
                class="quiz-result-item inline-block px-5 py-1.5 border border-highlight/40 bg-black/20 text-highlight rounded-full text-xs font-semibold tracking-widest uppercase mb-6">
                Rekomendasi Untukmu
            </div>

            <h1 class="quiz-result-item text-3xl md:text-5xl font-title text-white mb-6 leading-tight">
                {{ $rekomendasi['varian'] }}
            </h1>

            <div class="quiz-result-item bg-white/10 backdrop-blur-md rounded-[2rem] p-8 border border-white/10 shadow-2xl mb-10">
                <p class="text-white/80 text-lg font-light leading-relaxed">
                    {{ $rekomendasi['deskripsi'] }}
                </p>
            </div>

            <div class="quiz-result-item flex flex-col sm:flex-row justify-center gap-4">
                @php
                    $waNumber = preg_replace('/[^0-9]/', '', config('site.wa_number', ''));
                    $message = "Halo, saya baru selesai Flavor Finder Quiz dan direkomendasikan *{$rekomendasi['varian']}*. Apakah masih tersedia? Terima kasih!";
                    $pesanWa = urlencode($message);
                @endphp

                <a href="https://wa.me/62{{ $waNumber }}?text={{ $pesanWa }}" target="_blank" rel="noopener noreferrer"
                    class="bg-highlight text-primary px-10 py-4 rounded-full font-bold text-lg hover:bg-white transition-all duration-300 shadow-xl hover:-translate-y-1 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.305-.885-.653-1.482-1.46-1.655-1.758-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    Pesan Sekarang
                </a>

                <a href="{{ route('quiz.index') }}"
                    class="border-2 border-white/30 text-white px-10 py-4 rounded-full font-bold text-lg hover:border-highlight hover:text-highlight transition-all duration-300 hover:-translate-y-1">
                    Ulangi Quiz
                </a>
            </div>

            <a href="{{ route('home') }}" class="quiz-result-item inline-block mt-8 text-white/50 hover:text-white transition text-sm">
                ← Kembali ke Beranda
            </a>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .quiz-result-emoji {
            animation: quizEmojiFloat 1.4s ease-in-out infinite alternate;
        }

        .quiz-result-item {
            opacity: 0;
            transform: translateY(34px);
            animation: quizResultFadeUp 0.9s ease forwards;
        }

        .quiz-result-item:nth-child(2) {
            animation-delay: 0.12s;
        }

        .quiz-result-item:nth-child(3) {
            animation-delay: 0.24s;
        }

        .quiz-result-item:nth-child(4) {
            animation-delay: 0.36s;
        }

        .quiz-result-item:nth-child(5) {
            animation-delay: 0.48s;
        }

        .quiz-result-item:nth-child(6) {
            animation-delay: 0.6s;
        }

        @keyframes quizResultFadeUp {
            from {
                opacity: 0;
                transform: translateY(34px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes quizEmojiFloat {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-12px);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .quiz-result-emoji,
            .quiz-result-item {
                opacity: 1;
                transform: none;
                animation: none;
            }
        }
    </style>
@endpush