@extends('layouts.admin')
@section('title', 'Daftar Pesan Masuk')

@section('content')
<div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-8 border-b border-gray-50 flex flex-col md:flex-row justify-between items-center bg-[#FCFAFA] gap-4">
        <div>
            <h3 class="text-xl font-title font-bold text-primary italic">Kotak Surat Digital</h3>
            <p class="text-xs text-gray-400 mt-1 italic">Database prospek pelanggan Getuk Asri</p>
        </div>

        <div class="flex items-center gap-4">
            <span class="bg-primary/5 text-primary text-[10px] font-bold px-4 py-2 rounded-full border border-primary/10 uppercase tracking-widest">
                Total: {{ $totalPesan }} Pesan
            </span>

            <button onclick="window.print()" class="bg-accent text-white px-5 py-2.5 rounded-full text-[10px] font-bold uppercase tracking-widest hover:opacity-90 transition-all flex items-center gap-2 shadow-sm shadow-accent/20">
                Print Laporan
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-primary text-highlight uppercase text-[10px] font-bold tracking-[0.2em]">
                    <th class="px-8 py-5">Pengirim</th>
                    <th class="px-8 py-5">Subjek</th>
                    <th class="px-8 py-5">Isi Pesan</th>
                    <th class="px-8 py-5 text-right">Tindakan</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                @forelse($pesan as $p)
                <tr class="hover:bg-bgLight/10 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="font-bold text-primary">{{ $p->nama }}</div>
                        <div class="text-[11px] text-gray-400 font-medium">{{ $p->email }}</div>
                    </td>
                    <td class="px-8 py-6">
                        <span class="bg-highlight/10 text-secondary border border-highlight/20 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">
                            {{ $p->subjek }}
                        </span>
                    </td>
                    <td class="px-8 py-6 text-gray-500 italic leading-relaxed">
                        <div class="truncate max-w-xs">
                            "{{ $p->pesan }}"
                        </div>
                    </td>
                    <td class="px-8 py-6 text-right">
                        <button onclick="viewMessage('{{ $p->nama }}', '{{ $p->pesan }}')" class="bg-white border border-primary text-primary px-5 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-sm">
                            Buka Pesan
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-8 py-10 text-center text-gray-400 italic font-medium">Belum ada pesan masuk di kotak surat.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function viewMessage(nama, pesan) {
        Swal.fire({
            title: `<span class="font-title italic text-primary">${nama} Bilang:</span>`,
            text: pesan,
            confirmButtonColor: '#5C2E00',
            confirmButtonText: 'Tutup',
            background: '#F5E6D3',
            color: '#5C2E00',
            borderRadius: '2rem',
            padding: '2rem'
        });
    }
</script>
@endpush