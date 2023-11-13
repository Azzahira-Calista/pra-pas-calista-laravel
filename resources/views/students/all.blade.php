@extends('layouts.main')

@section('container')
    <h1>This is student page</h1>
    <table class="table">
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">NIS</th>
              <th scope="col">nama</th>
              <th scope="col">kelas</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody class="table-group-divider">
          @foreach ($students as $key=> $student)
          <tr>
              <td>{{ $key +1 }}</td>
              <td>{{ $student["nis"]}}</td>
              <td>{{ $student["nama"] }}</td>
              <td>{{ $student["kelas"] }}</td>
              <td> <a href="/students/detail/{{ $student->id }}"  type="button" class="btn btn-outline-primary">Detail</a><a type="button" class="btn btn-outline-warning">Edit</a><a type="button" class="btn btn-outline-danger">Delete</a> </td>
          </tr>
          @endforeach
      </tbody>
  </table>
@endsection