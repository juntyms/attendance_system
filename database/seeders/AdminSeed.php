<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'admin',
            'email' => 'administrator@attendance.com',
            'password' => bcrypt('admin@2020'), // password
            'name' => 'admin User ',
            'remember_token' => Str::random(10),
        ]);
    }
}