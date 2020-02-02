
@extends('layouts.master')
@section('title', 'Index')
@section('content')
  
    <!--MOVIE DISPLAYING -->
    <h1>List of all movies</h1>
    <p>
      <ul>
        @foreach($movies as $movie)
          <li>Title: 
            <a href="/movies/{{ $movie->id }}">{{ $movie->title}}</a>
            <p>Storyline: {{ $movie->storyline }}</p> 
          </li>
        @endforeach
      </ul>
    </p>
    
  

@endsection





