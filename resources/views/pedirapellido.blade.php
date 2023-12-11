@extends('base')

@section('contenido')

<div class="formulario">
    <div class="container-formulario">
        <div class="container-formulario-img">
            <svg class="icono-svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080"
                style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
                <path class="st2"
                    d="M535.61,124.09c-216.4,0-392.45,176.05-392.45,392.45c0,76.13,21.61,149.24,62.68,212.7l-59.62,131.33
						c-5.49,12.11-3.49,26.29,5.13,36.41c6.61,7.75,16.19,12.03,26.08,12.03c3.02,0,6.07-0.4,9.07-1.22l164.27-45.07
						C407.47,893.04,471.07,909,535.61,909c216.4,0,392.46-176.06,392.46-392.46C928.07,300.14,752.02,124.09,535.61,124.09z
						 M535.61,840.46c-57.31,0-113.72-15.25-163.09-44.1c-5.29-3.09-11.27-4.68-17.29-4.68c-3.04,0-6.09,0.41-9.07,1.22
						l-107.31,29.44L276.23,740c5.08-11.19,3.78-24.25-3.42-34.21c-39.98-55.42-61.11-120.86-61.11-189.25
						c0-178.61,145.3-323.91,323.91-323.91c178.61,0,323.92,145.3,323.92,323.91C859.53,695.15,714.22,840.46,535.61,840.46z" />
                <path class="st2" d="M686.5,575.31c-16.43-9.83-37.82-20.81-57.19-12.89c-14.85,6.08-24.34,29.33-33.96,41.21
						c-4.94,6.09-10.84,7.05-18.42,3.99c-55.76-22.21-98.49-59.44-129.26-110.72c-5.21-7.97-4.28-14.26,2-21.65
						c9.3-10.94,20.97-23.37,23.48-38.12c2.51-14.75-4.4-31.99-10.5-45.12c-7.79-16.78-16.5-40.72-33.31-50.21
						c-15.46-8.73-35.81-3.84-49.58,7.37c-23.76,19.35-35.23,49.67-34.88,79.72c0.1,8.54,1.15,17.06,3.14,25.3
						c4.8,19.82,13.96,38.33,24.27,55.93c7.77,13.27,16.22,26.15,25.34,38.53c29.82,40.52,66.93,75.73,109.89,102.04
						c21.47,13.15,44.59,24.68,68.53,32.59c26.86,8.87,50.78,18.11,79.78,12.6c30.36-5.76,60.29-24.55,72.34-53.81
						c3.56-8.66,5.35-18.31,3.36-27.46C727.41,595.71,701.8,584.46,686.5,575.31z" />
            </svg>

        </div>
        <div class="container-form">
            <form action="{{ url('validarapellido') }}" method="post">
                @csrf <!-- Asegura la protección contra CSRF -->
                <label for="apellido">Ingresa tu Apellido para continuar*</label>
                <input type="text" name="apellido" id="apellido" required placeholder="Escriba aquí su respuesta">
                <div class="contenedor-botones">
                    <a href="{{url('pedirnombre')}}" class="button-form">Anterior</a>
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