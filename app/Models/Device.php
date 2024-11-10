<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function devicetype()
    {
        return $this->hasOne(DeviceType::class, 'id', 'device_type_id');
    }

    public function building()
    {
        return $this->hasOne(Building::class, 'id', 'building_id');
    }
}
