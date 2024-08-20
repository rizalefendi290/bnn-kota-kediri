<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Kediri Bersinar', 'Kediri Bersinar') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/thumbnail/logo_bnn.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    @media print {
        body {
            font-size: 12pt;
        }

        .no-print {
            display: none;
        }

        .printable-area {
            width: 100%;
        }
    }

    /* Custom z-index for dropdown */
    .dropdown-menu {
        z-index: 9999;
    }

    .carousel,
    .other-elements {
        z-index: 1;
    }
    </style>
</head>

<body id="app" class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-screen-xl mx-auto p-4 flex flex-wrap items-center justify-between">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/thumbnail/logo_bnn.png') }}" class="h-10" alt="BNN Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Kediri
                    Bersinar</span>
            </a>
            <button type="button"
                class="inline-flex items-center p-2 text-gray-500 rounded-lg md:hidden hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false" data-collapse-toggle="navbar-default">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 5h16a1 1 0 010 2H2a1 1 0 010-2zm0 4h16a1 1 0 010 2H2a1 1 0 010-2zm0 4h16a1 1 0 010 2H2a1 1 0 010-2z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Navbar Links -->
            <div class="hidden w-full md:flex md:items-center md:justify-center md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col md:flex-row md:space-x-6 rtl:space-x-reverse mt-4 md:mt-0 md:text-sm md:font-medium">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item list-none">
                        <!-- Modal toggle -->
                        <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="nav-link text-gray-700 dark:text-white hover:text-blue-500">
                            Login
                        </a>

                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Login
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <!-- Menyertakan CSRF token -->
                                            <div>
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Email</label>
                                                <input type="email" name="email" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="email@gmail.com" required />
                                            </div>
                                            <div>
                                                <label for="password"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Password</label>
                                                <input type="password" name="password" id="password"
                                                    placeholder="••••••••"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required />
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="remember" name="remember" type="checkbox"
                                                            value="true"
                                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                                    </div>
                                                    <label for="remember"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingat
                                                        Kata Sandi</label>
                                                </div>
                                                <a href="{{ route('password.request') }}"
                                                    class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa
                                                    Password?</a>
                                            </div>
                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                Tidak mempunyai akun? <a href="{{ route('register') }}"
                                                    class="text-blue-700 hover:underline dark:text-blue-500">Buat
                                                    Akun</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item list-none">
                        <!-- Modal toggle -->
                        <a href="#" data-modal-target="register-modal" data-modal-toggle="register-modal"
                            class="nav-link text-gray-700 dark:text-white hover:text-blue-500">
                            Daftar Akun
                        </a>

                        <!-- Register Modal -->
                        <div id="register-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Daftar Akun
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="register-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div>
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Nama Lengkap</label>
                                                <input type="text" name="name" id="name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Nama Lengkap" required />
                                            </div>
                                            <div>
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Email</label>
                                                <input type="email" name="email" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="email@gmail.com" required />
                                            </div>
                                            <div>
                                                <label for="password"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Password</label>
                                                <input type="password" name="password" id="password"
                                                    placeholder="••••••••"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required />
                                            </div>
                                            <div>
                                                <label for="password_confirmation"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Konfirmasi Password</label>
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation" placeholder="••••••••"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required />
                                            </div>
                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
                                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                Sudah punya akun? <a href="{{ route('login') }}"
                                                    class="text-blue-700 hover:underline dark:text-blue-500">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @else
                    <li class="nav-item list-none">
                        <a class="nav-link text-gray-700 dark:text-white hover:text-blue-500" href="/">Beranda</a>
                    </li>
                    <!-- History Dropdown -->
                    <li class="nav-item list-none relative">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="bg-transparent text-gray-700 dark:text-white hover:text-blue-600 focus:outline-none font-medium rounded-lg text-sm px-0 text-center inline-flex items-center dark:bg-transparent"
                            type="button">
                            History
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdown"
                            class="dropdown-menu z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ route('history_permohonan_narasumber') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat
                                        Permohonan Narasumber</a>
                                </li>
                                <li>
                                    <a href="{{route('history_pengaduan')}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat
                                        Laporan Pengaduan</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat
                                        Pengajuan SKHPN</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item list-none relative">
                        <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2"
                            class="text-gray-700 dark:text-white bg-transparent hover:text-blue-600 focus:outline-none font-medium rounded-lg text-sm px-0 text-center inline-flex items-center dark:bg-transparent"
                            type="button">
                            {{auth()->user()->name}}
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdown2"
                            class="dropdown-menu2 z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton2">
                                @if(auth()->user() && auth()->user()->isAdmin())
                                <li class="nav-item list-none">
                                    <a href="{{ route('admin_dashboard') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin
                                        Dashboard</a>
                                </li>
                                <li>
                                    @endif
                                </li>
                                <li>
                                    <a href="{{ route('profile.edit') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit
                                        Profile</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-red-300 text-red-600 dark:text-red-400"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-6">
        @yield('content')
    </main>


    <footer class="dark:bg-gray-800 dark:border-gray-600">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="ms-20 grid grid-cols-1 gap-8 px-4 py-6 lg:py-8 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Kontak</h2>
                    <ul class="text-gray-600 dark:text-gray-300 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">Badan Narkotika Nasional</a>
                        </li>
                        <li class="mb-4 flex">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="hover:underline text-sm">Jl. Selomangleng No.03 Kel.Pojok Kec.Mojoroto
                                Kota
                                Kediri</p>
                        </li>
                        <li class="mb-4 flex">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                            </svg>

                            <p class="hover:underline text-sm">Call Center: 184</p>
                        </li>
                        <li class="mb-4 flex">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                            </svg>

                            <p class="hover:underline">+62 (21) 8087-1566 | +62 (21) 8087-1567</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tautan Terkait</h2>
                    <ul class="text-gray-600 dark:text-gray-300 font-medium">
                        <li class="mb-4 flex">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                                    clip-rule="evenodd" />
                                <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
                            </svg>
                            <a href="https://bnn.go.id/" class="hover:underline">BNN Pusat</a>
                        </li>
                        <li class="mb-4 flex">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="https://ppid.bnn.go.id/" class="hover:underline">Layanan Informasi Publik
                                (PPID)</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa fa-balance-scale w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"
                                aria-hidden="true"></i>
                            <a href="https://jdih.bnn.go.id/" class="hover:underline">Layanan Informasi Hukum (JDIH)</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-stethoscope w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://rehabilitasi.bnn.go.id/public/" class="hover:underline">Layanan
                                Rehabilitasi</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-book w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://perpustakaan.bnn.go.id/" class="hover:underline">Perpustakaan Digital</a>
                        </li>
                        <li class="mb-4 flex">
                            <i
                                class="fa-solid fa-up-right-from-square w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/gpr-kominfo/" class="hover:underline">Government
                                Public Relations</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-cart-shopping w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://tokostopnarkoba.bnn.go.id/" class="hover:underline">Toko Stop Narkoba</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Unit Kerja</h2>
                    <ul class="text-gray-600 dark:text-gray-300 font-medium">
                        <li class="mb-4 flex">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-300 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                                    clip-rule="evenodd" />
                                <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
                            </svg>
                            <a href="https://kedirikota.bnn.go.id/berita/" class="hover:underline">Bidang Umum</a>
                        </li>
                        <li class="mb-4 flex">
                            <i
                                class="fa-solid fa-triangle-exclamation w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/pencegahan/" class="hover:underline">Bidang Pencegahan
                                dan Pemberdayaan Masyarakat</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-suitcase-medical w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/rehabilitasi/" class="hover:underline">Bidang
                                Rehabilitasi</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-eye w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/pemberantasan/" class="hover:underline">Bidang
                                Pemberantasan</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Publikasi & Pers</h2>
                    <ul class="text-gray-600 dark:text-gray-300 font-medium">
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-newspaper w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/siaran-pers/" class="hover:underline">Siaran Pers</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-clipboard w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/berita-kegiatan/" class="hover:underline">Berita
                                Kegiatan</a>
                        </li>
                        <li class="mb-4 flex">
                            <i class="fa-solid fa-newspaper w-6 h-6 text-gray-600 dark:text-gray-300 mr-2"></i>
                            <a href="https://kedirikota.bnn.go.id/artikel/" class="hover:underline">Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <footer
        class="w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <div class="text-center md:text-left md:w-auto">
            <span class="text-sm text-gray-500 dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Pelayanan
                    dan Pengaduan BNN Kota Kediri</a>. All Rights Reserved.</span>
        </div>
        <ul
            class="flex flex-wrap items-center justify-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 md:mt-0 md:flex md:justify-end">
            <li class="me-4 md:me-6">
                <a href="https://kedirikota.bnn.go.id/" class="hover:underline">Kunjungi web resmi kami</a>
            </li>
            <li>
                <a href="https://kedirikota.bnn.go.id/kontak/" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>

    <!-- Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const printButton = document.getElementById('printButton');

        printButton.addEventListener('click', function() {
            window.print();
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.getElementById('requestForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get form data
        const formData = new FormData(this);

        // Send AJAX request
        fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Optionally, redirect or clear the form
                        window.location.href = '/';
                    });
                } else {
                    Swal.fire({
                        title: 'Gagal!',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Terjadi Kesalahan!',
                    text: 'Gagal mengirim permohonan. Silakan coba lagi nanti.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
    });
    </script>
</body>

</html>
