<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie; 

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert movie records with image paths
        Movie::create([
            'image' => 'GOTG3.jpeg',
            'movieTitle' => 'Guardians Of The Galaxy Vol. 3',
            'movieDesc' => 'Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.',
            'rating' => '8' 
        ]);

        Movie::create([
            'image' => 'Aladdin.jpg',
            'movieTitle' => 'Aladdin',
            'movieDesc' => 'A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.',
            'rating' => '7' 
        ]);

        
    }
}
