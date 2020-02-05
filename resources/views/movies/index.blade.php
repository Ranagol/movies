
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

              <!-- WATCHED STIKLIRANJE -->
              <form method="POST" action="/watched/{{ $movie->id }}">
                @csrf 
                @method('PATCH')
                <p>
                  <div>Watched:</div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="watched" id="inlineRadio1" value="1">
                      <label class="form-check-label" for="inlineRadio1">True</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="watched" id="inlineRadio2" value="0">
                      <label class="form-check-label" for="inlineRadio2">False</label>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </p>
              </form>
            </li>
            <hr>
          @endforeach
        </ul>
      </p>
    </div>
    
    <aside class="col-3 card">
      @include('layouts.sidebar')
    </aside>
    
  </div>




    
    
  

@endsection





