<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inicie sesión para acceder a su cuenta.">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"> <!-- Inclusión de una hoja de estilos externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <!-- Inclusión de fuentes de Google Fonts -->
    <title>SISTEMA DE REGISTRO HABITACIONAL</title>
    <link rel="icon" href="{{asset('assets/img/logo-sistemas.png')}}" /> <!-- Icono de la página web -->
</head>

<body>
    <div style="display:flex; flex-direction: column; justify-content:center; align-items: center;">
        @yield('contenido')
    </div>
</body>
</html>