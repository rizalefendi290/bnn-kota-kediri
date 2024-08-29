@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl py-10 font-black text-gray-900 dark:text-white">Complaint History</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-5 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Filter Form -->

        <div class="mb-8">
            <form action="{{ route('history_pengaduan') }}" method="GET" class="flex space-x-4">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Status</label>
                    <select name="status" id="status"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-900 dark:text-white">
                        <option value="">All</option>
                        <option value="belum_diproses" {{ request('status') == 'belum_diproses' ? 'selected' : '' }}>Belum Diproses</option>
                        <option value="proses" {{ request('status') == 'proses' ? 'selected' : '' }}>Proses</option>
                        <option value="sudah_diproses" {{ request('status') == 'sudah_diproses' ? 'selected' : '' }}>Sudah Diproses</option>
                    </select>
                </div>
                <div class="flex items-end space-x-2">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                        Filter
                    </button>
                    <a href="{{ route('history_pengaduan') }}"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600">
                        Reset
                    </a>
                </div>
            </form>
        </div>

        <!-- Complaints Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 mx-auto">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">No</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Nama</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Alamat</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Nomor</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Tanggal</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Status</th>
                        {{-- <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengaduans as $pengaduan)
                        <tr class="border-b dark:border-gray-700">
                            <td class="py-2 px-4">
                                {{ ($pengaduans->currentPage() - 1) * $pengaduans->perPage() + $loop->iteration }}
                            </td>
                            <td class="py-2 px-4">{{ $pengaduan->nama }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->alamat }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->nomor }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->date }}</td>
                            <td class="py-2 px-4">
                                @if ($pengaduan->status == 'belum_diproses')
                                    <span class="text-yellow-600">Belum Diproses</span>
                                @elseif ($pengaduan->status == 'proses')
                                    <span class="text-blue-600">Proses</span>
                                @elseif ($pengaduan->status == 'sudah_diproses')
                                    <span class="text-green-600">Sudah Diproses</span>
                                @endif
                            </td>
                            {{-- <td class="py-2 px-4">
                                <a href="{{ route('admin.pengaduan.show', $pengaduan->id) }}"
                                    class="text-blue-600 hover:underline">View</a>
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-4 px-6 text-center">No Complaints found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $pengaduans->links() }}
        </div>
    </div>
@endsection
