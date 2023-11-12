@extends('layouts.template')

@section('linkcss')
    <link rel="stylesheet" href="resource/css/news">
@endsection

@section('layout_content')
    <div class="container mx-auto py-8 px-40">
        <h3 class=" font-bold text-5xl text-center pb-4 pt-10"> Berita Terkni </h3>
        <h2 class=" text-center pb-8"> Berikut berita terkini mengenai perusahaan kami</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $News)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-auto h-full p-4">
                                <iframe class=" border-lg" width="auto" height="auto" src=" {{ $News['foto'] }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </td>
                            <td class=" p-4">
                                <h2 class="font-bold text-2xl text-white">{{ $News['judul'] }}</h2>
                                <p> {{ $News['deskripsi'] }}</p>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $News['tanggal'] }}
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
