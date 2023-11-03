@extends('template.template')

@section('layout_content')
    <div class="container">

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp

                @foreach ($news as $News)
                    <tr>
                        <th scope="row">{{ $counter }}</th>
                        <td>{{ $News['judul'] }}</td>
                        <td>{{ $News['deskripsi'] }}</td>
                        <td>{{ $News['foto'] }}</td>
                        <td>{{ $News['tanggal'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
