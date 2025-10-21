<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\StudentRoom;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    use FormAccessible;

    //    protected $guarded = [];
    protected $fillable = ['is_pushed','emergency2_no', 'emergency3_no','student_id','student_name','student_name_ar','email','mobile_no','civilno','building_id','room_id','nationality_id','date_of_joining','status_id','emergency_contact_person','emergency_no'];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }



    /**
     * Get the user's date of birth.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateOfJoiningAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Get the user's date of birth for forms.
     *
     * @param  string  $value
     * @return string
     */
    public function formDateOfJoiningAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function studentroom()
    {
        return $this->hasOne(StudentRoom::class, 'student_id', 'id');
    }
}
