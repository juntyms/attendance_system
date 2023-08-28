<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rooms')->delete();
        
        \DB::table('rooms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A001',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            1 => 
            array (
                'id' => 2,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A002',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            2 => 
            array (
                'id' => 3,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A003',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            3 => 
            array (
                'id' => 4,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A004',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            4 => 
            array (
                'id' => 5,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A005',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            5 => 
            array (
                'id' => 6,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A006',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            6 => 
            array (
                'id' => 7,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A007',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            7 => 
            array (
                'id' => 8,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A008',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            8 => 
            array (
                'id' => 9,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A009',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            9 => 
            array (
                'id' => 10,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A010',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            10 => 
            array (
                'id' => 11,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A011',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            11 => 
            array (
                'id' => 12,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A012',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            12 => 
            array (
                'id' => 13,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A013',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            13 => 
            array (
                'id' => 14,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A014',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            14 => 
            array (
                'id' => 15,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B001',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            15 => 
            array (
                'id' => 16,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B002',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            16 => 
            array (
                'id' => 17,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B003',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            17 => 
            array (
                'id' => 18,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B004',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            18 => 
            array (
                'id' => 19,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B005',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            19 => 
            array (
                'id' => 20,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B006',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            20 => 
            array (
                'id' => 21,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B007',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            21 => 
            array (
                'id' => 22,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B008',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            22 => 
            array (
                'id' => 23,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B009',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            23 => 
            array (
                'id' => 24,
                'building_id' => 2,
                'floor' => 0,
                'name' => 'B010',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            24 => 
            array (
                'id' => 25,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C001',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            25 => 
            array (
                'id' => 26,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C002',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            26 => 
            array (
                'id' => 27,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C003',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            27 => 
            array (
                'id' => 28,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C004',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            28 => 
            array (
                'id' => 29,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C005',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            29 => 
            array (
                'id' => 30,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C006',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            30 => 
            array (
                'id' => 31,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C007',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            31 => 
            array (
                'id' => 32,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C008',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            32 => 
            array (
                'id' => 33,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C009',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            33 => 
            array (
                'id' => 34,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C010',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            34 => 
            array (
                'id' => 35,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C011',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            35 => 
            array (
                'id' => 36,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C012',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            36 => 
            array (
                'id' => 37,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C013',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            37 => 
            array (
                'id' => 38,
                'building_id' => 3,
                'floor' => 0,
                'name' => 'C014',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            38 => 
            array (
                'id' => 39,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A101',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            39 => 
            array (
                'id' => 40,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A102',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            40 => 
            array (
                'id' => 41,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A103',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            41 => 
            array (
                'id' => 42,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A104',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            42 => 
            array (
                'id' => 43,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A105',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            43 => 
            array (
                'id' => 44,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A106',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            44 => 
            array (
                'id' => 45,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A107',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            45 => 
            array (
                'id' => 46,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A108',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            46 => 
            array (
                'id' => 47,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A109',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            47 => 
            array (
                'id' => 48,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A110',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            48 => 
            array (
                'id' => 49,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A111',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            49 => 
            array (
                'id' => 50,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A112',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            50 => 
            array (
                'id' => 51,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A113',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            51 => 
            array (
                'id' => 52,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A114',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            52 => 
            array (
                'id' => 53,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B101',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            53 => 
            array (
                'id' => 54,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B102',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            54 => 
            array (
                'id' => 55,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B103',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            55 => 
            array (
                'id' => 56,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B104',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            56 => 
            array (
                'id' => 57,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B105',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            57 => 
            array (
                'id' => 58,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B106',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            58 => 
            array (
                'id' => 59,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B107',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            59 => 
            array (
                'id' => 60,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B108',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            60 => 
            array (
                'id' => 61,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B109',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            61 => 
            array (
                'id' => 62,
                'building_id' => 2,
                'floor' => 1,
                'name' => 'B110',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            62 => 
            array (
                'id' => 63,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C101',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            63 => 
            array (
                'id' => 64,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C102',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            64 => 
            array (
                'id' => 65,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C103',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            65 => 
            array (
                'id' => 66,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C104',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            66 => 
            array (
                'id' => 67,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C105',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            67 => 
            array (
                'id' => 68,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C106',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            68 => 
            array (
                'id' => 69,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C107',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            69 => 
            array (
                'id' => 70,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C108',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            70 => 
            array (
                'id' => 71,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C109',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            71 => 
            array (
                'id' => 72,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C110',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            72 => 
            array (
                'id' => 73,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C111',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            73 => 
            array (
                'id' => 74,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C112',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            74 => 
            array (
                'id' => 75,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C113',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            75 => 
            array (
                'id' => 76,
                'building_id' => 3,
                'floor' => 1,
                'name' => 'C114',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            76 => 
            array (
                'id' => 77,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D101',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            77 => 
            array (
                'id' => 78,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D102',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            78 => 
            array (
                'id' => 79,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D103',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            79 => 
            array (
                'id' => 80,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D104',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            80 => 
            array (
                'id' => 81,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D105',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            81 => 
            array (
                'id' => 82,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D106',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            82 => 
            array (
                'id' => 83,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D107',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            83 => 
            array (
                'id' => 84,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D108',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            84 => 
            array (
                'id' => 85,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D109',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            85 => 
            array (
                'id' => 86,
                'building_id' => 4,
                'floor' => 1,
                'name' => 'D110',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            86 => 
            array (
                'id' => 87,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A201',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            87 => 
            array (
                'id' => 88,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A202',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            88 => 
            array (
                'id' => 89,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A203',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            89 => 
            array (
                'id' => 90,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A204',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            90 => 
            array (
                'id' => 91,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A205',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            91 => 
            array (
                'id' => 92,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A206',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            92 => 
            array (
                'id' => 93,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A207',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            93 => 
            array (
                'id' => 94,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A208',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            94 => 
            array (
                'id' => 95,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A209',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            95 => 
            array (
                'id' => 96,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A210',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            96 => 
            array (
                'id' => 97,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A211',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            97 => 
            array (
                'id' => 98,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A212',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            98 => 
            array (
                'id' => 99,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A213',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            99 => 
            array (
                'id' => 100,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A214',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            100 => 
            array (
                'id' => 101,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B201',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            101 => 
            array (
                'id' => 102,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B202',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            102 => 
            array (
                'id' => 103,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B203',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            103 => 
            array (
                'id' => 104,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B204',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            104 => 
            array (
                'id' => 105,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B205',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            105 => 
            array (
                'id' => 106,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B206',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            106 => 
            array (
                'id' => 107,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B207',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            107 => 
            array (
                'id' => 108,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B208',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            108 => 
            array (
                'id' => 109,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B209',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            109 => 
            array (
                'id' => 110,
                'building_id' => 2,
                'floor' => 2,
                'name' => 'B210',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            110 => 
            array (
                'id' => 111,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C201',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            111 => 
            array (
                'id' => 112,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C202',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            112 => 
            array (
                'id' => 113,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C203',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            113 => 
            array (
                'id' => 114,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C204',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            114 => 
            array (
                'id' => 115,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C205',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            115 => 
            array (
                'id' => 116,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C206',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            116 => 
            array (
                'id' => 117,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C207',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            117 => 
            array (
                'id' => 118,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C208',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            118 => 
            array (
                'id' => 119,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C209',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            119 => 
            array (
                'id' => 120,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C210',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            120 => 
            array (
                'id' => 121,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C211',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            121 => 
            array (
                'id' => 122,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C212',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            122 => 
            array (
                'id' => 123,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C213',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            123 => 
            array (
                'id' => 124,
                'building_id' => 3,
                'floor' => 2,
                'name' => 'C214',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            124 => 
            array (
                'id' => 125,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D201',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            125 => 
            array (
                'id' => 126,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D202',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            126 => 
            array (
                'id' => 127,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D203',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            127 => 
            array (
                'id' => 128,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D204',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            128 => 
            array (
                'id' => 129,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D205',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            129 => 
            array (
                'id' => 130,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D206',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            130 => 
            array (
                'id' => 131,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D207',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            131 => 
            array (
                'id' => 132,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D208',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            132 => 
            array (
                'id' => 133,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D209',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
            133 => 
            array (
                'id' => 134,
                'building_id' => 4,
                'floor' => 2,
                'name' => 'D210',
                'capacity' => 2,
                'created_at' => '2023-08-28 19:00:35',
                'updated_at' => '2023-08-28 19:00:35',
            ),
        ));
        
        
    }
}