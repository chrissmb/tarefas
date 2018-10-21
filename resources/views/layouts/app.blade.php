<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <nav class="nav justify-content-start">
      <a class="nav-link" href="/">Inicio</a>
      <a class="nav-link" href="/tarefas">Tarefas</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
