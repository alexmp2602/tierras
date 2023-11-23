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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-padre">
        @yield('contenido')
    </div>



    <!-- Bootstrap-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>

<!-- FontAwesome-->

<script src="https://kit.fontawesome.com/0c5da2f650.js" crossorigin="anonymous"></script>
</body>
</html>