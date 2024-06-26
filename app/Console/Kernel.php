<?php

namespace App\Console;

use App\Schedules\FetchAttendance;
use App\Schedules\FetchFingerprints;
use App\Schedules\DeployFingerprints;
use App\Http\Controllers\UserController;
use App\Schedules\DeviceStatus;
use App\Schedules\FetchCoordinatorReport;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //! Check device Status
        $schedule->call(DeviceStatus::class)->everyMinute();
        //$schedule->call(FetchAttendance::class)->everyMinute();

        //! Fetch Record From Master Device
        $schedule->call(FetchFingerprints::class)->everyFiveMinutes();

        //! Send Fingerprint to other devices
        $schedule->call(DeployFingerprints::class)->everyFiveMinutes();

        //! Fetch Attendance
        $schedule->call(FetchAttendance::class)->hourly();


        // $schedule->command('inspire')->hourly();
        $myschedule = \DB::table('report_schedules')->first();

        $myfrequency = (string) $myschedule->frequency_method;

        $schedule->call(new FetchCoordinatorReport())->dailyAt('22:05');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
