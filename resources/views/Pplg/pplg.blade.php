@extends('layouts.main')

@section('container')
    <h1>This is class PPLG</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">jumlah murid</th>
                <th scope="col">tahun angkatan</th>
                <th scope="col">kelas</th>
                <th scope="col">wali kelas</th>
                <th scope="col">ketua kelas</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody class=" table-group-divider">
            @foreach ($pplgs as $key => $pplg)
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $pplg["jumlah_murid"] }}</td>
                    <td>{{ $pplg["tahun_angkatan"] }}</td>
                    <td>{{ $pplg["kelas"] }}</td>
                    <td>{{ $pplg["wali_kelas"] }}</td>
                    <td>{{ $pplg["ketua_kelas"] }}</td>
                    <td> <a href="/Pplg/pplgDetail/{{ $pplg->id }}"  type="button" class="btn btn-outline-primary">Detail</a><a type="button" class="btn btn-outline-warning">Edit</a><a type="button" class="btn btn-outline-danger">Delete</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/Pplg/create/">Add class</a>

@endsection