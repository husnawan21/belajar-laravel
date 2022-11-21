<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
  use HasFactory, SoftDeletes;
  // protected $table = 'students';
  protected $guarded = ['id'];

  public function class()
  {
    return $this->belongsTo(Classroom::class);
  }

  public function extracurriculars()
  {
    return $this->belongsToMany(Extracurricular::class, 'student_extracurriculars', 'student_id', 'extracurricular_id');
  }
}
