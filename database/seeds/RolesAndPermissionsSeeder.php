<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //Create permissions
        Permission::create(['name' => 'manage departments']);
        Permission::create(['name' => 'manage posts']);
        Permission::create(['name' => 'manage users']);

        //create and roles and assign permissions
        $role = Role::create(['name' => 'department-admin']);
        $role->givePermissionTo('manage departments');

        $role = Role::create(['name' => 'post-admin']);
        $role->givePermissionTo('manage posts');

        $role = Role::create(['name' => 'user-admin']);
        $role->givePermissionTo('manage users');

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

    }
}
