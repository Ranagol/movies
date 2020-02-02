<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>@yield('title') </title>
</head>
<body>
  <main class="container">
    <section>
      @include('layouts.navbar')
      <div class="d-flex flex-row">
        <div class="col-9">
          @yield('content')
        </div>
        <aside class="alert alert-dark col-3">
          @include('layouts.sidebar')
        </aside>
      </div>
    </section>
  </main>
</body>
</html>