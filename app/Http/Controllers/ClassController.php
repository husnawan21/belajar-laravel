<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
  public function index()
  {
    $class = Classroom::with('students', 'homeroomTeacher')->get();
    return view('classroom', [
      'classList' => $class
    ]);
  }
}
