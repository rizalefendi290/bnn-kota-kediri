@extends('layouts.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl py-10 font-black text-gray-900 dark:text-white">Pengaduan Management</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 mb-5 rounded">
                {{ session('success') }}
            </div>
        @endif

                <!-- Filter Form -->
                <div class="mb-8">
                    <form action="{{ route('admin.pengaduan.index') }}" method="GET" class="flex space-x-4">
                        <div>
                            <label for="day" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Day</label>
                            <select name="day" id="day" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-900 dark:text-white">
                                <option value="">All</option>
                                @for($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}" {{ request('day') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>
                            <label for="month" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Month</label>
                            <select name="month" id="month" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-900 dark:text-white">
                                <option value="">All</option>
                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $index => $monthName)
                                    <option value="{{ $index + 1 }}" {{ request('month') == $index + 1 ? 'selected' : '' }}>{{ $monthName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Year</label>
                            <select name="year" id="year" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-900 dark:text-white">
                                <option value="">All</option>
                                @for($i = 2020; $i <= date('Y'); $i++)
                                    <option value="{{ $i }}" {{ request('year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                                Filter
                            </button>
                        </div>
                    </form>
                </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 mx-auto">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">No</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Nama</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Alamat</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Nomor</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Tanggal</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Foto Bukti</th>
                        <th class="py-2 px-4 bg-gray-200 dark:bg-gray-700 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengaduans as $pengaduan)
                        <tr class="border-b dark:border-gray-700">
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->nama }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->alamat }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->nomor }}</td>
                            <td class="py-2 px-4">{{ $pengaduan->date }}</td>
                            <td >
                                <img src="{{Storage::url($pengaduan->photo)}}" width="100">
                            </td>
                            <td class="py-2 px-4">
                                <a href="{{ route('admin.pengaduan.show', $pengaduan->id) }}" class="text-blue-600 hover:underline">View</a>
                                <form action="{{ route('admin.pengaduan.destroy', $pengaduan->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-4 px-6 text-center">No Pengaduan found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
