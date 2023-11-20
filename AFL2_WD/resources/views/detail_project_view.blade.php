@extends('layouts.app')

@section('content')
@foreach ($project->DetailProject as $detail )


    <div class="container">

        <tr>
            <td>{{ $detail->id }}</td>
            <td>{{ $detail->jenis_pekerjaan }}</td>
            <td>{{ $detail->pemberi_pekerjaan }}</td>
            <td>{{ $detail->lokasi }}</td>
            <td>{{ $detail->nomor_telepon }}</td>
            <td>{{ $detail->email }}</td>
            <td>{{ $detail->deskripsi_pekerjaan }}</td>
            <td>
                <img src="{{ asset('storage/' . $detail->foto_dokumentasi) }}" alt="Foto Dokumentasi"
                    style="max-width: 100px; max-height: 100px;">
            </td>
        </tr>
        @endforeach
    </div>
@endsection
