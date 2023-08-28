<?php

namespace Database\Seeders;

use App\Models\ReportSchedule;
use Illuminate\Database\Seeder;

class ReportScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('report_schedules')->delete();
        ReportSchedule::create(['report_name' => 'schedule','frequency_method' => 'weekly']);
    }
}
