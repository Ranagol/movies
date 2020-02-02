@extends('layouts.master')

@section('title', 'Genres')

@section('content')



<div class="d-flex flex-row">
  
  <div class="col-9">
    <h3>Show all movies with the given genre</h3>
    <p>
      MOVIE GENRE LIST
    </p>
  </div>
  
  <aside class="col-3 card">
    @include('layouts.sidebar')
  </aside>
  
</div>














@foreach($genreMovies as $genreMovie)
  <li>Movie title: {{ $genreMovie->title }}</li>
  <div>Genre: {{$genreMovie->genre }}</div>
@endforeach






@endsection