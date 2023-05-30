<?php

namespace App\Console;

use App\Schedules\FetchAttendance;
use App\Schedules\FetchFingerprints;
use App\Schedules\DeployFingerprints;
use App\Http\Controllers\UserController;
use App\Schedules\fetchCoordinatorReport;
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
        // $schedule->command('inspire')->hourly();
        $myschedule = \DB::table('report_schedules')->first();

        $myfrequency = (string) $myschedule->frequency_method;

        $schedule->call(new fetchCoordinatorReport)->$myfrequency();

        // Fetch Record From Master Device
        $schedule->call(FetchFingerprints::class)->everyMinute();

        // Send Fingerprint to other devices
        $schedule->call(DeployFingerprints::class)->everyMinute();

        $schedule->call(FetchAttendance::class)->hourly();
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