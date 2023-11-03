@extends('template.template')

@section('layout_content')
    <div class="container">

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tentang Kami</th>
                    <th scope="col">Visi</th>
                    <th scope="col">Misi</th>
                    <th scope="col">Sejarah</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp

                @foreach ($company_profile as $CompanyProfile)
                    <tr>
                        <th scope="row">{{ $counter }}</th>
                        <td>{{ $CompanyProfile['tentang_kami'] }}</td>
                        <td>{{ $CompanyProfile['visi'] }}</td>
                        <td>{{ $CompanyProfile['misi'] }}</td>
                        <td>{{ $CompanyProfile['sejarah'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
