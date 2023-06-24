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
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            1 =>
            array (
                'id' => 2,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A002',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            2 =>
            array (
                'id' => 3,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A003',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            3 =>
            array (
                'id' => 4,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A004',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            4 =>
            array (
                'id' => 5,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A005',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            5 =>
            array (
                'id' => 6,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A006',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            6 =>
            array (
                'id' => 7,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A007',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            7 =>
            array (
                'id' => 8,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A008',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            8 =>
            array (
                'id' => 9,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A009',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            9 =>
            array (
                'id' => 10,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A010',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            10 =>
            array (
                'id' => 11,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A011',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            11 =>
            array (
                'id' => 12,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A012',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            12 =>
            array (
                'id' => 13,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A013',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            13 =>
            array (
                'id' => 14,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'A014',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            14 =>
            array (
                'id' => 15,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B001',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            15 =>
            array (
                'id' => 16,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B002',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            16 =>
            array (
                'id' => 17,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B003',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            17 =>
            array (
                'id' => 18,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B004',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            18 =>
            array (
                'id' => 19,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B005',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            19 =>
            array (
                'id' => 20,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B006',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            20 =>
            array (
                'id' => 21,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B007',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            21 =>
            array (
                'id' => 22,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B008',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            22 =>
            array (
                'id' => 23,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B009',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            23 =>
            array (
                'id' => 24,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'B010',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            24 =>
            array (
                'id' => 25,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C001',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            25 =>
            array (
                'id' => 26,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C002',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            26 =>
            array (
                'id' => 27,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C003',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            27 =>
            array (
                'id' => 28,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C004',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            28 =>
            array (
                'id' => 29,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C005',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            29 =>
            array (
                'id' => 30,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C006',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            30 =>
            array (
                'id' => 31,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C007',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            31 =>
            array (
                'id' => 32,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C008',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            32 =>
            array (
                'id' => 33,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C009',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            33 =>
            array (
                'id' => 34,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C010',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            34 =>
            array (
                'id' => 35,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C011',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            35 =>
            array (
                'id' => 36,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C012',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            36 =>
            array (
                'id' => 37,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C013',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            37 =>
            array (
                'id' => 38,
                'building_id' => 1,
                'floor' => 0,
                'name' => 'C014',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            38 =>
            array (
                'id' => 39,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A101',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            39 =>
            array (
                'id' => 40,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A102',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            40 =>
            array (
                'id' => 41,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A103',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            41 =>
            array (
                'id' => 42,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A104',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            42 =>
            array (
                'id' => 43,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A105',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            43 =>
            array (
                'id' => 44,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A106',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            44 =>
            array (
                'id' => 45,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A107',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            45 =>
            array (
                'id' => 46,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A108',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            46 =>
            array (
                'id' => 47,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A109',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            47 =>
            array (
                'id' => 48,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A110',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            48 =>
            array (
                'id' => 49,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A111',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            49 =>
            array (
                'id' => 50,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A112',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            50 =>
            array (
                'id' => 51,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A113',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            51 =>
            array (
                'id' => 52,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'A114',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            52 =>
            array (
                'id' => 53,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B101',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            53 =>
            array (
                'id' => 54,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B102',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            54 =>
            array (
                'id' => 55,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B103',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            55 =>
            array (
                'id' => 56,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B104',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            56 =>
            array (
                'id' => 57,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B105',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            57 =>
            array (
                'id' => 58,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B106',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            58 =>
            array (
                'id' => 59,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B107',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            59 =>
            array (
                'id' => 60,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B108',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            60 =>
            array (
                'id' => 61,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B109',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            61 =>
            array (
                'id' => 62,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'B110',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            62 =>
            array (
                'id' => 63,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C101',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            63 =>
            array (
                'id' => 64,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C102',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            64 =>
            array (
                'id' => 65,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C103',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            65 =>
            array (
                'id' => 66,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C104',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            66 =>
            array (
                'id' => 67,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C105',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            67 =>
            array (
                'id' => 68,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C106',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            68 =>
            array (
                'id' => 69,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C107',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            69 =>
            array (
                'id' => 70,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C108',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            70 =>
            array (
                'id' => 71,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C109',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            71 =>
            array (
                'id' => 72,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C110',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            72 =>
            array (
                'id' => 73,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C111',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            73 =>
            array (
                'id' => 74,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C112',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            74 =>
            array (
                'id' => 75,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C113',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            75 =>
            array (
                'id' => 76,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'C114',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            76 =>
            array (
                'id' => 77,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D101',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            77 =>
            array (
                'id' => 78,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D102',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            78 =>
            array (
                'id' => 79,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D103',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            79 =>
            array (
                'id' => 80,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D104',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            80 =>
            array (
                'id' => 81,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D105',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            81 =>
            array (
                'id' => 82,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D106',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            82 =>
            array (
                'id' => 83,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D107',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            83 =>
            array (
                'id' => 84,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D108',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            84 =>
            array (
                'id' => 85,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D109',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            85 =>
            array (
                'id' => 86,
                'building_id' => 1,
                'floor' => 1,
                'name' => 'D110',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            86 =>
            array (
                'id' => 87,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A201',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            87 =>
            array (
                'id' => 88,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A202',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            88 =>
            array (
                'id' => 89,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A203',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            89 =>
            array (
                'id' => 90,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A204',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            90 =>
            array (
                'id' => 91,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A205',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            91 =>
            array (
                'id' => 92,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A206',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            92 =>
            array (
                'id' => 93,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A207',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            93 =>
            array (
                'id' => 94,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A208',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            94 =>
            array (
                'id' => 95,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A209',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            95 =>
            array (
                'id' => 96,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A210',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            96 =>
            array (
                'id' => 97,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A211',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            97 =>
            array (
                'id' => 98,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A212',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            98 =>
            array (
                'id' => 99,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A213',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            99 =>
            array (
                'id' => 100,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'A214',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            100 =>
            array (
                'id' => 101,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B201',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            101 =>
            array (
                'id' => 102,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B202',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            102 =>
            array (
                'id' => 103,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B203',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            103 =>
            array (
                'id' => 104,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B204',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            104 =>
            array (
                'id' => 105,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B205',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            105 =>
            array (
                'id' => 106,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B206',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            106 =>
            array (
                'id' => 107,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B207',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            107 =>
            array (
                'id' => 108,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B208',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            108 =>
            array (
                'id' => 109,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B209',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            109 =>
            array (
                'id' => 110,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'B210',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            110 =>
            array (
                'id' => 111,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C201',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            111 =>
            array (
                'id' => 112,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C202',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            112 =>
            array (
                'id' => 113,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C203',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            113 =>
            array (
                'id' => 114,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C204',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            114 =>
            array (
                'id' => 115,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C205',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            115 =>
            array (
                'id' => 116,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C206',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            116 =>
            array (
                'id' => 117,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C207',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            117 =>
            array (
                'id' => 118,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C208',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            118 =>
            array (
                'id' => 119,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C209',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            119 =>
            array (
                'id' => 120,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C210',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            120 =>
            array (
                'id' => 121,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C211',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            121 =>
            array (
                'id' => 122,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C212',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            122 =>
            array (
                'id' => 123,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C213',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            123 =>
            array (
                'id' => 124,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'C214',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            124 =>
            array (
                'id' => 125,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D201',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            125 =>
            array (
                'id' => 126,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D202',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            126 =>
            array (
                'id' => 127,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D203',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            127 =>
            array (
                'id' => 128,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D204',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            128 =>
            array (
                'id' => 129,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D205',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            129 =>
            array (
                'id' => 130,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D206',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            130 =>
            array (
                'id' => 131,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D207',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            131 =>
            array (
                'id' => 132,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D208',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            132 =>
            array (
                'id' => 133,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D209',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
            133 =>
            array (
                'id' => 134,
                'building_id' => 1,
                'floor' => 2,
                'name' => 'D210',
                'capacity' => 2,
                'created_at' => Now(),
                'updated_at' => Now(),
            ),
        ));


    }
}