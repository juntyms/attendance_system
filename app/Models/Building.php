<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function coordinators()
    {
        return $this->hasMany(Coordinator::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class,'id','building_id');
    }
}
