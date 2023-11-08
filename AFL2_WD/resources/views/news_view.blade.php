@extends('layouts.template')

@section('linkcss')
    <link rel="stylesheet" href="resource/css/news">
@endsection

@section('layout_content')

    <div class="container mx-auto p-8">
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
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $News)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-32 p-4 p-2">
                           {{-- <img src="public/storage/{{ $News['foto'] }}" alt=""> --}}
                           {{-- <img src="public/storage/news_image.jpg" alt=""> --}}
                           <img src="{{asset ('storage/'.$News['foto'])}}" alt="">

                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white p-2">
                            {{ $News['judul'] }}
                        </td>
                        <td class=" p-4 p-2">
                            {{ $News['deskripsi'] }}
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
