
@extends('layouts.master')
@section('title', 'Show')
@section('content')
  <h2>{{ $movie->title }}</h2>
  <p>{{ $movie->genre }}</p>
  <p>{{ $movie->director }}</p>
  <p>{{ $movie->year }}</p>
  <p>{{ $movie->storyline }}</p>
  

@endsection


