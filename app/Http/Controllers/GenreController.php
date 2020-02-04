<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show($genre){
        $movies = Movie::where('genre', $genre)->get();
        $last5movies = Movie::orderBy('created_at', 'desc')->take(5)->get();
        return view('movies.index', compact('movies', 'last5movies'));
    }
}
