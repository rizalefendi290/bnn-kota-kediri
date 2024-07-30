@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl py-10 font-black text-gray-900 dark:text-white">Pengaduan Details</h1>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <strong class="text-gray-700 dark:text-gray-300">Nama:</strong>
                <span class="ml-2">{{ $pengaduan->nama }}</span>
            </div>
            <div class="mb-4">
                <strong class="text-gray-700 dark:text-gray-300">Alamat:</strong>
                <span class="ml-2">{{ $pengaduan->alamat }}</span>
            </div>
            <div class="mb-4">
                <strong class="text-gray-700 dark:text-gray-300">No. Handphone:</strong>
                <span class="ml-2">{{ $pengaduan->nomor }}</span>
            </div>
            <div class="mb-4">
                <strong class="text-gray-700 dark:text-gray-300">Tanggal Kejadian:</strong>
                <span class="ml-2">{{ $pengaduan->date }}</span>
            </div>
            <div class="mb-4">
                <strong class="text-gray-700 dark:text-gray-300">Keterangan:</strong>
                <span class="ml-2">{{ $pengaduan->laporan }}</span>
            </div>
            @if($pengaduan->photo)
                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Photo Bukti Kejadian:</strong>
                    <div class="mt-2">
                        <img src="{{ asset('storage/'.$pengaduan->photo) }}" alt="Photo Bukti Kejadian" class="max-w-sm">
                    </div>
                </div>
            @endif

            <div class="flex justify-end mt-6">
                <a href="{{ route('admin.pengaduan.index') }}" class="text-blue-500 hover:underline">Back to List</a>
            </div>
        </div>
    </div>
@endsection
