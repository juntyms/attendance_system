<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->delete();
        Building::create(['name' => 'A']);
        Building::create(['name' => 'B']);
        Building::create(['name' => 'C']);
        Building::create(['name' => 'D']);

    }
}
