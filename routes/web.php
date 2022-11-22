<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
  return view('welcome');
});

Route::get('/', function () {
  return view('index', [
    'buah' => [
      'pisang', 'mangga', 'jeruk', 'nanas'
    ]
  ]);
});

Route::get('/about', function () {
  return view('about', [
    'title' => 'About',
    'name' => 'Dwi Husnawan',
    'role' => 'admin',
    'buah' => [
      'pisang', 'mangga', 'jeruk', 'nanas'
    ]
  ]);
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware(['auth', 'admin-or-teacher']);
Route::get('/student-add', [StudentController::class, 'create'])->middleware(['auth', 'admin-or-teacher']);
Route::post('/student', [StudentController::class, 'store'])->middleware(['auth', 'admin-or-teacher']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware(['auth', 'admin-or-teacher']);
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware(['auth', 'admin-or-teacher']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware(['auth', 'admin-or-teacher']);
Route::get('/students-deleted', [StudentController::class, 'deleteStudent'])->middleware(['auth', 'admin-or-teacher']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth', 'admin-or-teacher']);

Route::get('/class', [ClassController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');

Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])->middleware(['auth', 'admin']);
