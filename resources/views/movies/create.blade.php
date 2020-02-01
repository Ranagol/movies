@extends('layouts.master')

@section('title', 'Create')

@section('content')

<h2>Create a new movie</h2>


<form method="POST" action="/movies">
  @csrf
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="movie title" name="title" value = {{old('title')}}>
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="movie genre" name="genre"  value = {{old('genre')}}>
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="director" name="director"  value = {{old('director')}}>
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="year" name="year"  value = {{old('year')}}>
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="storyline" name="storyline"  value = {{old('storyline')}}>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@include('layouts.errors')



@endsection