@extends('layouts.admin')
@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold mb-8">Data Permohonan</h1>
    <table class="min-w-full bg-white dark:bg-gray-800">
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
            @foreach($submissions as $submission)
            <tr>
                <td class="py-2 px-4 border-b">{{ $submission->name }}</td>
                <td class="py-2 px-4 border-b">{{ $submission->phone }}</td>
                <td class="py-2 px-4 border-b">{{ $submission->event_place }}</td>
                <td class="py-2 px-4 border-b">{{ $submission->event_start_time }}</td>
                <td class="py-2 px-4 border-b">{{ $submission->event_end_time }}</td>
                <td class="py-2 px-4 border-b">{{ $submission->event_date }}</td>
                <td class="py-2 px-4 border-b">{{ $submission->participants }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ Storage::url($submission->request_letter) }}" target="_blank"
                        class="text-blue-500 hover:underline">Lihat PDF</a>
                </td>
                <td class="py-2 px-4 border-b">{{ $submission->remarks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection