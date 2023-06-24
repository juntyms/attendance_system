<?php

namespace App\Http\Livewire;

use App\Models\Room;
use App\Models\Student;
use Livewire\Component;
use App\Models\Building;

class Studentroomassignment extends Component
{
    public $buildings;
    public $floors;
    public $rooms;
    public $students;

    public $choosenBuilding;
    public $choosenFloor;
    public $choosenRoom;

    public function mount()
    {
        $this->buildings = Building::all();
        $this->floors = collect();
        $this->rooms = collect();
    }



    public function render()
    {
        $this->students = Student::doesntHave('studentroom')->get();

        if (!is_null($this->choosenBuilding)) {
            $this->floors = Room::select('floor')
                ->where('building_id',$this->choosenBuilding)
                ->groupBy('floor')
                ->get();
        } else {
            $this->choosenFloor = null;
            $this->rooms = collect();
        }

        if (!is_null($this->choosenFloor)) {
        //dd($this->choosenFloor);
            $this->rooms = Room::where('floor',$this->choosenFloor)->get();
        }






        return view('livewire.studentroomassignment');
    }
}