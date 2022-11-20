<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
  public function index()
  {
    $student = Student::get();
    return view('students', [
      'studentList' => $student
    ]);
  }

  public function show($id)
  {
    $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
    return view('student-detail', ['student' => $student]);
  }
}
