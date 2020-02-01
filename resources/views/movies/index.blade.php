
@extends('layouts.master')
@section('title', 'Index')
@section('content')
  <ul>
    <!--MOVIE DISPLAYING -->
    @foreach($movies as $movie)
    <li>Title: 
      <a href="/movies/{{ $movie->id }}">{{ $movie->title}}
      </a>
      <p>Storyline: {{ $movie->storyline }}</p>      
    </li>
    @endforeach
  </ul>

@endsection





