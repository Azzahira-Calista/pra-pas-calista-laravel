@extends('layouts.main')

@section('container')
    <h1>Daftar Ekstrakurikuler</h1>

    <table class="table">
        <thead>
            <tr>
                <th  scope="col">No</th>
                <th  scope="col">Jumlah Anggota</th>
                <th scope="col">Nama Ekstrakurikuler</th>
                <th scope="col">Hari Ekstrakurikuler</th>
                <th scope="col">Guru Pembimbing</th>
                
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($ekstras as $key => $data)
            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $data->nama_ekstra }}</td>
                <td>{{ $data->jumlah_anggota }}</td>
                <td>{{ $data->hari_ekstra }}</td>
                <td>{{ $data->guru_pembimbing }}</td>
                <td> <a href="/Ekstra/ekstraDetail/{{ $data->id }}"  type="button" class="btn btn-outline-primary">Detail</a><a type="button" class="btn btn-outline-warning">Edit</a><a type="button" class="btn btn-outline-danger">Delete</a> </td>

            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

