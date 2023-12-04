@extends('base')

@section('contenido')

<div class="formulario">
    <div class="container-formulario-img">
        <img src="{{ asset('assets/img/default-firstframe.svg') }}" alt="Imagen de primer fotograma">
    </div>
    <div class="container-formulario">
        <form action="{{ url('validarapellido') }}" method="post">
            @csrf <!-- Asegura la protección contra CSRF -->
            <label for="dni">Apellido:</label>
            <input type="text" name="dni" id="dni" required placeholder="Ingrese su apellido aquí">
            <div class="contenedor-botones">
                <button class="button-form">Anterior</button>
                <button class="button-form" type="submit">Siguiente</button>
            </div>
        </form>
    </div>
</div>

@stop