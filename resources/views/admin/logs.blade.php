@extends('layouts.admin')
@section('title', 'Catatan Jejak Digital')

@section('content')
<div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-8 border-b border-gray-50 flex justify-between items-center bg-[#FCFAFA]">
        <div>
            <h3 class="text-xl font-title font-bold text-primary italic">Log Aktivitas Pengelola</h3>
            <p class="text-xs text-gray-400 mt-1 italic">Merekam setiap perubahan yang dilakukan pada sistem Getuk Asri</p>
        </div>
        <form action="{{ route('admin.logs.clear') }}" method="POST"
              onsubmit="return confirm('Yakin ingin menghapus semua log?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-[10px] font-bold text-red-400 uppercase tracking-widest hover:text-red-600 transition-all">
                Bersihkan Riwayat
            </button>
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-primary text-highlight uppercase text-[10px] font-bold tracking-[0.2em]">
                    <th class="px-8 py-5">Waktu & Tanggal</th>
                    <th class="px-8 py-5">Aksi / Perubahan</th>
                    <th class="px-8 py-5">Pengelola</th>
                    <th class="px-8 py-5">Status</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                @forelse($logs as $log)
                <tr class="hover:bg-bgLight/5 transition-colors">
                    <td class="px-8 py-6">
                        <div class="font-bold text-primary">{{ $log->created_at->translatedFormat('d F Y') }}</div>
                        <div class="text-[10px] text-gray-400">{{ $log->created_at->format('H:i') }} WIB</div>
                    </td>
                    <td class="px-8 py-6">
                        <div class="text-primary font-medium">{{ $log->aksi }}</div>
                        <div class="text-[10px] text-gray-400 italic">{{ $log->detail }}</div>
                    </td>
                    <td class="px-8 py-6 font-bold text-primary">{{ $log->pengelola }}</td>
                    <td class="px-8 py-6">
                        @php
                            $badge = match($log->status) {
                                'berhasil' => 'bg-green-50 text-green-600 border-green-100',
                                'selesai'  => 'bg-blue-50 text-blue-600 border-blue-100',
                                'update'   => 'bg-highlight/10 text-secondary border-highlight/20',
                                'gagal'    => 'bg-red-50 text-red-500 border-red-100',
                                default    => 'bg-gray-50 text-gray-500 border-gray-100',
                            };
                        @endphp
                        <span class="border px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter {{ $badge }}">
                            {{ ucfirst($log->status) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-8 py-12 text-center text-gray-400 italic font-medium">
                        Belum ada aktivitas yang tercatat.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="p-6 bg-[#FCFAFA] border-t border-gray-50 flex justify-between items-center">
        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em]">
            Menampilkan {{ $logs->count() }} dari {{ $logs->total() }} Log
        </p>
        {{ $logs->links() }}
    </div>
</div>
@endsection