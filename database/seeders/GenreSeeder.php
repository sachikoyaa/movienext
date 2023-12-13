<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'genre' => 'Comedy',
            'genreDesc' => 'comedy',
        ]);

        Genre::create([
            'genre' => 'Thriller',
            'genreDesc' => 'thriller',
        ]);

        Genre::create([
            'genre' => 'Fantasy',
            'genreDesc' => 'fantasy',
        ]);

        Genre::create([
            'genre' => 'Action',
            'genreDesc' => 'action',
        ]);

        Genre::create([
            'genre' => 'Romance',
            'genreDesc' => 'romance',
        ]);

        Genre::create([
            'genre' => 'Animation',
            'genreDesc' => 'animation',
        ]);

        Genre::create([
            'genre' => 'Drama',
            'genreDesc' => 'drama',
        ]);

        Genre::create([
            'genre' => 'Sci-Fi',
            'genreDesc' => 'Science Fiction',
        ]);
    }
}
