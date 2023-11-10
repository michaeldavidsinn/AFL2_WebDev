@extends('layouts.app')

@section('content')
    <div class="container">

        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->jenis_pekerjaan }}</td>
            <td>{{ $project->pemberi_pekerjaan }}</td>
            <td>{{ $project->lokasi }}</td>
            <td>{{ $project->nomor_telepon }}</td>
            <td>{{ $project->email }}</td>
            <td>{{ $project->deskripsi_pekerjaan }}</td>
            <td>
                <img src="{{ asset('storage/' . $project->foto_dokumentasi) }}" alt="Foto Dokumentasi"
                    style="max-width: 100px; max-height: 100px;">
            </td>
        </tr>

    </div>
@endsection
