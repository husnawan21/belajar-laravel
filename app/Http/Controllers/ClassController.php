<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
  public function index()
  {
    $class = Classroom::get();
    return view('classroom', [
      'classList' => $class
    ]);
  }

  public function show($id)
  {
    $class = Classroom::with(['students', 'homeroomTeacher'])->findOrFail($id);
    return view('class-detail', [
      'class' => $class
    ]);
  }
}
