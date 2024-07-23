@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <main class="container mx-auto p-0 page-wrapper">
        <section
            class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid gap-8 lg:gap-16">
                <div class="flex flex-col justify-center items-center text-center">
                    <h1
                        class="mb-4 text-xl flex font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                        Permohonan Pengajuan Materi dan Pengajuan SKHPN</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl dark:text-gray-400">Here at Flowbite we
                        focus on markets where technology, innovation, and capital can unlock long-term value and drive
                        economic growth.</p>
                </div>
        </section>
        <section>
            <div class="mx-auto px-5 my-10">
                <div class="flex flex-wrap justify-center gap-10">
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('permohonan_narasumber.index') }}">
                            <img class="rounded-t-lg w-full object-cover h-48"
                                src="{{ asset('images/thumbnail/kantor_dalam.jpg') }}" alt="kantor dalam">
                        </a>
                        <div class="p-5 ">
                            <a href="{{ route('permohonan_narasumber.index') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Layanan Permohonan Narasumber</h5>
                            </a>
                            <button href="{{ route('permohonan_narasumber.index') }}"
                                class="inline-flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('pengajuan_skhpn.index') }}">
                            <img class="rounded-t-lg w-full object-cover h-48"
                                src="{{ asset('images/thumbnail/kantor_dalam.jpg') }}" alt="kantor dalam">
                        </a>
                        <div class="p-5">
                            <a href="{{ route('pengajuan_skhpn.index') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengajuan SKHPN</h5>
                            </a>
                            <a href="{{ route('pengajuan_skhpn.index') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex flex-norap">
                <a href="#"
                    class="items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/docs/images/blog/image-4.jpg" alt="">
                    <div class="justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#"
                    class=" items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/docs/images/blog/image-4.jpg" alt="">
                    <div class="justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#"
                    class=" items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/docs/images/blog/image-4.jpg" alt="">
                    <div class="justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
            </div>
        </section>
    </main>
</div>
@endsection