<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Illuminate\Pagination\Paginator;

class StudentController extends Controller
{
  public function index(Request $request)
  {
    $keyword = $request->keyword;
    $student = Student::with('class')
      ->where('name', 'LIKE', '%' . $keyword . '%')
      ->orWhere('nis', 'LIKE', '%' . $keyword . '%')
      ->orWhereHas('class', function ($query) use ($keyword) {
        $query->where('name', 'LIKE', '%' . $keyword . '%');
      })
      ->paginate(15)->withQueryString();
    return view('students', [
      'studentList' => $student,
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

    $newName = '';
    if ($request->file('photo')) {
      $extension = $request->file('photo')->getClientOriginalExtension();
      $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
      $request->file('photo')->storeAs('photo', $newName);
    }

    $request['image'] = $newName;
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

  public function destroy($id)
  {
    Student::findOrFail($id)->delete();

    Session::flash('status', 'success');
    Session::flash('message', 'Student has been deleted!');
    return redirect('/students');
  }

  public function deleteStudent()
  {
    $deletedStudent = Student::onlyTrashed()->get();
    return view('students-deleted', ['student' => $deletedStudent]);
  }

  public function restore($id)
  {
    $deletedStudent = Student::withTrashed()->where('id', $id)->restore();

    Session::flash('status', 'success');
    Session::flash('message', 'Student has been restored!');
    return redirect('/students');
  }
}
