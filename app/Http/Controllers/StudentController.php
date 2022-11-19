<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with('class')->get();
        return view('students', [
            'studentList' => $student
        ]);
    }
}
