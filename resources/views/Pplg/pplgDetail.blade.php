@extends('layouts.main')

@section('container')
<table class="table">
    <thead>
        <tr>
            <th scope="col">jumlah murid</th>
            <th scope="col">tahun angkatan</th>
            <th scope="col">kelas</th>
            <th scope="col">wali_kelas</th>
            <th scope="col">ketua kelas</th>
            <th scope="col">Created at</th>
            <th scope="col">updated at</th>

        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <td>{{ $pplgs['jumlah_murid'] }}</td>
            <td>{{ $pplgs['tahun_angkatan'] }}</td>
            <td>{{ $pplgs['kelas'] }}</td>
            <td>{{ $pplgs['wali_kelas'] }}</td>
            <td>{{ $pplgs['ketua_kelas'] }}</td>
            <td> {{ $pplgs['created_at'] }}</td>
            <td> {{ $pplgs['updated_at'] }}</td>


        </tr>
    </tbody>

</table>
   
    <a href="/Pplg/pplg">back</a>
@endsection
