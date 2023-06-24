<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Add Users']);
        Permission::create(['name' => 'Edit Users']);
        Permission::create(['name' => 'Delete Users']);

        Permission::create(['name' => 'Add Students']);
        Permission::create(['name' => 'Edit Students']);
        Permission::create(['name' => 'Delete Students']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'Coordinator']);
        $role->givePermissionTo(['Add Students','Edit Students','Delete Students']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $user = User::findOrFail(1);
        $user->assignRole('super-admin');
    }
}
