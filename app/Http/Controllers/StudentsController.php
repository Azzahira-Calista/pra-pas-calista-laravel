<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.all', [
            "title" => "student_page",
            "students" => Student::all()
        ]);
    }

    public function show($student)
    {
        return view('students.detail', [
            "title" => "detail_student",
            "students" => Student::find($student)
        ]);
    }
    //// method create sama store buat add student

    public function create()
    {
        return view('students.addStudent', [
            'title' => 'Add Student',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        $student = new Student();
        $student->nis = $validatedData['nis'];
        $student->nama = $validatedData['nama'];
        $student->tanggal_lahir = $validatedData['tanggal_lahir'];
        $student->kelas = $validatedData['kelas'];
        $student->alamat = $validatedData['alamat'];

        $student->save();

        return redirect('/students/all')->with('success', 'Student added successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/students/all')->with('success', 'Student deleted successfully');
    }

    public function edit(Student $student)
    {
        return view('students.editStudent', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        $student->update($validatedData);

        return redirect('/students/all')->with('success', 'Student updated successfully');
    }


}
