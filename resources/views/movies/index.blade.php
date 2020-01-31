<ul>
  @foreach($movies as $movie)
   <li>
    <a href="/movies/{{ $movie->id }}">{{ $movie->title}}
    </a>
    <p>{{ $movie->storyline }}</p>
   </li>
  @endforeach
</ul>