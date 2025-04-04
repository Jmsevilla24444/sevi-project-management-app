<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $this->call([
        //     AdminSeeder::class,
        // ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'regularSevi',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => now(),
            'role' => 'user',
        ]);

        // Admin User
        User::factory()->create([
            'id' => 1,
            'name' => 'AdminSevi',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => now(),
            'role' => 'admin',
        ]);

        // Additional seeding for projects and tasks
        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
