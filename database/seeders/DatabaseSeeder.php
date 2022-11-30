<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(30)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Customer::factory(30)->create();
        \App\Models\Project::factory(30)->create();
        \App\Models\Group::factory(30)->create();
        \App\Models\GroupUser::factory(30)->create();
        \App\Models\GroupProject::factory(30)->create();

    }
}
