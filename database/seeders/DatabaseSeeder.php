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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'admin',
            'display_name' => 'Administator',
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'super-admin',
            'display_name' => 'Super Administator',
        ]);
    }
}
