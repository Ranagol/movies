
@extends('layouts.master')
@section('title', 'Show')
@section('content')
  <!--PRIKAZIVANJE SVIH DETALJA FILMA -->
  <h2>Movie title: {{ $movie->title }}</h2>
  <p>Genre: {{ $movie->genre }}</p>
  <p>Director: {{ $movie->director }}</p>
  <p>Year: {{ $movie->year }}</p>
  <p>Storyline: {{ $movie->storyline }}</p>

  <!--PRIKAZIVANJE PRIPADAJUCEG KOMENTARA -->
  <hr>
  <h4>Comments:</h4>
  @foreach($comments as $comment)
    <div>
      At {{ $comment->created_at }} somebody commented: {{ $comment->content }}
    </div>
  @endforeach
  
  
  

@endsection


