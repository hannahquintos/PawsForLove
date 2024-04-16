<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Breed::factory()->create([
            'breedName' => 'German Shepherd'
        ]);

        Breed::factory()->create([
            'breedName' => 'Golden Retriever'
        ]);

        Breed::factory()->create([
            'breedName' => 'French Bulldog'
        ]);

        Breed::factory()->create([
            'breedName' => 'Husky'
        ]);

        Breed::factory()->create([
            'breedName' => 'Shi Tzu'
        ]);

        Breed::factory()->create([
            'breedName' => 'Pit Bull'
        ]);
        
        Breed::factory()->create([
            'breedName' => 'Border Collie'
        ]);

        Breed::factory()->create([
            'breedName' => 'Bernese Mountain Dog'
        ]);

        Breed::factory()->create([
            'breedName' => 'Poodle'
        ]);

        Breed::factory()->create([
            'breedName' => 'Dachshund'
        ]);
    }
}
