
@extends('layouts.master')
@section('title', 'Index')
@section('content')
  
  <!--MOVIE DISPLAYING -->
  

  <div class="d-flex flex-row">
    
    <div class="col-9">
      <h1>List of all movies</h1>
      <p>
        <ul>
          @foreach($movies as $movie)
            <li>Title: 
              <a href="/movies/{{ $movie->id }}">{{ $movie->title}}</a>
              <p>Storyline: {{ $movie->storyline }}</p>
              <p>Watched: {{ $movie->watched }}</p>
            </li>
          @endforeach
        </ul>
      </p>
    </div>
    
    <aside class="col-3 card">
      @include('layouts.sidebar')
    </aside>
    
  </div>




    
    
  

@endsection





