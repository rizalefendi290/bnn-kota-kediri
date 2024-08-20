@extends('layouts.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl py-10 font-black text-gray-900 dark:text-white">Detail Pengaduan</h1>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg dark:bg-gray-800">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Pengaduan Information</h3>
            </div>
            <div class="border-t border-gray-200 dark:border-gray-700">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 dark:bg-gray-900">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">Nama</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">{{ $pengaduan->nama }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 dark:bg-gray-800">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">Alamat</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">{{ $pengaduan->alamat }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 dark:bg-gray-900">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">Nomor</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">{{ $pengaduan->nomor }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 dark:bg-gray-800">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">Tanggal</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">{{ $pengaduan->date }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 dark:bg-gray-900">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">Status</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">{{ ucfirst($pengaduan->status) }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 dark:bg-gray-800">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-200">Foto Bukti</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">
                            <img src="{{ Storage::url($pengaduan->photo) }}" alt="Evidence" class="w-64 h-64 object-cover">
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <div class="mt-5">
            <a href="{{ route('admin.pengaduan.index') }}"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600">
                Back to List
            </a>
        </div>
    </div>
@endsection
