<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
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

  public function create()
  {
    $class = Classroom::select('id', 'name')->get();
    return view('student-add', ['class' => $class]);
  }

  public function store(Request $request)
  {
    // $student = new Student;
    // $student->name = $request->name;
    // $student->gender = $request->gender;
    // $student->nis = $request->nis;
    // $student->class_id = $request->class_id;
    // $student->save();

    // dengan mass assignment, syarat: kolom yg mau diisi dengan var fillable/guarded di models, dan "name"nya sesuai dgn form yg disi
    Student::create($request->all());
    return redirect('/students');
  }
}
