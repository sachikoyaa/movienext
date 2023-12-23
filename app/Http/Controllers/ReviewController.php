<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\review;
use App\Models\Movie;
use App\Models\User;


class ReviewController extends Controller
{
    public function addReview(Request $request, $movie_id)
    {
        $validated = $request->validate([
            'rating' => 'required',
            'review' => 'required'
        ]);

        $user_id = Auth::id();

        $review = new review();
        //assign user id and movie id
        $review->user_id = $user_id; 
        $review->movie_id = $movie_id;

        $review->rating = $request->input('rating');
        $review->review = $request->input('review');

        $review->save();

        // recalculating rating
        $newOverall = Review::where('movie_id', $movie_id)->avg('rating');

        // Update the 'overall' column in the 'movies' table
        $movie = Movie::find($movie_id);
        $movie->overall = $newOverall;
        $movie->save();

        return redirect()->route('moviedesc', ['id' => $movie_id]);

    }
}
