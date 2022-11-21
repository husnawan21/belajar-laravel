<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

  public function store(StudentCreateRequest $request)
  {
    // $student = new Student;
    // $student->name = $request->name;
    // $student->gender = $request->gender;
    // $student->nis = $request->nis;
    // $student->class_id = $request->class_id;
    // $student->save();

    // dengan mass assignment, syarat: kolom yg mau diisi dengan var fillable/guarded di models, dan "name"nya sesuai dgn form yg disi

    $student = Student::create($request->all());
    if ($student) {
      Session::flash('status', 'success');
      Session::flash('message', 'New student added successful!');
    }
    return redirect('/students');
  }
  public function edit(Request $request, $id)
  {
    $student = Student::with('class')->findOrFail($id);
    $class = Classroom::where('id', '!=', $student->class_id)->get(['id', 'name']);
    return view('student-edit', ['student' => $student, 'class' => $class]);
  }

  public function update(Request $request, $id)
  {
    $student = Student::findOrFail($id);
    $student->update($request->all());
    return redirect('/students');
  }
}
