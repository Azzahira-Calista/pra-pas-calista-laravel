@extends('layouts.main')

@section('container')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama Ekstrakurikuler</th>
            <th scope="col">Jumlah Anggota</th>
            <th scope="col">Hari Ekstrakurikuler</th>
            <th scope="col">Guru Pembimbing</th>
            <th scope="col">Created at</th>
            <th scope="col">updated at</th>

        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <td>{{ $ekstra['nama_ekstra'] }}</td>
            <td>{{ $ekstra['jumlah_anggota'] }}</td>
            <td>{{ $ekstra['hari_ekstra'] }}</td>
            <td>{{ $ekstra['guru_pembimbing'] }}</td>
            <td> {{ $ekstra['created_at'] }}</td>
            <td> {{ $ekstra['updated_at'] }}</td>

        </tr>
    </tbody>
</table>



    <a href="/Ekstra/ekstra">back</a>
@endsection