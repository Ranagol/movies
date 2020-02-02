<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show(){
        $genreMovies = Movie::where('genre', 'scifi');
        return view('movies.genre', compact('genreMovies'));
    }
}
