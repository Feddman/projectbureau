<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);

        $role->syncPermissions([
            Permission::create(['name' => 'Manage Users']),
            Permission::create(['name' => 'Manage Projects']),
            Permission::create(['name' => 'Manage Groups']),
            Permission::create(['name' => 'Manage Customers'])
        ]);

        \App\Models\User::factory(30)->create();

        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'test@example.com',
        ]);
        $admin->assignRole('admin');

        \App\Models\Customer::factory(30)->create();
        \App\Models\Project::factory(30)->create();
        \App\Models\Group::factory(30)->create();
        \App\Models\GroupUser::factory(30)->create();
        \App\Models\GroupProject::factory(30)->create();

    }
}
