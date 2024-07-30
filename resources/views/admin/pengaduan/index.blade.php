@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl py-10 font-black text-gray-900 dark:text-white">Pengaduan Management</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 mb-5 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800">
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
                                <img src="{{Storage::url($pengaduan->photo)}}" width="200">
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
