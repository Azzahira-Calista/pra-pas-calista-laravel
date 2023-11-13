@extends('layouts.main')

@section('container')
{{-- isi konten --}}
<h1>This is about page</h1>
<h1>{{ $nama }}</h1>
{{ $kelas }}
<img src="{{ $foto }}" alt="foto" class=" w-8">


@endsection