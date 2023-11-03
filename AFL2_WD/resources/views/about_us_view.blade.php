@extends('template.template')

@section('layout_content')
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jam Kerja</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp

                @foreach ($about_us as $AboutUs)
                    <tr>
                        <th scope="row">{{ $counter }}</th>
                        <td>{{ $AboutUs['alamat'] }}</td>
                        <td>{{ $AboutUs['nomor_telepon'] }}</td>
                        <td>{{ $AboutUs['email'] }}</td>
                        <td>{{ $AboutUs['jam_kerja'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    

    </div>
@endsection
