@php
$settings = Cache::remember('footer_settings', 3600, function () {
return \App\Models\Setting::pluck('value', 'key')->toArray();
});

$webName = $settings['web_name'] ?? 'Getuk Goreng Asri';
$webSlogan = $settings['web_slogan'] ?? 'Menghidupkan cita rasa tradisional Banyumas di era modern. Resep warisan tanpa pengawet buatan sejak 1990.';
$waRaw = $settings['wa_number'] ?? '082227771288';
$email = $settings['email_bisnis'] ?? null;
$jamBuka = $settings['jam_buka'] ?? null;
$jamTutup = $settings['jam_tutup'] ?? null;
$mapsUrl = $settings['maps_url'] ?? null;

$waNumber = preg_replace('/[^0-9]/', '', $waRaw);

if (str_starts_with($waNumber, '0')) {
$waNumber = '62' . substr($waNumber, 1);
}

$waDisplay = '+' . $waNumber;
@endphp

<footer class="bg-primary text-bgLight relative overflow-hidden pt-24 pb-8 border-t-[12px] border-highlight">
    <div class="absolute inset-0 bg-batik-pattern opacity-5"></div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-4 mb-6">
                    <span class="text-2xl font-title font-bold italic text-white leading-tight">
                        {{ $webName }}
                    </span>
                </a>

                <p class="text-sm font-light opacity-80 leading-relaxed mb-6">
                    Menghidupkan cita rasa tradisional Banyumas di era modern. Resep warisan tanpa pengawet buatan sejak 1990.
                </p>

                <div class="flex gap-4">
                    <a href="https://wa.me/{{ $waNumber }}" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi kami via WhatsApp"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-highlight hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-highlight mb-6 uppercase tracking-wider text-sm">Jelajahi</h4>
                <ul class="space-y-3 opacity-80 font-light">
                    <li>
                        <a href="{{ route('tentang') }}" class="hover:text-white hover:translate-x-1 inline-block transition">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}" class="hover:text-white hover:translate-x-1 inline-block transition">
                            Katalog Produk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="hover:text-white hover:translate-x-1 inline-block transition">
                            Cerita & Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('quiz.index') }}" class="hover:text-white hover:translate-x-1 inline-block transition">
                            Flavor Finder Quiz
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-highlight mb-6 uppercase tracking-wider text-sm">Bantuan</h4>
                <ul class="space-y-3 opacity-80 font-light">
                    <li>
                        <a href="{{ route('kontak') }}" class="hover:text-white hover:translate-x-1 inline-block transition">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kontak') }}" class="hover:text-white hover:translate-x-1 inline-block transition">
                            Hubungi Kami
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-highlight mb-6 uppercase tracking-wider text-sm">Kunjungi Toko</h4>
                <ul class="space-y-4 opacity-80 font-light text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-highlight mt-0.5 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>

                        <div class="leading-relaxed">
                            <a href="https://maps.app.goo.gl/qqe1zJVjL2YZYeVQ7" target="_blank" rel="noopener noreferrer"
                                class="hover:text-white transition">
                                Lihat lokasi toko di Google Maps
                            </a>
                            <span class="block text-bgLight/70">
                                Sokaraja, Banyumas, Jawa Tengah
                            </span>
                        </div>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-highlight shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="https://wa.me/{{ $waNumber }}" target="_blank" rel="noopener noreferrer"
                            class="hover:text-white transition">
                            {{ $waDisplay }} (WA Only)
                        </a>
                    </li>

                    @if ($email)
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-highlight shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z" />
                        </svg>
                        <a href="mailto:{{ $email }}" class="hover:text-white transition">
                            {{ $email }}
                        </a>
                    </li>
                    @endif

                    @if ($jamBuka && $jamTutup)
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-highlight shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" />
                        </svg>
                        <span>{{ $jamBuka }} - {{ $jamTutup }} WIB</span>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="border-t border-white/20 pt-6 text-center text-xs opacity-70">
            <p>&copy; {{ date('Y') }} {{ $webName }}.</p>
        </div>
    </div>
</footer>