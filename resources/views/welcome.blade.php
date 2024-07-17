@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div id="custom-controls-gallery" class="relative w-full mt-5" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out relative w-full h-full" data-carousel-item>
                <img src="{{asset('images/thumbnail/kantor_depan.jpg')}}"
                    class="absolute inset-0 w-full h-full object-cover" alt="kantor depan">
                <img src="{{asset('images/thumbnail/logo_bnn.png')}}"
                    class="absolute max-w-[25%] md:max-w-[15%] h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="logo bnn">
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto mt-10 px-4 mb-20">
    <div class="flex flex-wrap justify-center gap-6">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full object-cover h-48" src="{{asset('images/thumbnail/kantor_dalam.jpg')}}" alt="kantor dalam">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan Pengaduan</h5>
                </a>
                <a href="{{route('frontend.pengaduan')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full object-cover h-48" src="{{asset('images/thumbnail/kantor_dalam.jpg')}}" alt="kantor dalam">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Layanan Permohonan Narasumber</h5>
                </a>
                <a href="{{route('frontend.permohonan')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
