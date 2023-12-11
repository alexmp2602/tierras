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
            <form action="{{ url('validarfechanacimiento') }}" method="post">
                @csrf <!-- Asegura la protección contra CSRF -->
                <label for="fecha_nacimiento">Ingresa tu Fecha de Nacimiento para continuar*</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required
                    value="{{$temporal->fech_nac}}">
                <div class="contenedor-botones">
                    <a href="{{url('pedircuil')}}" class="button-form">Anterior</a>
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

@stop