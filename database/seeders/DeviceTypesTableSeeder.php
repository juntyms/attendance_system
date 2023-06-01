<?php

namespace Database\Seeders;

use App\Models\DeviceType;
use Illuminate\Database\Seeder;

class DeviceTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('device_types')->delete();

        DeviceType::create(['name'=>'ilock 680','brand'=>'ZKteco']);
        DeviceType::create(['name'=>'ZKteco 680','brand'=>'ZKteco']);




    }
}