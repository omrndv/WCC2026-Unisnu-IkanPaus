@extends('layouts.admin')

@section('title', 'Ringkasan Warisan')

@section('content')
{{-- Stats Section --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
        <div class="absolute -right-4 -top-4 w-24 h-24 bg-bgLight/30 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Total Pengunjung</p>
        <h3 class="text-5xl font-title font-bold text-primary">1,284</h3>
        <p class="text-accent text-xs font-bold mt-4 flex items-center gap-2">
            <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
            +12% Trend Positif
        </p>
    </div>

    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Pesan Masuk</p>
        <h3 class="text-5xl font-title font-bold text-primary">24</h3>
        <p class="text-highlight text-xs font-bold mt-4">Memerlukan Tindakan</p>
    </div>

    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Varian Aktif</p>
        <h3 class="text-5xl font-title font-bold text-primary">12</h3>
        <p class="text-secondary text-xs font-bold mt-4 italic">Katalog Terjaga</p>
    </div>
</div>

{{-- Analytics Section (JALUR 1: CHART.JS) --}}
<div class="mt-12 bg-white rounded-[3rem] p-10 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="flex justify-between items-center mb-8 border-b border-bgLight pb-4">
        <div>
            <h3 class="text-xl font-title font-bold text-primary italic">Analitik Kunjungan</h3>
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">Statistik 7 Hari Terakhir</p>
        </div>
        <div class="flex gap-2">
            <span class="w-3 h-3 rounded-full bg-highlight"></span>
            <span class="text-[10px] font-bold text-primary uppercase">Organic Traffic</span>
        </div>
    </div>
    <div class="h-[300px] w-full">
        <canvas id="visitorChart"></canvas>
    </div>
</div>

{{-- Health System Section --}}
<div class="mt-12 bg-white rounded-[3rem] p-10 border border-gray-100 shadow-sm relative overflow-hidden">
    <h3 class="text-xl font-title font-bold text-primary mb-8 border-b border-bgLight pb-4 italic">Kesehatan Sistem & Server</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Memory Usage</p>
            <div class="text-lg font-bold text-primary">24.5 MB</div>
            <div class="w-full bg-gray-100 h-1.5 rounded-full mt-2">
                <div class="bg-accent h-full w-[30%] rounded-full"></div>
            </div>
        </div>
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">PHP Version</p>
            <div class="text-lg font-bold text-primary">8.2.1</div>
            <div class="text-[10px] text-accent font-bold mt-1 uppercase">Latest</div>
        </div>
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">SSL Status</p>
            <div class="text-lg font-bold text-green-600">Active</div>
            <div class="text-[10px] text-gray-400 mt-1 italic">Secured by SSL</div>
        </div>
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Last Backup</p>
            <div class="text-lg font-bold text-primary">Tadi Pagi</div>
            <div class="text-[10px] text-highlight font-bold mt-1 uppercase">Auto</div>
        </div>
    </div>
</div>

{{-- Activities & Notes Section --}}
<div class="mt-16 grid lg:grid-cols-2 gap-10">
    <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 p-10 opacity-5">
            <svg width="100" height="100" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 0L60 30L30 60L0 30L30 0Z" fill="currentColor" />
            </svg>
        </div>
        <h3 class="text-2xl font-title font-bold text-primary mb-8 border-b border-bgLight pb-4">Aktivitas Terkini</h3>
        <div class="space-y-8">
            <div class="flex gap-6 items-start">
                <div class="w-1 bg-highlight h-12 rounded-full"></div>
                <div>
                    <p class="text-sm font-bold text-primary">Pesan Baru: Siti Rahmawati</p>
                    <p class="text-xs text-gray-400 mt-1 italic">"Ingin bertanya perihal stok besek volume besar..."</p>
                </div>
            </div>
            <div class="flex gap-6 items-start">
                <div class="w-1 bg-accent h-12 rounded-full"></div>
                <div>
                    <p class="text-sm font-bold text-primary">Katalog Diperbarui</p>
                    <p class="text-xs text-gray-400 mt-1 italic">Varian 'Cokelat Lumer' diupdate stoknya.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary rounded-[2.5rem] p-10 text-white relative overflow-hidden shadow-2xl">
        <div class="absolute inset-0 bg-batik-pattern opacity-10"></div>
        <div class="relative z-10">
            <h3 class="text-2xl font-title font-bold text-highlight mb-4 italic">Catatan Pengelola</h3>
            <p class="text-sm leading-relaxed text-white/70 font-light italic">
                "Kualitas rasa adalah kunci. Jangan lupa untuk selalu memantau umpan balik pelanggan di halaman kontak agar Getuk Asri tetap menjadi kebanggaan Banyumas."
            </p>
            <div class="mt-10 pt-8 border-t border-white/10 flex items-center justify-between">
                <span class="text-[10px] uppercase tracking-widest font-bold text-highlight">Status Sistem: Optimal</span>
                <div class="flex gap-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Inisialisasi Chart.js
    const ctx = document.getElementById('visitorChart').getContext('2d');

    // Gradient Background buat Grafik
    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(244, 168, 67, 0.4)'); // Warna Highlight (Emas)
    gradient.addColorStop(1, 'rgba(244, 168, 67, 0.0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Kunjungan',
                data: [450, 600, 520, 850, 780, 1100, 1284],
                borderColor: '#F4A843', // Warna highlight lo
                borderWidth: 4,
                pointBackgroundColor: '#5C2E00', // Warna primary lo
                pointBorderColor: '#fff',
                pointHoverRadius: 8,
                fill: true,
                backgroundColor: gradient,
                tension: 0.4, // Biar grafiknya smooth melengkung
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0,0,0,0.03)'
                    },
                    ticks: {
                        font: {
                            family: 'Poppins',
                            size: 10
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            family: 'Poppins',
                            size: 10
                        }
                    }
                }
            }
        }
    });
</script>
@endpush