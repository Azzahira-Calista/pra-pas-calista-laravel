@extends('layouts.main')

@section('container')
    <h1>This is student page</h1>
    <table class="table">
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">nama</th>
              <th scope="col">kelas</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody class="table-group-divider">
          @foreach ($students as $key=> $student)
          <tr>
              <td>{{ $key +1 }}</td>
              <td>{{ $student["nama"] }}</td>
              <td>{{ $student["kelas"] }}</td>
              <td> <a href="/students/detail/{{ $student->id }}"  type="button" class="btn btn-outline-primary">Detail</a>
                {{-- <a type="button" class="btn btn-outline-warning">Edit</a> --}}

                <a href="/students/{{ $student->id }}/edit" class="btn btn-outline-warning" role="button">Edit</a>

                {{-- <a type="button" class="btn btn-outline-danger">Delete</a>  --}}
                <form action="/students/delete/{{ $student->id }}" method="post" class="d-inline">
                    @csrf 
                    {{-- csrf = directive blade laravel yang bisa bikininput field / form field jadi invisible(cross site request forgery) --}}
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  <a href="/students/create/">Add Student</a>
@endsection