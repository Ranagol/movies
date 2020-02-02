
@extends('layouts.master')
@section('title', 'Show')
@section('content')
  <!--PRIKAZIVANJE SVIH DETALJA FILMA -->
  <h2>Movie title: {{ $movie->title }}</h2>
  <p>Genre: <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a> </p>
  <p>Director: {{ $movie->director }}</p>
  <p>Year: {{ $movie->year }}</p>
  <p>Storyline: {{ $movie->storyline }}</p>
  <hr>
  <!--PRIKAZIVANJE PRIPADAJUCEG KOMENTARA -->
  
  <h4>Comments:</h4>
  @foreach($comments as $comment)
    <div>
      At {{ $comment->created_at }} somebody commented: {{ $comment->content }}
    </div>
  @endforeach

  <!--KREIRANJE NOVOG KOMENTARA -->
  <hr>
  <h4>Create new comment</h4>
  <form method="POST" action="/movies/{{ $movie->id }}/comments">
    @csrf

    <div class="form-group">Your comment: 
      <input type="text" class="form-control" name="content" value = {{old('content')}}>
      
      <button class="btn btn-primary">Submit button</button>
    </div>
    @include('layouts.errors')
  </form>

  
  
  

@endsection


