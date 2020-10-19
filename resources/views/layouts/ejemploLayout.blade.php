<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nombre app - @yield('titulo')</title>
</head>
<body>
    @section('barra lateral')
        esto es barra lateral
    @show

    <div class="container">
        @yield('contenido')
    </div>
</body>
</html>