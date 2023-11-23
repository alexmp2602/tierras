<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inicie sesión para acceder a su cuenta.">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}"> <!-- Inclusión de una hoja de estilos externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <!-- Inclusión de fuentes de Google Fonts -->
    <title>SISTEMA DE TIERRAS - ACCESO PRIVADO</title>
    <link rel="icon" href="{{asset('assets/img/logo-sistemas.png')}}" /> <!-- Icono de la página web -->
</head>

<body>
    <div class="container-padre">
        <div class="container-login">
            <img src="{{asset('assets/img/logo-sistemas.png')}}" alt="Logo de Tu Sitio Web"> <!-- Inclusión de un logotipo -->
            <h1 class="titulo_login">Sistema Habitacional</h1>
            <div class="login-form">
                <form action="{{url('control')}}" method="post">
                    <div class="container-label">
                        <i class="fa-solid fa-user"></i> <!-- Icono de usuario -->
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="container-label">
                        <i class="fa-solid fa-lock"></i> <!-- Icono de candado -->
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                    </div>
                    <input type="submit" id="submit" value="Iniciar sesión">                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a3a0d2e0e8.js" crossorigin="anonymous"></script>
    <!-- Inclusión de iconos Font Awesome -->
</body>
</html>