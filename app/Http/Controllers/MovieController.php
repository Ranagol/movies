<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Comment;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$movies = Movie::all();
        $movies = Movie::where('watched', false)->get();
        $last5movies = Movie::orderBy('created_at', 'desc')->take(5)->get();
        return view('movies.index', compact('movies', 'last5movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'genre' => 'required|min:3',
            'year' => 'integer|between:1920,2020',
            'storyline' => 'max:1000',
            'watched' => 'required',
        ]);
        
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->year = $request->year;
        $movie->storyline = $request->storyline;
        $movie->watched = $request->watched;
        $movie->save();
        return redirect('/movies');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $comments = $movie->comments;
        return view('movies.show', compact('movie', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    //*********************************************** */
    public function updateWatched(Request $request, Movie $movie)
    {
        $movie->watched =$request->watched;
        $movie->save();
        return redirect('/movies');
    }
    //********************************************** */





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
