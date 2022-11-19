<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
        'name' => 'Dwi Husnawan',
        'role' => 'admin',
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

Route::get('/students', [StudentController::class, 'index']);