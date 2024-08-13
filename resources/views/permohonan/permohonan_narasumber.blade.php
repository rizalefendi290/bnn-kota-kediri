@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb Navigation -->
    <nav class="flex mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M19.707 9.293l-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414z"/>
                    </svg>
                    Beranda
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4"/>
                    </svg>
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Permohonan</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Permohonan Narasumber</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Success Message -->
    @if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- Main Content -->
    <h1 class="text-center text-4xl font-extrabold text-gray-900 dark:text-white mb-8">Permohonan Narasumber</h1>

    <div class="max-w-2xl mx-auto bg-transparent shadow-md rounded-lg p-8">
        <form id="requestForm" action="{{ route('submit.request') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Name Input -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama</label>
                <input type="text" id="name" name="name" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500" placeholder="Masukkan nama Anda">
            </div>

            <!-- Phone Input -->
            <div class="mb-6">
                <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">No HP</label>
                <input type="text" id="phone" name="phone" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500" placeholder="Masukkan nomor HP Anda">
            </div>

            <!-- Event Place Input -->
            <div class="mb-6">
                <label for="event_place" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tempat Kegiatan</label>
                <input type="text" id="event_place" name="event_place" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500" placeholder="Masukkan tempat kegiatan">
            </div>

            <!-- Event Start Time Input -->
            <div class="mb-6">
                <label for="event_start_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Jam Kegiatan Mulai</label>
                <input type="time" id="event_start_time" name="event_start_time" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500">
            </div>

            <!-- Event End Time Input -->
            <div class="mb-6">
                <label for="event_end_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Jam Kegiatan Selesai</label>
                <input type="time" id="event_end_time" name="event_end_time" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500">
            </div>

            <!-- Event Date Input -->
            <div class="mb-6">
                <label for="event_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tanggal Kegiatan</label>
                <input type="date" id="event_date" name="event_date" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500">
            </div>

            <!-- Participants Input -->
            <div class="mb-6">
                <label for="participants" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Jumlah Peserta</label>
                <input type="number" id="participants" name="participants" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500" placeholder="Masukkan jumlah peserta">
            </div>

            <!-- Request Letter Input -->
            <div class="mb-6">
                <label for="request_letter" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Upload File PDF Surat Permohonan</label>
                <input type="file" id="request_letter" name="request_letter" accept=".pdf" required class="block w-full text-sm text-gray-900 bg-transparent border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500">
            </div>

            <!-- Remarks Input -->
            <div class="mb-6">
                <label for="remarks" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Catatan</label>
                <textarea id="remarks" name="remarks" rows="4" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:focus:ring-blue-500" placeholder="Masukkan catatan jika ada"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500">Kirim Permohonan</button>
        </form>
    </div>
</div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</script>
@endsection
@endsection
