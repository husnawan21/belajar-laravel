<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $table = 'students';
    protected $guarded = ['id'];

    public function class()
    {
        return $this->belongsTo(Classroom::class);
    }
}
