@extends('layouts.app')

@section('content')
<div class="container mx-auto py-5">
    <h1 class="text-4xl md:text-4xl font-bold mb-8 text-center">History Permohonan Narasumber</h1>

    <div class="overflow-x-auto mx-10">
        <table class="min-w-full bg-white dark:bg-gray-800 mx-auto">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b-2">No</th>
                    <th class="py-2 px-4 border-b-2">Nama</th>
                    <th class="py-2 px-4 border-b-2">No HP</th>
                    <th class="py-2 px-4 border-b-2">Tempat Kegiatan</th>
                    <th class="py-2 px-4 border-b-2">Jam Mulai</th>
                    <th class="py-2 px-4 border-b-2">Jam Selesai</th>
                    <th class="py-2 px-4 border-b-2">Tanggal</th>
                    <th class="py-2 px-4 border-b-2">Jumlah Peserta</th>
                    <th class="py-2 px-4 border-b-2">Surat Permohonan</th>
                    <th class="py-2 px-4 border-b-2">Keterangan</th>
                    <th class="py-2 px-4 border-b-2">Status</th>
                    <th class="py-2 px-4 border-b-2">Cetak</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $request)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->phone }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->event_place }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->event_start_time }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->event_end_time }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->event_date }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->participants }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ Storage::url($request->request_letter) }}" target="_blank"
                            class="text-blue-600 hover:underline hover:text-blue-400">Lihat Berkas</a>
                    </td>
                    <td class="py-2 px-4 border-b">{{ $request->remarks }}</td>
                    <td class="py-2 px-4 border-b">{{ $request->status == 'processed' ? 'Sudah Diproses' : 'Belum Diproses' }}</td>
                    <td class="py-2 px-4 border-b"><a class="text-blue-600 hover:text-blue-400 hover:underline" href="{{route('permohonan.show', $request->id)}}">Cetak</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mx-10 py-5">
        {{ $requests->links() }}
    </div>
</div>
@endsection
