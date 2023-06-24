<?php

namespace App\Models;

use App\Models\Building;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function building()
    {
        return $this->belongsTo(Building::class,'building_id','id');
    }
}