@extends('base')
@section('contenido')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Titular</title>
</head>

<body>
    <div class="formulario">
        <div class="container-formulario">
            <div class="container-formulario-img">
                <svg xmlns="http://www.w3.org/2000/svg" class="icono-svg"
                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path
                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                </svg>
            </div>
            <div class="container-form">
                <form style="display:grid" class="form-grid" action="{{ url('validardomicilio') }}" method="post">
                    @csrf <!-- Este token es necesario para la protección contra falsificación de solicitudes -->

                    <label for="calle">Calle:</label>
                    <input type="text" name="calle" id="calle" required>

                    <label for="numero">Número de casa:</label>
                    <input type="text" name="numero" id="numero" required>

                    <label for="entreCalles">Entre calles:</label>
                    <input type="text" name="entreCalles" id="entreCalles" required>

                    <label for="piso">Piso:</label>
                    <input type="text" name="piso" id="piso">

                    <label for="departamento">Departamento:</label>
                    <input type="text" name="departamento" id="departamento">

                    <div class="contenedor-botones">
                    <a href="{{url('pedirlugartrabajo')}}" class="button-form">Anterior</a>
                    <button class="button-form" type="submit">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

@stop