<?php

namespace Database\Seeders;

use App\Models\Room;
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
        //Buikding 1 Ground Floor
        Room::create(['building_id' => '1','floor' => '0','name' => 'A001','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A002','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A003','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A004','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A005','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A006','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A007','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A008','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A009','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A010','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A011','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A012','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A013','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'A014','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '0','name' => 'B001','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B002','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B003','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B004','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B005','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B006','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B007','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B008','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B009','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'B010','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '0','name' => 'C001','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C002','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C003','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C004','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C005','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C006','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C007','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C008','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C009','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C010','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C011','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C012','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C013','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '0','name' => 'C014','capacity' => '2']);

        // Building 2 Ground Floor
        Room::create(['building_id' => '2','floor' => '0','name' => 'A001','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A002','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A003','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A004','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A005','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A006','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A007','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A008','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A009','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A010','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A011','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A012','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A013','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'A014','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '0','name' => 'B001','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B002','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B003','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B004','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B005','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B006','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B007','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B008','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B009','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'B010','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '0','name' => 'C001','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C002','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C003','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C004','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C005','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C006','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C007','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C008','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C009','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C010','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C011','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C012','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C013','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '0','name' => 'C014','capacity' => '2']);

        // Building 3 Ground Floor
        Room::create(['building_id' => '3','floor' => '0','name' => 'A001','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A002','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A003','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A004','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A005','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A006','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A007','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A008','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A009','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A010','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A011','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A012','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A013','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'A014','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '0','name' => 'B001','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B002','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B003','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B004','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B005','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B006','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B007','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B008','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B009','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'B010','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '0','name' => 'C001','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C002','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C003','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C004','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C005','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C006','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C007','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C008','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C009','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C010','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C011','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C012','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C013','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '0','name' => 'C014','capacity' => '2']);

        // BUilding 4 Ground Floor
        Room::create(['building_id' => '4','floor' => '0','name' => 'A001','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A002','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A003','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A004','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A005','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A006','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A007','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A008','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A009','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A010','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A011','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A012','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'A013','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '0','name' => 'B001','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B002','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B003','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B004','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B005','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B006','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B007','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B008','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B009','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'B010','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '0','name' => 'C001','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C002','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C003','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C004','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C005','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C006','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C007','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C008','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C009','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C010','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C011','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C012','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '0','name' => 'C013','capacity' => '3']);

        // Building 1 First Floor
        Room::create(['building_id' => '1','floor' => '1','name' => 'A101','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A102','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A103','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A104','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A105','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A106','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A107','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A108','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A109','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A110','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A111','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A112','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A113','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'A114','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '1','name' => 'B101','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B102','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B103','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B104','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B105','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B106','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B107','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B108','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B109','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'B110','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '1','name' => 'C101','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C102','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C103','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C104','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C105','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C106','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C107','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C108','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C109','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C110','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C111','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C112','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C113','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'C114','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '1','name' => 'D101','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D102','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D103','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D104','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D105','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D106','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D107','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D108','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D109','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '1','name' => 'D110','capacity' => '2']);

        // Building 2 First Floor
        Room::create(['building_id' => '2','floor' => '1','name' => 'A101','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A102','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A103','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A104','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A105','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A106','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A107','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A108','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A109','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A110','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A111','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A112','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A113','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'A114','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '1','name' => 'B101','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B102','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B103','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B104','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B105','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B106','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B107','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B108','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B109','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'B110','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '1','name' => 'C101','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C102','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C103','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C104','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C105','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C106','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C107','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C108','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C109','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C110','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C111','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C112','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C113','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'C114','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '1','name' => 'D101','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D102','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D103','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D104','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D105','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D106','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D107','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D108','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D109','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '1','name' => 'D110','capacity' => '2']);

        // Building 3 First Floor
        Room::create(['building_id' => '3','floor' => '1','name' => 'A101','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A102','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A103','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A104','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A105','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A106','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A107','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A108','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A109','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A110','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A111','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A112','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A113','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'A114','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '1','name' => 'B101','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B102','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B103','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B104','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B105','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B106','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B107','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B108','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B109','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'B110','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '1','name' => 'C101','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C102','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C103','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C104','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C105','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C106','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C107','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C108','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C109','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C110','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C111','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C112','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C113','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'C114','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '1','name' => 'D101','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D102','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D103','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D104','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D105','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D106','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D107','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D108','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D109','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '1','name' => 'D110','capacity' => '2']);

        // Building 4 First Floor
        Room::create(['building_id' => '4','floor' => '1','name' => 'A101','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A102','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A103','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A104','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A105','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A106','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A107','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A108','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A109','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A110','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A111','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A112','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'A113','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '1','name' => 'B101','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B102','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B103','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B104','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B105','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B106','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B107','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B108','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B109','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'B110','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '1','name' => 'C101','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C102','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C103','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C104','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C105','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C106','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C107','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C108','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C109','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C110','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C111','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C112','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'C113','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '1','name' => 'D101','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D102','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D103','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D104','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D105','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D106','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D107','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D108','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D109','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '1','name' => 'D110','capacity' => '3']);

        // Building 1 - Second Floor
        Room::create(['building_id' => '1','floor' => '2','name' => 'A201','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A202','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A203','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A204','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A205','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A206','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A207','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A208','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A209','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A210','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A211','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A212','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A213','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'A214','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '2','name' => 'B201','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B202','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B203','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B204','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B205','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B206','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B207','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B208','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B209','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'B210','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '2','name' => 'C201','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C202','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C203','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C204','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C205','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C206','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C207','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C208','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C209','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C210','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C211','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C212','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C213','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'C214','capacity' => '2']);

        Room::create(['building_id' => '1','floor' => '2','name' => 'D201','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D202','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D203','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D204','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D205','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D206','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D207','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D208','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D209','capacity' => '2']);
        Room::create(['building_id' => '1','floor' => '2','name' => 'D210','capacity' => '2']);

        // Building 2 - Second Floor

        Room::create(['building_id' => '2','floor' => '2','name' => 'A201','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A202','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A203','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A204','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A205','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A206','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A207','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A208','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A209','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A210','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A211','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A212','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A213','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'A214','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '2','name' => 'B201','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B202','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B203','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B204','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B205','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B206','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B207','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B208','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B209','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'B210','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '2','name' => 'C201','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C202','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C203','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C204','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C205','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C206','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C207','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C208','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C209','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C210','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C211','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C212','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C213','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'C214','capacity' => '2']);

        Room::create(['building_id' => '2','floor' => '2','name' => 'D201','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D202','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D203','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D204','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D205','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D206','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D207','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D208','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D209','capacity' => '2']);
        Room::create(['building_id' => '2','floor' => '2','name' => 'D210','capacity' => '2']);


        // Building 3 - Second Floor
        Room::create(['building_id' => '3','floor' => '2','name' => 'A201','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A202','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A203','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A204','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A205','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A206','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A207','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A208','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A209','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A210','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A211','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A212','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A213','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'A214','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '2','name' => 'B201','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B202','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B203','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B204','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B205','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B206','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B207','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B208','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B209','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'B210','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '2','name' => 'C201','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C202','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C203','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C204','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C205','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C206','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C207','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C208','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C209','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C210','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C211','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C212','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C213','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'C214','capacity' => '2']);

        Room::create(['building_id' => '3','floor' => '2','name' => 'D201','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D202','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D203','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D204','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D205','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D206','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D207','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D208','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D209','capacity' => '2']);
        Room::create(['building_id' => '3','floor' => '2','name' => 'D210','capacity' => '2']);

        // Building 4 - Second Floor
        Room::create(['building_id' => '4','floor' => '2','name' => 'A201','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A202','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A203','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A204','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A205','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A206','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A207','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A208','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A209','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A210','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A211','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A212','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'A213','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '2','name' => 'B201','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B202','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B203','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B204','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B205','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B206','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B207','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B208','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B209','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'B210','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '2','name' => 'C201','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C202','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C203','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C204','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C205','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C206','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C207','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C208','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C209','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C210','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C211','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C212','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'C213','capacity' => '3']);

        Room::create(['building_id' => '4','floor' => '2','name' => 'D201','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D202','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D203','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D204','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D205','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D206','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D207','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D208','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D209','capacity' => '3']);
        Room::create(['building_id' => '4','floor' => '2','name' => 'D210','capacity' => '3']);


    }
}
