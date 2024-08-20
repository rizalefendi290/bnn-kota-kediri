@extends('layouts.admin')
@section('content')
    <div class="container mx-auto py-5">
        <h1 class="text-4xl md:text-4xl font-bold mb-8 text-center">Data Permohonan Narasumber</h1>
        <form action="{{ route('admin.laporan_narasumber') }}" method="GET" class="mb-6">
            <div class="flex flex-wrap justify-center items-center gap-4">
                <!-- Input Nama -->
                <div class="relative z-0 w-full md:w-1/2 mb-5 group">
                    <label for="name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nama
                    </label>
                    <input type="text" id="name" name="name" value="{{ request('name') }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="Masukkan nama">
                </div>

                <!-- Input Bulan -->
                <div class="relative z-0 w-full md:w-1/4 mb-5 group">
                    <label for="month"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Bulan
                    </label>
                    <input type="text" inputmode="numeric" id="month" name="month" value="{{ request('month') }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>

                <!-- Input Tahun -->
                <div class="relative z-0 w-full md:w-1/4 mb-5 group">
                    <label for="year"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Tahun
                    </label>
                    <input type="text" inputmode="numeric" id="year" name="year" value="{{ request('year') }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="Masukkan tahun">
                </div>

                <!-- Tombol Aksi -->
                <div class="flex gap-2 justify-center items-center w-full">
                    <button type="submit"
                        class="inline-flex justify-center items-center mt-5 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Filter
                    </button>
                    <a href="{{ route('admin.laporan_narasumber') }}"
                        class="inline-flex justify-center items-center mt-5 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900">
                        Reset Filter
                    </a>
                    <a href="{{ route('admin.laporan_narasumber.cetak', request()->query()) }}"
                        class="inline-flex justify-center items-center mt-5 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                        Cetak PDF
                    </a>
                </div>
            </div>
        </form>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 mx-auto">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">No</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Nama</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">No HP</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Tempat Kegiatan</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Jam Mulai</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Tanggal</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Surat Permohonan</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Status</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left border-b-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan_narasumbers as $laporan_narasumber)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b">{{ $laporan_narasumber->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $laporan_narasumber->phone }}</td>
                            <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_place }}</td>
                            <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_start_time }}</td>
                            <td class="py-2 px-4 border-b">{{ $laporan_narasumber->event_date }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ Storage::url($laporan_narasumber->request_letter) }}" target="_blank"
                                    class="text-blue-500 hover:underline">Lihat Berkas</a>
                            </td>
                            <td class="py-2 mt-10 px-4 border-b flex items-center justify-center">
                                <form
                                    action="{{ route('admin.laporan_narasumber.updateStatus', $laporan_narasumber->id) }}"
                                    method="POST" class="w-full">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()"
                                        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option value="unprocessed"
                                            {{ $laporan_narasumber->status == 'unprocessed' ? 'selected' : '' }}>Belum
                                            Diproses
                                        </option>
                                        <option value="processed"
                                            {{ $laporan_narasumber->status == 'processed' ? 'selected' : '' }}>Sudah
                                            Diproses
                                        </option>
                                    </select>
                                </form>
                                @if ($laporan_narasumber->status == 'processed')
                                    <svg class="w-10 h-10 text-green-500 ml-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"></path>
                                    </svg>
                                @endif
                            </td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex justify-start items-center gap-4">
                                    <a href="{{ route('permohonan.show', $laporan_narasumber->id) }}"
                                        class="text-green-500 hover:underline">
                                        Lihat Detail
                                    </a>
                                    <form action="{{ route('permohonan.destroy', $laporan_narasumber->id) }}"
                                        method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn text-red-500 hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-center">
            {{ $laporan_narasumbers->appends(request()->except('page'))->links() }}
        </div>
    </div>

    <!-- SweetAlert Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Alert for status update

            // Confirmation before delete
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            button.closest('form').submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
