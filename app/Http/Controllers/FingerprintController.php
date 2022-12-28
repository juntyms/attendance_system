<?php

namespace App\Http\Controllers;

use TADPHP\TADFactory;
use App\Models\Attendance;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;

class FingerprintController extends Controller
{
    public function connect()
    {
        $zk = new ZKTeco('10.153.82.110');

            if ($zk->connect()){

            $attendances = $zk->getAttendance();
            
                //dd($attendances);
                foreach($attendances as $attendance) {
                    Attendance::create([
                        'uid'=>$attendance['uid'],
                        'user_id'=>$attendance['id'],
                        'state_id'=>$attendance['state'],
                        'punchtime'=>$attendance['timestamp'],
                        'type'=>$attendance['type']
                    ]);
                }
            }
    }

    public function getfp()
    {
        $tad_factory = new TADFactory(['ip'=>'10.153.82.110']);

        $tad = $tad_factory->get_instance();

        //Delete template
        //$tad->delete_template(['pin'=>1]);
        
        // Getting attendance logs from all users.
        $logs = $tad->get_user_template()->to_array();

        dd($logs);
        /*
        $template1_vx9 = "S7FTUzIxAAAC8vEECAUHCc7QAAAa82kBAAAAgh8XhPJaAIMPegC9AH39MwCXAO8OigCV8nAOqACXAFcPjvKfAIEPOgBaAPP8dQCkAAcPSgCo8ocPHwCzAJ4PjfLAAIUPawADAAL9lADMAIYPRgDj8nMPVADtAIoPgfL9ACoPhADVATP9eAARATkPnwAR80APJgAbAYoPY/IjAUUOWwDqAcX8tQBDAbAOiwQ59Srz0vwyA497svGQg+qVgYJUhxycZBNWDEcM8f93jPTzMAeBgjOZc3iAg8YJsAf4AodxD23+bRPu7QO/8EsVTvmmkbt9pvFYF7YBUUso79wfbxIKUyvcUPmrABi7zPsNCXvuRvkYEq33bfy4fzz6LhFDijcPSIDr9iAPjYR5i1+TcXFue3uLf8/1ICzzAL0XAQYAkT4Cz/4IAIhMibSABvKRUAYxCABNU4uOwIQEAI9U1lYF8nhXhouECMWKXuL+RzQIAIKbg3YwRgkAdnWDTsJs+gF+eQn+wTlkCPJ1e4B+wsKjEALlgeL9PkYwg/8T8haJ5zhAQIVRCPIyku3/O8A6Lg3yUpX6PDj+BUA0+AE2mO3//gX+/Q3+/gUALpmieAXyrZoawP8wyACKaYiTcJPBwcgAilKCg4SAfArFkKPhOcAxwQwAv6qBYcJxiwoAk2kX/bNG/wQAH7eZeAzyjL2Mw8LCTcGHqQsAk8Ma//D/wrQHAGfHcJMEAwKdyf3+DAB/JXfBVW/AbxAAWCzi/w/9//39/z6uwQvyUe9XiWLCzABUA1FvasAJALr7XDSFfAkAh/zn/jowbAgANv1QBMLCM1sGEIMAMAf/UvsRfgVAw8Cvwv33EYYUMP9cwhB75DtwhREQYdu6Iw79+vz//sA6wf12BRAlIEyQ3hDV0LVre8N5wQeSgp1vwwUQZCaFwmf2EVszPWkZ1co0Qk/+w8CVwQTEkjbBwv94wRHVskJCWcHCxMfGAZnAk1NCAAtDAcUACbdTAAAAAAAAAA==";

        $template1_data = [
            'pin' => 1,
            'finger_id' => 0, // First fingerprint has 0 as index.
            'size' => 760,    // Be careful, this is not string length of $template1_vx9 var.
            'valid' => 1,
            'template' => $template1_vx9
          ];
          
          $tad->set_user_template( $template1_data );
        */

        //https://www.phpclasses.org/package/9026-PHP-Communicate-with-ZK-time-and-attendance-devices.html
    }
}
