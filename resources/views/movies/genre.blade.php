@extends('layouts.master')

@section('title', 'Genres')

@section('content')

<h3>Show all movies with the given genre</h3>


@foreach($genreMovies as $genreMovie)
  <li>Movie title: {{ $genreMovie->title }}</li>
  <div>Genre: {{$genreMovie->genre }}</div>
@endforeach

@endsection