<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function indew()
    {
        return view('students.all', [
            "title" => "student_page",
            "students" => Student::all()
        ]);
    }

    public function show($student){
        return view('students.detail',[
            "title" => "detail_student",
            "students" => Student::find($student)
        ]);
    }
}
