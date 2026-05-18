@extends('layouts.app')

@section('title', 'Flavor Finder Quiz')

@section('content')
<section class="min-h-screen bg-primary relative overflow-hidden flex items-center py-32">
    <div class="absolute inset-0 bg-batik-pattern opacity-[0.04]"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-highlight rounded-full blur-[150px] opacity-20 -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary rounded-full blur-[120px] opacity-30 translate-y-1/3 -translate-x-1/4"></div>

    <div class="container mx-auto px-6 relative z-10 max-w-2xl">

        {{-- Header --}}
        <div class="text-center mb-12">
            <a href="/" class="inline-flex items-center gap-2 text-white/60 hover:text-highlight transition mb-8 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>
            <div class="inline-block px-5 py-1.5 border border-highlight/40 bg-black/20 text-highlight rounded-full text-xs font-semibold tracking-widest uppercase mb-6">
                Flavor Finder Quiz ✨
            </div>
            <h1 class="text-4xl md:text-5xl font-title text-white mb-4 leading-tight">
                Temukan Rasa <span class="italic text-highlight">Terbaikmu</span>
            </h1>
            <p class="text-white/70 font-light">Jawab 3 pertanyaan singkat — kami yang rekomendasikan.</p>
        </div>

        {{-- Progress bar --}}
        <div class="flex gap-2 mb-10" id="progressBar">
            @foreach($questions as $q)
            <div class="h-1.5 flex-1 rounded-full bg-white/20 transition-all duration-500" id="progress-{{ $q['id'] }}"></div>
            @endforeach
        </div>

        {{-- Form --}}
        <form action="{{ route('quiz.result') }}" method="POST" id="quizForm">
            @csrf

            @foreach($questions as $index => $q)
            <div class="quiz-step {{ $index > 0 ? 'hidden' : '' }}" data-step="{{ $q['id'] }}">
                <div class="bg-white/10 backdrop-blur-md rounded-[2rem] p-8 md:p-10 border border-white/10 shadow-2xl">
                    <p class="text-white/60 text-sm font-medium mb-3 tracking-wider">Pertanyaan {{ $q['id'] }} dari {{ count($questions) }}</p>
                    <h2 class="text-2xl md:text-3xl font-title text-white mb-8">{{ $q['teks'] }}</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($q['pilihan'] as $key => $pilihan)
                        <label class="quiz-option group cursor-pointer">
                            <input type="radio" name="jawaban[{{ $q['id'] }}]" value="{{ $key }}" class="sr-only" required>
                            <div class="flex items-center gap-4 p-5 rounded-2xl border-2 border-white/20 bg-white/5 hover:border-highlight hover:bg-highlight/10 transition-all duration-300 group-has-[:checked]:border-highlight group-has-[:checked]:bg-highlight/20">
                                <span class="text-2xl">{{ explode(' ', $pilihan['label'])[0] }}</span>
                                <span class="text-white font-medium text-sm leading-snug">{{ trim(substr($pilihan['label'], mb_strlen(explode(' ', $pilihan['label'])[0]))) }}</span>
                            </div>
                        </label>
                        @endforeach
                    </div>

                    <div class="mt-8 flex justify-between items-center">
                        @if($index > 0)
                        <button type="button" onclick="prevStep({{ $q['id'] }})" class="text-white/60 hover:text-white transition text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali
                        </button>
                        @else
                        <div></div>
                        @endif

                        @if($index < count($questions) - 1)
                        <button type="button" onclick="nextStep({{ $q['id'] }})"
                            class="bg-highlight text-primary px-8 py-3 rounded-full font-bold hover:bg-white transition-all duration-300 disabled:opacity-40 disabled:cursor-not-allowed next-btn-{{ $q['id'] }}">
                            Lanjut →
                        </button>
                        @else
                        <button type="submit"
                            class="bg-highlight text-primary px-8 py-3 rounded-full font-bold hover:bg-white transition-all duration-300">
                            Lihat Rekomendasiku 🎉
                        </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </form>

        @if($errors->any())
        <div class="mt-4 text-red-300 text-sm text-center">
            Pastikan semua pertanyaan sudah dijawab ya!
        </div>
        @endif
    </div>
</section>
@endsection

@push('scripts')
<script>
    const totalSteps = {{ count($questions) }};

    function getStep(id) {
        return document.querySelector(`.quiz-step[data-step="${id}"]`);
    }

    function updateProgress(activeId) {
        for (let i = 1; i <= totalSteps; i++) {
            const bar = document.getElementById(`progress-${i}`);
            bar.classList.toggle('bg-highlight', i <= activeId);
            bar.classList.toggle('bg-white/20', i > activeId);
        }
    }

    function nextStep(currentId) {
        // Validasi: pastikan jawaban sudah dipilih
        const selected = document.querySelector(`input[name="jawaban[${currentId}]"]:checked`);
        if (!selected) {
            // Shake animasi pada card
            const card = getStep(currentId).querySelector('div');
            card.classList.add('animate-pulse');
            setTimeout(() => card.classList.remove('animate-pulse'), 600);
            return;
        }

        getStep(currentId).classList.add('hidden');
        getStep(currentId + 1).classList.remove('hidden');
        updateProgress(currentId + 1);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function prevStep(currentId) {
        getStep(currentId).classList.add('hidden');
        getStep(currentId - 1).classList.remove('hidden');
        updateProgress(currentId - 1);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Init progress
    updateProgress(1);
</script>
@endpush