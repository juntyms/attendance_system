<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLeave extends Model
{
    use HasFactory;

    protected $table = 'student_leaves';

    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasOne(Student::class,'id','student_id');
    }
}