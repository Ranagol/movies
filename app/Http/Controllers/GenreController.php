<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show(){
        $genreMovies = Movie::where('genre', 'scifi');
        $last5movies = Movie::orderBy('created_at', 'desc')->take(5)->get();
        return view('movies.genre', compact('genreMovies', 'last5movies'));
    }
}
