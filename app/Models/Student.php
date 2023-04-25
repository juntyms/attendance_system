<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    use FormAccessible;

    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
    public function building()
    {
        return $this->belongsTo('App\Models\Building');
    }

    /**
     * Get the user's date of birth.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateOfJoiningAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
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
}