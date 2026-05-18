@extends('layouts.admin')
@section('title', 'Ringkasan Warisan')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
        <div class="absolute -right-4 -top-4 w-24 h-24 bg-bgLight/30 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Total Pengunjung</p>
        <h3 class="text-5xl font-title font-bold text-primary">—</h3>
        <p class="text-accent text-xs font-bold mt-4 flex items-center gap-2">
            <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
            Pasang Google Analytics
        </p>
    </div>

    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Pesan Masuk</p>
        <h3 class="text-5xl font-title font-bold text-primary">{{ $totalPesan }}</h3>
        <p class="text-highlight text-xs font-bold mt-4">
            <a href="{{ route('admin.contacts') }}" class="hover:underline">Lihat Semua Pesan →</a>
        </p>
    </div>

    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Varian Aktif</p>
        <h3 class="text-5xl font-title font-bold text-primary">{{ $totalProduk }}</h3>
        <p class="text-secondary text-xs font-bold mt-4 italic">
            <a href="{{ route('admin.produk') }}" class="hover:underline">Kelola Katalog →</a>
        </p>
    </div>
</div>

{{-- Chart --}}
<div class="mt-12 bg-white rounded-[3rem] p-10 border border-gray-100 shadow-sm relative overflow-hidden">
    <div class="flex justify-between items-center mb-8 border-b border-bgLight pb-4">
        <div>
            <h3 class="text-xl font-title font-bold text-primary italic">Analitik Kunjungan</h3>
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">Statistik 7 Hari Terakhir</p>
        </div>
        <div class="flex gap-2 items-center">
            <span class="w-3 h-3 rounded-full bg-highlight"></span>
            <span class="text-[10px] font-bold text-primary uppercase">Organic Traffic</span>
        </div>
    </div>
    <div class="h-[300px] w-full">
        <canvas id="visitorChart"></canvas>
    </div>
</div>

{{-- System Health --}}
<div class="mt-12 bg-white rounded-[3rem] p-10 border border-gray-100 shadow-sm">
    <h3 class="text-xl font-title font-bold text-primary mb-8 border-b border-bgLight pb-4 italic">Kesehatan Sistem & Server</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Memory Usage</p>
            <div class="text-lg font-bold text-primary">{{ round(memory_get_usage(true) / 1024 / 1024, 1) }} MB</div>
            <div class="w-full bg-gray-100 h-1.5 rounded-full mt-2">
                <div class="bg-accent h-full rounded-full" style="width: {{ min(round(memory_get_usage(true) / memory_get_peak_usage(true) * 100), 100) }}%"></div>
            </div>
        </div>
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">PHP Version</p>
            <div class="text-lg font-bold text-primary">{{ PHP_VERSION }}</div>
            <div class="text-[10px] text-accent font-bold mt-1 uppercase">Active</div>
        </div>
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">SSL Status</p>
            <div class="text-lg font-bold {{ request()->isSecure() ? 'text-green-600' : 'text-red-400' }}">
                {{ request()->isSecure() ? 'Active' : 'Inactive' }}
            </div>
            <div class="text-[10px] text-gray-400 mt-1 italic">{{ request()->isSecure() ? 'Secured by SSL' : 'HTTP Only' }}</div>
        </div>
        <div class="text-center">
            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-2">Laravel Ver</p>
            <div class="text-lg font-bold text-primary">{{ app()->version() }}</div>
            <div class="text-[10px] text-highlight font-bold mt-1 uppercase">Running</div>
        </div>
    </div>
</div>

{{-- Aktivitas & Catatan --}}
<div class="mt-16 grid lg:grid-cols-2 gap-10">
    <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
        <h3 class="text-2xl font-title font-bold text-primary mb-8 border-b border-bgLight pb-4">Aktivitas Terkini</h3>
        <div class="space-y-8">
            @forelse($recentLogs as $log)
            <div class="flex gap-6 items-start">
                <div class="w-1 {{ $log->status === 'berhasil' ? 'bg-highlight' : ($log->status === 'selesai' ? 'bg-blue-400' : 'bg-accent') }} h-12 rounded-full shrink-0"></div>
                <div>
                    <p class="text-sm font-bold text-primary">{{ $log->aksi }}</p>
                    <p class="text-xs text-gray-400 mt-1 italic">{{ $log->detail }}</p>
                    <p class="text-[10px] text-gray-300 mt-1">{{ $log->created_at->diffForHumans() }}</p>
                </div>
            </div>
            @empty
            <p class="text-sm text-gray-400 italic">Belum ada aktivitas tercatat.</p>
            @endforelse
        </div>
        <a href="{{ route('admin.logs') }}" class="mt-8 block text-center text-[10px] font-bold text-primary border-b border-primary w-fit mx-auto hover:text-highlight hover:border-highlight transition-all italic">
            Lihat Semua Riwayat →
        </a>
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
                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const ctx = document.getElementById('visitorChart').getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(244, 168, 67, 0.4)');
    gradient.addColorStop(1, 'rgba(244, 168, 67, 0.0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Kunjungan',
                data: [450, 600, 520, 850, 780, 1100, 1284],
                borderColor: '#F4A843',
                borderWidth: 4,
                pointBackgroundColor: '#5C2E00',
                pointBorderColor: '#fff',
                pointHoverRadius: 8,
                fill: true,
                backgroundColor: gradient,
                tension: 0.4,
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