@extends('base')
@section('contenido')
<div class="formulario">
    <div class="container-formulario-img">
        <svg xmlns="http://www.w3.org/2000/svg" class="icono-svg"
            viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
            <path
                d="M288 48c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48V192h40V120c0-13.3 10.7-24 24-24s24 10.7 24 24v72h24c26.5 0 48 21.5 48 48V464c0 26.5-21.5 48-48 48H432 336c-26.5 0-48-21.5-48-48V48zm64 32v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zm16 80c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H368zM352 272v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zm176-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H528zM512 368v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H528c-8.8 0-16 7.2-16 16zM224 160c0 6-1 11-2 16c20 14 34 38 34 64c0 45-36 80-80 80H160V480c0 18-15 32-32 32c-18 0-32-14-32-32V320H80c-45 0-80-35-80-80c0-26 13-50 33-64c-1-5-1-10-1-16c0-53 42-96 96-96c53 0 96 43 96 96z" />
        </svg>
        <div class="info-usuario">{{$temporal->apellido.' '.$temporal->nombres}} {{session()->get('sesion_data.msg_info')}}</div>
    </div>
    
    <div class="container-formulario-label">
        <form action="{{ url('validarprevio') }}" method="post">
            <div>
                @csrf

                @php
                $questions = [
                'titular_poseedor' => '¿Sos titular o poseedor de algún terreno o inmueble?',
                'beneficiario_planes_vivienda' => '¿Sos beneficiario de planes de vivienda?',
                'creditos_hipotecarios' => '¿Posee créditos hipotecarios (compra, ampliación o refacción de vivienda)?',
                'abonar_inmueble_cuotas' => '¿Se encuentra en condiciones de abonar un inmueble en cuotas?',
                ];
                @endphp

                @foreach ($questions as $name => $question)
                <label for="{{ $name }}" class="formulario-label">{{ $question }}</label>
                <label><input type="checkbox" name="{{ $name }}" id="{{ $name }}_si" value="SI"
                        class="formulario-input">SI</label>
                <label><input type="checkbox" name="{{ $name }}" id="{{ $name }}_no" value="NO"
                        class="formulario-input">NO</label>
                @endforeach
            </div>

            <div class="contenedor-botones-bottom">
                <a href="{{url('pedirdni')}}" class="button-form">Anterior</a>
                <button class="button-form" type="submit">Siguiente</button>
            </div>
        </form>
    </div>
</div>

@endsection