@extends('layouts.main')

@section('container')
    <h1>Add Student</h1>
    <form action="/students/store" method="post">
        @csrf
        
        <div class="form-group">
            <label for="nis">Nis:</label>
            <input type="number" name="nis" id="nis" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kelas">Class:</label>
            <input type="text" name="kelas" id="kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
@endsection