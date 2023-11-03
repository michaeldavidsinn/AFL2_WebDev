@extends('template.template')

@section('layout_content')
    <div class="container">

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Pemberi Pekerjaan</th>
                    <th scope="col">Jenis Pekerjaan</th>
                    <th scope="col">Kontak</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp

                @foreach ($project as $Project)
                    <tr>
                        <th scope="row">{{ $counter }}</th>
                        <td>{{ $Project['lokasi'] }}</td>
                        <td>{{ $Project['pemberi_pekerjaan'] }}</td>
                        <td>{{ $Project['jenis_pekerjaan'] }}</td>
                        <td>{{ $Project['kontak'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
