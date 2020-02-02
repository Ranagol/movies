
<h5>Sidebar, last five movies list</h5>


<p>
  <ul>
    @foreach($last5movies as $last5movie)
      <li>Title: 
        <a href="/movies/{{ $last5movie->id }}">{{ $last5movie->title}}</a>
        <p>Created: {{ $last5movie->created_at }}</p> 
      </li>
    @endforeach
  </ul>
</p>

