<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function showMovies()
    {
        $movies = Movie::all(); 

        return view('homepage', ['movies' => $movies]);
    }

    public function movieDesc($id)
    {
        $movie = Movie::find($id);
    
        // Check if the movie exists
        if ($movie) {
            return view('moviedesc', ['movie' => $movie]);
        } else {
            // Handle case where movie with given ID is not found
            abort(404);
        }
    }
}
