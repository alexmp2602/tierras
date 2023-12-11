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
            <form action="{{ url('validardiscapacidad') }}" method="post" id="formularioDiscapacidad">
                @csrf <!-- Asegura la protección contra CSRF -->                
                <label for="discapacidad">¿Persona con Discapacidad?</label>
                <input type="checkbox" name="discapacidad" id="discapacidad" onchange="validarDiscapacidad()">
                
                <div id="modalDiscapacidad" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px;">
                        <p>Texto de ayuda y documentación de referencia.</p>
                        <p>Aquí puedes incluir imágenes y más información sobre la documentación válida.</p>
                        <button onclick="cerrarModal(event)">Cerrar</button>
                    </div>
                </div>
                    <label for="documento">Adjuntar Documentación:</label>
                    <input type="file" id="documento" name="documento" class="form-control">
                    <div class="contenedor-botones">
                        <a href="{{ url('pedirestadocivil') }}" class="button-form">Anterior</a>
                        <button type="submit" class="button-form">Siguiente</button>
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
    function validarDiscapacidad() {
        var checkboxDiscapacidad = document.getElementById('discapacidad');
        var modalDiscapacidad = document.getElementById('modalDiscapacidad');

        if (checkboxDiscapacidad.checked) {
            // Si elige "SI", mostrar el modal
            modalDiscapacidad.style.display = 'block';
        } else {
            // Si elige "NO", ocultar el modal
            modalDiscapacidad.style.display = 'none';
        }
    }

    function cerrarModal() {
        var modalDiscapacidad = document.getElementById('modalDiscapacidad');
        modalDiscapacidad.style.display = 'none';
    }

    function mostrarAyuda() {
        var modalDiscapacidad = document.getElementById('modalDiscapacidad');
        modalDiscapacidad.style.display = 'block';
    }
    function cerrarModal(event) {
    event.preventDefault();
    var modalDiscapacidad = document.getElementById('modalDiscapacidad');
    modalDiscapacidad.style.display = 'none';
}
</script>

@stop


