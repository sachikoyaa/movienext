<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviewsData = [
            [
                'review' => 'Amazing!',
                'user_id' => '1',
                'movie_id' => '12',
                'rating' => '8',
            ],
            [
                'review' => 'A must watch movie',
                'user_id' => '2',
                'movie_id' => '7',
                'rating' => '10',
            ],
        ];
        
        foreach ($reviewsData as $reviewData) {
            Review::create($reviewData);
        }
    }
}
