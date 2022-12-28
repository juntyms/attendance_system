<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        State::create(['name'=>'Fingerprint Only']);
        State::create(['name'=>'User ID Only']);
        State::create(['name'=>'Password']);
        State::create(['name'=>'Badge Only']);
        State::create(['name'=>'Fingerprint or Password']);
        State::create(['name'=>'Fingerprint or Badge ']);
        State::create(['name'=>'Password or Badge']);
        State::create(['name'=>'User ID and Fingerprint']);
        State::create(['name'=>'Fingerpeint and password ']);
        State::create(['name'=>'Fingerprint and Badge ']);
        State::create(['name'=>'Fingerprint and Password and Badge']);
        State::create(['name'=>'Password and Badge ']);
        State::create(['name'=>'UserID and Fingerprint and Password ']);
        State::create(['name'=>'Fingerpeint and badge or User ID ']);


    }
}
