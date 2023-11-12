@extends('layouts.template')

@section('linkcss')
    <link rel="stylesheet" href="resources/css/company_profile.css">
@endsection
@section('layout_content')
    <div class="max-w-full z-0">
        <script src="resources/js/company_profile.js"></script>
        <video class="w-full h-auto max-w-full" autoplay controls>
            <source src="resources/image/Company_Profile.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    {{-- isi konten --}}

    <div class="md:px-40 pt-9 lg:px-80 pt-9">
        <div class="w-full h-auto relative bg-cover bg-center">
            <img src="resources/image/logo_full_company.png" class="h-full w-full pt-12 pb-20 justify-center"
                alt="Company Logo" />
        </div>
        @foreach ($company_profile as $CompanyProfile)
            <div class="flex items-center justify-between mx-auto w-full">
                <img class="h-56 w-56"src="resources/image/Kerkom.jpg" alt="Foto Kelompok Pegawai Mengerjakan Projek">
                <div class="px-4 w-full ml-auto">
                    <h3 class="p-2 font-bold text-5xl"> Tentang Kami </h3>
                    <h2 class="p-2 ">{{ $CompanyProfile['tentang_kami'] }}</h2>
                    <h2 class="p-2 ">{{ $CompanyProfile['tentang_kami1'] }}</h2>
                </div>
            </div>
            <h3 class=" font-bold text-5xl text-center pb-8 pt-10"> Layanan Kami </h3>
    </div>
    <div class="md:px-10 pb-10 lg:px-30 pb-10 flex space-x-4 items-center">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <img class="rounded-t-lg" src="resources/image/layanan1.jpg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $CompanyProfile['layanan_judul1'] }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $CompanyProfile['layanan_deskripsi1'] }}
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class=" max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg " src="resources/image/layanan2.jpg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $CompanyProfile['layanan_judul2'] }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $CompanyProfile['layanan_deskripsi2'] }}
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="resources/image/layanan3.jpg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $CompanyProfile['layanan_judul3'] }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $CompanyProfile['layanan_deskripsi3'] }}
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <img class="rounded-t-lg" src="resources/image/layanan4.jpg" alt="" />

            <div class="p-5">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $CompanyProfile['layanan_judul4'] }}</h5>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $CompanyProfile['layanan_deskripsi4'] }}
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
    <div class="w-full h-96 relative bg-cover bg-center"
        style="background-image: url('resources/image/Orang_pabrik.jpg'); ">">
        <img src="" alt="">
    </div>
    <div class="md:px-44 py-9 lg:px-80 py-9">
        <div class="flex items-center justify-between mx-auto w-full">
            <div class="w-full ml-auto text-right px-4">
                <h3 class="p-2 font-bold text-5xl "> Visi </h3>
                <h2 class="p-2 ">{{ $CompanyProfile['visi'] }}</h2>
            </div>
            <img class="h-56 w-56"src="resources/image/halamanluar.jpg" alt="Foto Halaman Luar Kantor">
        </div>
        <div class="flex items-center justify-between mx-auto w-full">
            <img class="h-56 w-56"src="resources/image/ruangankantor.jpg" alt="Foto Kelompok Pegawai Mengerjakan Projek">
            <div class="px-4 w-full ml-auto">
                <h3 class="p-2 font-bold text-5xl"> Misi </h3>
                <h2 class="p-2 font-bold">1.{{ $CompanyProfile['misi_judul1'] }} :</h2>
                <p class="pe-2 ps-5">{{ $CompanyProfile['misi_deskripsi1'] }}</p>
                <h2 class="p-2 font-bold">2.{{ $CompanyProfile['misi_judul2'] }} :</h2>
                <p class="pe-2 ps-5">{{ $CompanyProfile['misi_deskripsi2'] }}</p>
                <h2 class="p-2 font-bold">3.{{ $CompanyProfile['misi_judul3'] }} :</h2>
                <p class="pe-2 ps-5">{{ $CompanyProfile['misi_deskripsi3'] }}</p>
                <h2 class="p-2 font-bold">4.{{ $CompanyProfile['misi_judul4'] }} :</h2>
                <p class="pe-2 ps-5">{{ $CompanyProfile['misi_deskripsi4'] }}</p>
            </div>
        </div>
    </div>
    </div>
    <div class="w-full h-auto relative bg-cover bg-center h-56"
        style="background-image: url('resources/image/Pabrik_Drone.jpg'); ">">
        <div class="md:px-44 py-9 lg:px-80 py-9">
            <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/Kerkom.jpg"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="resources/image/pegawaikerja.jpg"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/logolama.jpg"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/teamwork.jpg"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/bangunankantorbaru.jpg"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="">
                    </div>
                </div>
                <div class="flex justify-center items-center pt-4">
                    <button type="button"
                        class="flex justify-center items-center mr-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="  p-6 pb-10 rounded-lg bg-white bg-opacity-90 text-center">
                <h3 class="p-2 font-bold text-5xl"> Sejarah </h3>
                <h2 class="p-2">{{ $CompanyProfile['sejarah'] }}</h2>
                <h2 class="p-2">{{ $CompanyProfile['sejarah1'] }}</h2>
                <h2 class="p-2">{{ $CompanyProfile['sejarah2'] }}</h2>
                <h2 class="p-2">{{ $CompanyProfile['sejarah3'] }}</h2>
            </div>
        </div>
    </div>
    <div class="px-80 py-9">
        @endforeach
    </div>
    </div>
@endsection
