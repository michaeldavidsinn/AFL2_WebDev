@extends('layouts.template')

@section('linkcss')
    <link rel="stylesheet" href="resources/css/company_profile.css">
@endsection
@section('layout_content')
    <div class="max-w-full z-0">
        <script src="resources/js/company_profile.js"></script>
        <div id="default-carousel" class="relative w-full " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative block h-96 overflow-hidden lg:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-70 ease-in-out" data-carousel-item>
                    <img src="resources/image/Orang_pabrik.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Pegawai Pabrik">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-70 ease-in-out" data-carousel-item>
                    <img src="resources/image/Pabrik_Drone.jpg"class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Seluruh Pabrik">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-70 ease-in-out" data-carousel-item>
                    <img src="resources/image/Ruangan_Pabrik.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Pabrik">
                </div>

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>

            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        {{-- isi konten --}}

        <div class="md:px-44 py-9 lg:px-80 py-9">
            @foreach ($company_profile as $CompanyProfile)
                <div class="flex items-center justify-between mx-auto w-full">
                    <img class="h-56 w-56"src="resources/image/Kerkom.jpg" alt="Foto Kelompok Pegawai Mengerjakan Projek">
                    <div class="px-4 w-full ml-auto">
                        <h3 class="p-2 font-bold text-5xl"> Tentang Kami </h3>
                        <h2 class="p-2 ">{{ $CompanyProfile['tentang_kami'] }}</h2>
                    </div>
                </div>
        </div>
        <div class="w-full h-96 relative bg-cover bg-center" style="background-image: url('resources/image/Orang_pabrik.jpg'); ">">
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
                    <h2 class="p-2">{{ $CompanyProfile['misi'] }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-auto relative bg-cover bg-center h-56" style="background-image: url('resources/image/Pabrik_Drone.jpg'); ">">
        <div class="md:px-44 py-9 lg:px-80 py-9">
            <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                     <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/Kerkom.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="resources/image/pegawaikerja.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/logolama.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/teamwork.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gambar Sejarah Company">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="resources/image/bangunankantorbaru.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                </div>
                <div class="flex justify-center items-center pt-4">
                    <button type="button" class="flex justify-center items-center mr-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class=" rounded-lg bg-white bg-opacity-90 text-center">
                <h3 class="p-2 font-bold text-5xl"> Sejarah </h3>
                <h2 class="p-2">{{ $CompanyProfile['sejarah'] }}</h2>
            </div>
        </div>
    </div>
    <div class="px-80 py-9">
        @endforeach
    </div>
    </div>
@endsection
