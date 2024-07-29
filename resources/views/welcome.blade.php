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
    <h1 class="text-center text-2xl font-bold my-10">Layanan Kami</h1>
    <div class="flex flex-wrap justify-center gap-6">
        <!-- Pengaduan masyarakat -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('pengaduan.form') }}">
                <img class="rounded-t-lg w-full object-cover h-48" src="{{asset('images/thumbnail/kantor_dalam.jpg')}}"
                    alt="kantor dalam">
            </a>
            <div class="p-5">
                <a href="{{ route('pengaduan.form') }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan Pengaduan
                    </h5>
                </a>
                <a href="{{ route('pengaduan.form') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- permohonan narasumber -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg w-full object-cover h-48" src="{{asset('images/thumbnail/kantor_dalam.jpg')}}"
                alt="kantor dalam">
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Layanan Permohonan
                    Narasumber</h5>
                <!-- Modal toggle -->
                <button data-modal-target="select-modal" data-modal-toggle="select-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Daftar
                </button>

                <!-- Main modal -->
                <div id="select-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Permohonan Narasumber
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="select-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <p class="text-gray-500 dark:text-gray-400 mb-4">Daftar melalui :</p>
                                <ul class="space-y-4 mb-4">
                                    <li>
                                        <a href="{{ route('permohonan_narasumber.index') }}"
                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Website</div>
                                                <div class="w-full text-gray-500 dark:text-gray-400"></div>
                                            </div>
                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdPqg7RNtkkYTxwNE10vnDQtOV8iRm9COZNDz7s4NakpBswpQ/viewform?usp=pp_url"
                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Google Form</div>
                                                <div class="w-full text-gray-500 dark:text-gray-400"></div>
                                            </div>
                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- pengajuan skhpn -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('pengajuan_skhpn.index') }}">
                <img class="rounded-t-lg w-full object-cover h-48" src="{{asset('images/thumbnail/kantor_dalam.jpg')}}"
                    alt="kantor dalam">
            </a>
            <div class="p-5">
                <a href="{{ route('pengajuan_skhpn.index') }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengajuan SKHPN
                    </h5>
                </a>
                <a href="{{ route('pengajuan_skhpn.index') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>


        <div id="controls-carousel" class="relative w-full mt-10" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/thumbnail/thumbnail1.webp')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{asset('images/thumbnail/thumbnail2.jpg')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <h1 class="text-center text-2xl font-bold my-10">Tautan Terkait</h1>
        <div class="mx-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-transparent rounded-lg overflow-hidden text-center">
                <img src="{{asset('images/thumbnail/logo_bnn.png')}}" class="w-full h-36 object-fill" alt="...">
                <div class="p-4 md:p-6">
                    <a href="https://bnn.go.id/"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium md:text-lg inline-flex items-center ">BNN
                        RI</a>
                </div>
            </div>
            <div class="bg-transparent rounded-lg overflow-hidden text-center">
                <img src="{{asset('images/thumbnail/cegah.jpg')}}" class="w-full h-36 object-fill" alt="...">
                <div class="p-4 md:p-6">
                    <a href="https://cegahnarkoba.bnn.go.id/"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-base md:text-lg inline-flex items-center">Cegah
                        Narkoba</a>
                </div>
            </div>
            <div class="bg-transparent rounded-lg overflow-hidden text-center">
                <img src="{{asset('images/thumbnail/stop-narkoba.jpg')}}" class="w-full h-36 object-fill" alt="...">
                <div class="p-4 md:p-6">
                    <a href="https://tokostopnarkoba.bnn.go.id/"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-base md:text-lg inline-flex items-center">Toko
                        Stop Narkoba</a>
                </div>
            </div>
            <div class="bg-transparent rounded-lg overflow-hidden text-center">
                <img src="{{asset('images/thumbnail/logo_bnn.png')}}" class="w-full h-36 object-fill" alt="...">
                <div class="p-4 md:p-6">
                    <a href="https://jatim.bnn.go.id/"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-base md:text-lg inline-flex items-center">BNN
                        Jawa Timur</a>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection