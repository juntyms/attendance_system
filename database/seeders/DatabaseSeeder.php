<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        //$this->call(RolesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(AdminSeed::class);
        $this->call(BuildingSeed::class);
        $this->call(DepartmentSeed::class);
        $this->call(NationalityTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(RolesAndPermissionSeeder::class);
        $this->call(DeviceTypesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(ReportScheduleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CoordinatorsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
    }
}
