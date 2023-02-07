<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProjectType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Tags\Tag;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ProjectType::create([
            'name' => 'Digitale werkplaats'
        ]);

        ProjectType::create([
            'name' => 'Project externe opdrachtgever'
        ]);

        ProjectType::create([
            'name' => 'Innovatieproject'
        ]);

        ProjectType::create([
            'name' => 'Examen Oefenproject'
        ]);


        ProjectType::create([
            'name' => 'Overig'
        ]);
        
        Tag::create([
            'name' => 'Frontend'
        ]);

        Tag::create([
            'name' => 'Backend'
        ]);

        Tag::create([
            'name' => 'HTML'
        ]);

        Tag::create([
            'name' => 'PHP'
        ]);

        Tag::create([
            'name' => 'C#'
        ]);

        if (!Role::where('name', 'admin')->first()) {
            $role = Role::create(['name' => 'admin']);

            $role->syncPermissions([
                Permission::create(['name' => 'Manage Users']),
                Permission::create(['name' => 'Manage Projects']),
                Permission::create(['name' => 'Manage Groups']),
                Permission::create(['name' => 'Manage Customers'])
            ]);
        }


        \App\Models\User::factory(30)->create();

        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'D284132@edu.curio.nl',
            'password' => Hash::make('123admin'),
        ]);
        
        $admin->assignRole('admin');

        \App\Models\Customer::factory(30)->create();
        \App\Models\Project::factory(30)->create();
        \App\Models\Group::factory(30)->create();
        \App\Models\GroupUser::factory(30)->create();
        \App\Models\GroupProject::factory(30)->create();

    }
}
