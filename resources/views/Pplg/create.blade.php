@extends('layouts.main')

@section('container')
    <h1>Add Student</h1>
    <form action="/Pplg/store" method="post">
        @csrf
        
        <div class="form-group">
            <label for="jumlah_murid">jumlah murid:</label>
            <input type="number" name="jumlah_murid" id="jumlah_murid" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tahun_angkatan">tahun angkatan:</label>
            <input type="date" name="tahun_angkatan" id="tahun_angkatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kelas">kelas:</label>
            <input type="text" name="kelas" id="kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="wali_kelas">wali kelas:</label>
            <input type="text" name="wali_kelas" id="wali_kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ketua_kelas">ketua kelas:</label>
            <input type="text" name="ketua_kelas" id="ketua_kelas" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add class</button>
    </form>
@endsection