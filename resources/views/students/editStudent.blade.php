@extends('layouts.main')

@section('container')
    <h1>Edit Student</h1>
    <form action="/students/{{ $student->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nis">Nis:</label>
            <input type="text" name="nis" id="nis" class="form-control" value="{{ $student->nis }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $student->nama }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $student->tanggal_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="kelas">Class:</label>
            <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $student->kelas }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $student->alamat }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update student data</button>
    </form>
    <a href="/students/all">back</a>

@endsection
