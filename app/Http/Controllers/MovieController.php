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

}
