@extends('base')

@section('contenido')

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
            <form action="{{ url('validarlugartrabajo') }}" method="post" enctype="multipart/form-data" id="formularioLugarTrabajo">
                @csrf <!-- Asegura la protección contra CSRF -->                
                <label for="nombreempresa">Nombre de la Empresa:</label>
                <input type="text" name="nombreempresa" id="nombreempresa" required>

                <label for="direccionempresa">Dirección de la Empresa:</label>
                <input type="text" name="direccionempresa" id="direccionempresa" required>

                <label for="puesto">Puesto de Trabajo:</label>
                <input type="text" name="puesto" id="puesto" required>

                <!-- Campo de selección para la remuneración -->
                <label for="remuneracion">Remuneración:</label>
                <select name="remuneracion" id="remuneracion" required onchange="mostrarDocumentacion()">
                    <option value="formal">Remuneración Formal</option>
                    <option value="informal">Remuneración Informal</option>
                </select>

                <!-- Campo de documentación de registro de haberes (inicialmente oculto) -->
                <div id="documentacionFormal" style="display: none;">
                    <label for="documentoHaberes">Adjuntar Documentación de Registro de Haberes:</label>
                    <input type="file" name="documentoHaberes" id="documentoHaberes" required>
                </div>

                <!-- Campo para la cuota mensual -->
                <label for="cuotaMensual">¿Está en condiciones de pagar una cuota mensual por el terreno?</label>
                <select name="cuotaMensual" id="cuotaMensual" required>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <div class="contenedor-botones">
                    <a href="{{url('pedircorreo')}}" class="button-form">Anterior</a>
                    <button class="button-form" type="button" onclick="irASiguientePagina()">Siguiente</button>
                </div>
            </form>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</div>

<script>
    function mostrarDocumentacion() {
        var remuneracionSelect = document.getElementById('remuneracion');
        var documentacionFormal = document.getElementById('documentacionFormal');

        if (remuneracionSelect.value === 'formal') {
            // Si elige "Remuneración Formal", mostrar el campo de documentación
            documentacionFormal.style.display = 'block';
        } else {
            // Si elige "Remuneración Informal", ocultar el campo de documentación
            documentacionFormal.style.display = 'none';
        }
    }

    function irASiguientePagina() {
        document.getElementById('formularioLugarTrabajo').submit();
    }
</script>

@stop



