<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();
        Department::create(['name'=>'Information Technology']);
        Department::create(['name'=>'Engineering']);
        Department::create(['name'=>'Bussines']);
    }
}