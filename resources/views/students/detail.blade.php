@extends('layouts.main')

@section('container')
    {{ $students['nama'] }}
    {{ $students['tanggal_lahir'] }}
    {{ $students['kelas'] }}
    {{ $students['alamat'] }}

    <a href="/students/all">back</a>
@endsection