@extends('layouts.admin')
@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold mb-8 text-center">Data Permohonan</h1>
    <div class="overflow-x-auto">
    <table class="min-w-full bg-white dark:bg-gray-800 mx-auto">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b-2">Nama</th>
                <th class="py-2 px-4 border-b-2">No HP</th>
                <th class="py-2 px-4 border-b-2">Tempat Kegiatan</th>
                <th class="py-2 px-4 border-b-2">Jam Mulai</th>
                <th class="py-2 px-4 border-b-2">Jam Selesai</th>
                <th class="py-2 px-4 border-b-2">Tanggal</th>
                <th class="py-2 px-4 border-b-2">Jumlah Peserta</th>
                <th class="py-2 px-4 border-b-2">Surat Permohonan</th>
                <th class="py-2 px-4 border-b-2">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan_narasumbers as $laporan_narasumber)
            <tr>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->name }}</td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->phone }}</td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_place }}</td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_start_time }}</td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_end_time }}</td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_date }}</td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->participants }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ Storage::url($laporan_narasumber->request_letter) }}" target="_blank"
                        class="text-blue-500 hover:underline">Lihat Berkas</a>
                </td>
                <td class="py-2 px-4 border-b">{{ $laporan_narasumber->remarks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</div>
@endsection