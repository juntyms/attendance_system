<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Attendance;
use Rats\Zkteco\Lib\ZKTeco;

class Allattendance extends Component
{
    public $attendance;
    public function mount()
    {
        $zk = new ZKTeco(env('device_ip'));
       

            if ($zk->connect()){

            $attendances = $zk->getAttendance();
            
                //dd($attendances);
                foreach($attendances as $attendance) {
                    Attendance::create([
                        'uid'=>$attendance['uid'],
                        'student_id'=>$attendance['id'],
                        'state_id'=>$attendance['state'],
                        'punchtime'=>$attendance['timestamp'],
                        'type'=>$attendance['type']
                    ]);
                }
            }
       

       $this->attendance=Attendance::get();


        //dd($this->attendance);
    }

    public function connecting()
    {
        echo("hhh");
        $zk = new ZKTeco(env('device_ip'));
       

            if ($zk->connect()){

            $attendances = $zk->getAttendance();
            
                //dd($attendances);
                foreach($attendances as $attendance) {
                    Attendance::create([
                        'uid'=>$attendance['uid'],
                        'student_id'=>$attendance['id'],
                        'state_id'=>$attendance['state'],
                        'punchtime'=>$attendance['timestamp'],
                        'type'=>$attendance['type']
                    ]);
                }
            }
         
    }
    public function render()
    {
        return view('livewire.allattendance')->with('attendance',$this->attendance)->extends('layouts.base');
    }
}