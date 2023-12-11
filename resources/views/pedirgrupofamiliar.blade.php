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
            <form action="{{ url('validargrupofamiliar') }}" method="post">
                @csrf <!-- Este token es necesario para la protección contra falsificación de solicitudes -->

                <div id="grupoFamiliar">
                    <div class="miembro-familiar">
                        <label for="nombre">Nombre y apellido:</label>
                        <input type="text" name="nombre" id="nombre" required>

                        <label for="parentescoFamiliar1">Parentesco:</label>
                        <select name="parentescoFamiliar1" id="parentescoFamiliar1" required>
                            <option value="esposo">Abuelo/a</option>
                            <option value="esposo">Amigo/a</option>
                            <option value="hermano">Hermano/a</option>
                            <option value="esposo">Esposo/a</option>
                            <option value="esposo">Expareja</option>
                            <option value="hijo">Hijo/a</option>
                            <option value="hermano">Primo/a</option>
                            <option value="esposo">Madre/Padre/Tutor</option>
                            <option value="esposo">Nieto/a</option>
                            <option value="esposo">Nuera/Yerno</option>
                            <option value="esposo">Sobrino/a</option>
                            <option value="esposo">Suegro/a</option>

                            <!-- Agrega más opciones según sea necesario -->
                        </select>

                        <label for="edadFamiliar1">Edad:</label>
                        <input type="number" name="edadFamiliar1" id="edadFamiliar1" required>

                        <label for="ingresosFamiliar1">DNI:</label>
                        <input type="text" name="ingresosFamiliar1" id="ingresosFamiliar1" required>

                        <label for="ocupacionFamiliar1">Ocupación:</label>
                        <input type="text" name="ocupacionFamiliar1" id="ocupacionFamiliar1" required>

                        <label for="ingresosFamiliar1">Ingresos:</label>
                        <input type="text" name="ingresosFamiliar1" id="ingresosFamiliar1" required>

                    </div>
                    <!-- Puedes agregar más campos para otros miembros del grupo familiar según sea necesario -->

                    <!-- Sección para AGREGAR HIJOS Y/O FAMILIARES -->
                    <div class="agregar-familiar">
                        <label style="padding:20px 0">AGREGAR PERSONAS QUE SE IRÍAN A VIVIR CON UD, EN CASO
                            DE SALIR
                            SORTEADOS:</label>
                        <button style="height:fit-content" class="button-form" type="button" onclick="agregarFamiliar()">
                            <i class="fas fa-plus"></i> Agregar persona
                        </button>
                    </div>
                </div>

                <!-- Información del grupo familiar -->
                <label for="grupoFamiliar">Grupo familiar:</label>

                <div class="contenedor-botones">
                    <a href="{{url('pedircantidadhijos')}}" class="button-form">Anterior</a>
                    <button class="button-form" type="submit">Siguiente</button>
                </div>
            </form>
        </div>
    </div>
    <div id="modalFamiliar" class="modal">
        <div class="modal-contenido">
            <span class="cerrar-modal" onclick="cerrarModal()">&times;</span>
            <!-- Aquí puedes mostrar información adicional o mensajes sobre el familiar agregado -->
            <h2>Familiar Agregado</h2>
            <p>Nombre: <span id="modalNombre"></span></p>
            <!-- Agrega más información según sea necesario -->

            <!-- Puedes personalizar este modal según tus necesidades -->
        </div>
    </div>
</div>
<!-- Script para la lógica de agregar familiares -->
<script>
    // Arreglo para almacenar la información de los familiares
    var familiares = [];

    function agregarFamiliar() {
        // Obtener los valores de los campos
        var nombre = document.getElementById('nombreFamiliar1').value;
        var apellido = document.getElementById('apellidoFamiliar1').value;
        var parentesco = document.getElementById('parentescoFamiliar1').value;
        var edad = document.getElementById('edadFamiliar1').value;
        var ocupacion = document.getElementById('ocupacionFamiliar1').value;
        var ingresos = document.getElementById('ingresosFamiliar1').value;

        // Crear un objeto con la información del familiar
        var nuevoFamiliar = {
            nombre: nombre,
            apellido: apellido,
            parentesco: parentesco,
            edad: edad,
            ocupacion: ocupacion,
            ingresos: ingresos
        };

        // Agregar el nuevo familiar al arreglo
        familiares.push(nuevoFamiliar);

        // Limpiar los campos del formulario
        limpiarCampos();

        // Mostrar información en la consola (puedes eliminar esto en la versión final)
        console.log('Familiares:', familiares);

        // Llama a la función para mostrar el modal con la información del último familiar agregado
        mostrarInformacionModal();
    }

    function limpiarCampos() {
        // Limpiar los campos del formulario
        document.getElementById('nombreFamiliar1').value = '';
        document.getElementById('apellidoFamiliar1').value = '';
        document.getElementById('parentescoFamiliar1').value = 'hijo'; // Establecer valor predeterminado
        document.getElementById('edadFamiliar1').value = '';
        document.getElementById('ocupacionFamiliar1').value = '';
        document.getElementById('ingresosFamiliar1').value = '';
    }
</script>
<!-- Script adicional para manejar el modal -->
<script>
    function abrirModal() {
        var modal = document.getElementById('modalFamiliar');
        modal.style.display = 'block';
    }

    function cerrarModal() {
        var modal = document.getElementById('modalFamiliar');
        modal.style.display = 'none';
    }

    function mostrarInformacionModal() {
        // Obtener información del último familiar agregado (puedes ajustar esto según la estructura de tu arreglo)
        var ultimoFamiliar = familiares[familiares.length - 1];

        // Mostrar información en el modal
        document.getElementById('modalNombre').innerText = ultimoFamiliar.nombre;

        // Puedes agregar más líneas para mostrar más información según sea necesario

        // Abrir el modal
        abrirModal();
    }
</script>

@stop