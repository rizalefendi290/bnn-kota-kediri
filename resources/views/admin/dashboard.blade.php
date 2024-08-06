@extends('layouts.admin')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-3xl font-bold text-center mb-6">Dashboard Admin</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card for Total Pengaduan -->
        <div class="bg-blue-500 text-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold">Total Pengaduan</h2>
            <p class="text-4xl font-bold mt-2">{{ $totalPengaduan }}</p>
            <p class="mt-2 text-white/80">Jumlah total pengaduan yang diterima.</p>
        </div>

        <!-- Card for Total Permohonan -->
        <div class="bg-green-500 text-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold">Total Permohonan</h2>
            <p class="text-4xl font-bold mt-2">{{ $totalPermohonan }}</p>
            <p class="mt-2 text-white/80">Jumlah total permohonan yang diterima.</p>
        </div>
    </div>

@endsection
