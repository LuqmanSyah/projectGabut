<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luqman Gabut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    @include('components.navbar')

    @yield('content')

    <div class="container">
      <div class="card border-0 mx-auto p-3 bg-dark text-white shadow-lg mt-5 mb-2">
        <p class="text-center">Teruslah berjalan bersama kami di dunia digital yang terus berkembang dan menjelajahi kemungkinan-kemungkinan baru bersama <strong>WebGabut</strong></p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
  </body>
</html>