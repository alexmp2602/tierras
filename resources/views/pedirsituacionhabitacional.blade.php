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
                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free -->
                    <path
                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                </svg>
            </div>
            <div class="container-form">
                <form class="form-grid" action="{{ url('validarsituacionhabitacional') }}"
                    method="post">
                    @csrf <!-- Este token es necesario para la protección contra falsificación de solicitudes -->

                    <label for="situacionhabitacional">Situación Habitacional:</label>
                    <select name="situacionhabitacional" id="situacionhabitacional" required
                        onchange="mostrarDocumentacion()">
                        <option value="alquilando">Alquiler</option>
                        <option value="casero">Casero</option>
                        <option value="comodato">Comodato</option>
                        <option value="prestamo_informal">Préstamo Informal</option>
                        <!-- Agrega más opciones según sea necesario -->
                    </select>

                    <div id="documentacionAlquiler" style="display: none;">
                        <label for="documentoAlquiler">Adjuntar Documentación de Contrato de Alquiler:</label>
                        <input type="file" name="documentoAlquiler" id="documentoAlquiler">
                    </div>

                    <!-- Agregar otros campos de documentación opcional según sea necesario -->
                    <div class="contenedor-botones">
                        <a href="{{url('pedirdomicilioalternativo')}}" class="button-form">Anterior</a>
                        <button type="submit" class="button-form">Siguiente</button>
                    </div>

                </form>

                <script>
                    // Función para mostrar/ocultar campos de documentación según la selección
function mostrarDocumentacion() {
    var situacionHabitacionalSelect = document.getElementById('situacionhabitacional');
    var documentacionAlquiler = document.getElementById('documentacionAlquiler');

    if (situacionHabitacionalSelect.value === 'alquilando') {
        // Si la situación habitacional es "Alquilando", mostrar el campo de documentación
        documentacionAlquiler.style.display = 'block';
    } else {
        // Si la situación habitacional no es "Alquilando", ocultar el campo de documentación
        documentacionAlquiler.style.display = 'none';
    }
}

// Llama a la función para verificar el valor inicial del select
mostrarDocumentacion();
                </script>
            </div>
        </div>
    </div>
</body>

</html>

@stop