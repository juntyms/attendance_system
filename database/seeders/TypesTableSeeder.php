<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->delete();
        Type::create(['type_id'=>'0','name'=>'Check-In']);
        Type::create(['type_id'=>'1','name'=>'Check-Out']);
        Type::create(['type_id'=>'2','name'=>'Break-Out']);
        Type::create(['type_id'=>'3','name'=>'Break-In']);
        Type::create(['type_id'=>'4','name'=>'Overtime-In']);
        Type::create(['type_id'=>'5','name'=>'Overtime-Out']);
    }
}
