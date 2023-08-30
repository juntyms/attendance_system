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
        Building::create(['name' => 'Building 1']);
        Building::create(['name' => 'Building 2']);
        Building::create(['name' => 'Building 3']);
        Building::create(['name' => 'Building 4']);

    }
}
