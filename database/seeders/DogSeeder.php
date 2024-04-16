<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dog::factory()->create([
            'name' => 'Riley',
            'breed_id' => '1',
            'age' => '2 years old',
            'gender' => 'Female',
            'intakeDate' => '2024-03-22',
            'bio' => "Meet Riley, a spirited German Shepherd with a heart of gold. At 2 years old, Riley thrives on adventure and loves long walks. Intelligent and fiercely loyal, she's eager for a family that shares her active lifestyle. Perfect for companionship and protection, Riley is ready to be your forever friend!",
            'imageURL' => 'https://images.pexels.com/photos/15520464/pexels-photo-15520464/free-photo-of-portrait-of-a-german-shepherd.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Daisy',
            'breed_id' => '2',
            'age' => '4 years old',
            'gender' => 'Female',
            'intakeDate' => '2023-11-14',
            'bio' => "Daisy is a cheerful 4-year-old Golden Retriever with a sunny disposition. Known for her gentle nature and fluffy hugs, she adores children and fits beautifully into any family. Daisy loves to fetch and swim, making her the perfect buddy for outdoor fun. Bring Daisy home and let her brighten your days!",
            'imageURL' => 'https://images.pexels.com/photos/1771838/pexels-photo-1771838.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Diggy',
            'breed_id' => '3',
            'age' => '2 years old',
            'gender' => 'Male',
            'intakeDate' => '2024-01-09',
            'bio' => "Meet Diggy, the charming French Bulldog with a heart of mischief! At 2 years old, Diggy is full of personality and loves to play. With his expressive eyes and adorable snorts, he's sure to steal your heart. Despite his small stature, Diggy's loyalty and affection know no bounds. Join the adventure with Diggy!",
            'imageURL' => 'https://images.pexels.com/photos/15094232/pexels-photo-15094232/free-photo-of-french-bulldog-lying-down-on-floor.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Echo',
            'breed_id' => '4',
            'age' => '1 year old',
            'gender' => 'Male',
            'intakeDate' => '2024-03-05',
            'bio' => "Introducing Echo, the majestic Husky with a spirit as wild as the open tundra! At 1 year old, Echo is a bundle of energy, always ready for an outdoor escapade. With striking blue eyes and a fluffy coat, he's both striking and cuddly. Bring Echo home and let the adventures begin!",
            'imageURL' => 'https://images.unsplash.com/photo-1674352096554-3007e60356f2?q=80&w=2835&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Dog::factory()->create([
            'name' => 'Biscuit',
            'breed_id' => '5',
            'age' => '3 years old',
            'gender' => 'Female',
            'intakeDate' => '2024-04-28',
            'bio' => "Meet Biscuit, the adorable Shi Tzu with a heart of gold! At 3 years old, Biscuit is a little bundle of joy, spreading happiness wherever she goes. With her fluffy coat and affectionate nature, she's the perfect lap companion. Biscuit is looking for a loving home to share her endless cuddles and kisses.",
            'imageURL' => 'https://images.pexels.com/photos/10073961/pexels-photo-10073961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Charlie',
            'breed_id' => '6',
            'age' => '4 years old',
            'gender' => 'Male',
            'intakeDate' => '2024-04-28',
            'bio' => "Introducing Charlie, the charming Pit Bull with a heart as big as his grin! At 4 years old, Charlie is a bundle of love, eager to shower his affection on anyone who crosses his path. With his playful spirit and soulful eyes, he's the perfect companion for adventures and cuddles alike. Join Charlie's journey and experience unconditional love!",
            'imageURL' => 'https://images.pexels.com/photos/1078090/pexels-photo-1078090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Coco',
            'breed_id' => '7',
            'age' => '2 years old',
            'gender' => 'Female',
            'intakeDate' => '2024-04-28',
            'bio' => "Meet Coco, the dynamic Border Collie with boundless energy and intelligence! At 2 years old, Coco thrives on mental challenges and outdoor activities. With her striking brown and white coat and attentive eyes, she's both stunning and attentive. Coco is seeking an active family to share her love and adventures with!",
            'imageURL' => 'https://images.pexels.com/photos/16362925/pexels-photo-16362925/free-photo-of-a-border-collie-sitting-on-steps-outdoors.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Luna',
            'breed_id' => '4',
            'age' => '4 years old',
            'gender' => 'Female',
            'intakeDate' => '2024-04-28',
            'bio' => "Introducing Luna, the captivating Husky with a spirit as luminous as the moon! At 4 years old, Luna radiates warmth and companionship. With her striking black and white coat and attentive gaze, she's both stunning and loyal. Luna is searching for a loving family to share her playful nature and unwavering affection.",
            'imageURL' => 'https://images.pexels.com/photos/12892318/pexels-photo-12892318.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Ace',
            'breed_id' => '8',
            'age' => '3 years old',
            'gender' => 'Male',
            'intakeDate' => '2024-04-28',
            'bio' => "Meet Ace, the gentle giant Bernese Mountain Dog with a heart as vast as the mountains! At 3 years old, Ace embodies loyalty and devotion. With his striking tri-color coat and soulful eyes, he captures the essence of companionship. Ace seeks a loving family to share his warmth and gentle nature with.",
            'imageURL' => 'https://images.pexels.com/photos/5782397/pexels-photo-5782397.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Bella',
            'breed_id' => '9',
            'age' => '2 years old',
            'gender' => 'Female',
            'intakeDate' => '2024-04-28',
            'bio' => "Introducing Bella, the elegant Poodle with a heart full of love! At 2 years old, Bella radiates grace and intelligence. With her luxurious curly coat and expressive eyes, she's both stunning and affectionate. Bella is searching for a loving family to appreciate her playful spirit and unwavering loyalty.",
            'imageURL' => 'https://images.pexels.com/photos/11941913/pexels-photo-11941913.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Jax',
            'breed_id' => '6',
            'age' => '3 years old',
            'gender' => 'Male',
            'intakeDate' => '2024-04-28',
            'bio' => "Introducing Jax, the resilient Pit Bull with a heart full of courage! At 3 years old, Jax embodies strength and loyalty. With his sleek coat and piercing gaze, he's a true symbol of resilience and devotion. Jax is searching for a compassionate family to share his unwavering love and companionship.",
            'imageURL' => 'https://images.pexels.com/photos/16776582/pexels-photo-16776582/free-photo-of-black-pitbull-dog.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        Dog::factory()->create([
            'name' => 'Finn',
            'breed_id' => '10',
            'age' => '4 years old',
            'gender' => 'Male',
            'intakeDate' => '2024-04-28',
            'bio' => "Meet Finn, the charming Dachshund with a heart as big as his bark! At 4 years old, Finn is full of spunk and affection. With his adorable short legs and expressive eyes, he's irresistibly cute. Finn is searching for a loving home where he can share his playful spirit and endless cuddles.",
            'imageURL' => 'https://images.pexels.com/photos/12673580/pexels-photo-12673580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);
    }
}