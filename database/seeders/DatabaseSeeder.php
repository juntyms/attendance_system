<?php

namespace Database\Seeders;

use Database\Seeders\AdminSeed;
use Illuminate\Database\Seeder;
use Database\Seeders\BuildingSeed;
use Database\Seeders\DepartmentSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(AdminSeed::class);
        $this->call(BuildingSeed::class);
        $this->call(DepartmentSeed::class);
    }
}