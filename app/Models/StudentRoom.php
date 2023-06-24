<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Building;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentRoom extends Model
{
    use HasFactory;

    protected $table = 'student_rooms';

    protected $guarded = ['id'];

    public function room()
    {
        return $this->hasOne(Room::class,'id','room_id');
    }

}