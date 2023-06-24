<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentLeave extends Model
{
    use HasFactory;

    protected $table = 'student_leaves';

    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasOne(Student::class,'id','student_id');
    }

    public function studentroom()
    {
        return $this->hasOne(StudentRoom::class, 'student_id','student_id');
    }

    public function building()
    {
        return $this->hasOneThrough(Room::class,
        StudentRoom::class,
        'student_id',
        'id',
        'student_id','room_id');
    }
}