<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Panel Alumno')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/css.css') }}">
  
  
  


</head>
<body>

  {{-- Encabezado --}}
  @include('portails.header')

  {{-- Contenido principal dinámico --}}
  <div class="container">
    @yield('content')
  </div>

  {{-- Sección fija: info institucional y logout --}}
  @include('portails.informacion')



</body>
</html>
