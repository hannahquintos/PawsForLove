<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Hannah',
            'email' => 'hannah@gmail.com',
            'password' => 'password'
        ]);

        $this->call(DogSeeder::class);
        $this->call(BreedSeeder::class);
    }
}
