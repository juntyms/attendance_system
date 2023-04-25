<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('status')->delete();
        Status::create(['name'=>'Active']);
        Status::create(['name'=>'In-Active']);
        Status::create(['name'=>'Pending']);
    }
}