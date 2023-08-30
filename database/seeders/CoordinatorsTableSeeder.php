<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoordinatorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coordinators')->delete();
        
        \DB::table('coordinators')->insert(array (
            0 => 
            array (
                'id' => 1,
                'building_id' => 1,
                'user_id' => 2,
                'created_at' => '2023-08-30 18:26:14',
                'updated_at' => '2023-08-30 18:26:14',
            ),
            1 => 
            array (
                'id' => 2,
                'building_id' => 1,
                'user_id' => 3,
                'created_at' => '2023-08-30 18:26:19',
                'updated_at' => '2023-08-30 18:26:19',
            ),
            2 => 
            array (
                'id' => 3,
                'building_id' => 1,
                'user_id' => 4,
                'created_at' => '2023-08-30 18:26:24',
                'updated_at' => '2023-08-30 18:26:24',
            ),
            3 => 
            array (
                'id' => 4,
                'building_id' => 2,
                'user_id' => 5,
                'created_at' => '2023-08-30 18:40:39',
                'updated_at' => '2023-08-30 18:40:39',
            ),
            4 => 
            array (
                'id' => 5,
                'building_id' => 2,
                'user_id' => 6,
                'created_at' => '2023-08-30 18:40:48',
                'updated_at' => '2023-08-30 18:40:48',
            ),
            5 => 
            array (
                'id' => 6,
                'building_id' => 2,
                'user_id' => 7,
                'created_at' => '2023-08-30 18:40:56',
                'updated_at' => '2023-08-30 18:40:56',
            ),
            6 => 
            array (
                'id' => 7,
                'building_id' => 3,
                'user_id' => 8,
                'created_at' => '2023-08-30 18:46:46',
                'updated_at' => '2023-08-30 18:46:46',
            ),
            7 => 
            array (
                'id' => 8,
                'building_id' => 3,
                'user_id' => 9,
                'created_at' => '2023-08-30 18:46:55',
                'updated_at' => '2023-08-30 18:46:55',
            ),
            8 => 
            array (
                'id' => 9,
                'building_id' => 3,
                'user_id' => 10,
                'created_at' => '2023-08-30 18:47:05',
                'updated_at' => '2023-08-30 18:47:05',
            ),
            9 => 
            array (
                'id' => 10,
                'building_id' => 3,
                'user_id' => 11,
                'created_at' => '2023-08-30 18:47:19',
                'updated_at' => '2023-08-30 18:47:19',
            ),
            10 => 
            array (
                'id' => 11,
                'building_id' => 4,
                'user_id' => 12,
                'created_at' => '2023-08-30 18:47:28',
                'updated_at' => '2023-08-30 18:47:28',
            ),
            11 => 
            array (
                'id' => 12,
                'building_id' => 4,
                'user_id' => 14,
                'created_at' => '2023-08-30 18:47:41',
                'updated_at' => '2023-08-30 18:47:41',
            ),
            12 => 
            array (
                'id' => 13,
                'building_id' => 4,
                'user_id' => 13,
                'created_at' => '2023-08-30 18:47:49',
                'updated_at' => '2023-08-30 18:47:49',
            ),
        ));
        
        
    }
}