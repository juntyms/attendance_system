<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $guarded = [];

    public function student()
    {
        return $this->hasOne('App\Models\Student', 'student_id', 'student_id');
    }
    public function types()
    {
        return $this->hasOne('App\Models\Type', 'type_id', 'type');
    }
    public function state()
    {
        return $this->hasOne('App\Models\State', 'id', 'state_id');
    }

    public function device()
    {
        return $this->hasOne('App\Models\Device', 'id', 'device_id');
    }

}
