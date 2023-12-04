@extends('base')
@section('contenido')

<div class="formulario">
<div class="container-formulario-img">
        <img src="{{ asset('assets/img/large.svg') }}" alt="Imagen de primer fotograma">
    </div>
    <div class="container-formulario">
        <form action="{{ url('validardniconyuge') }}" method="post">
            @csrf <!-- Este token es necesario para la protección contra falsificación de solicitudes -->

            <label for="dniconyuge">DNI del Cónyuge:</label>
            <input type="text" name="dniconyuge" id="dniconyuge" required>

            <div class="contenedor-botones">
                <button class="button-form">Anterior</button>
                <button class="button-form" type="submit">Siguiente</button>
            </div>
        </form>
    </div>
</div>


@stop