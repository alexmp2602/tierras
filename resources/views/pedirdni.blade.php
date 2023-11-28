@extends('base')
@section('contenido')

        <div class="container py-5">
            <!-- Primer formulario -->
            <form class="row g-3 container-form" autocomplete="off" action="{{ url('buscardni') }}" method="post">
                <h2><span>Ingrese su documento</span></h2>
                @csrf
                <div class="col-md-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="number" class="form-control" id="dni" name="dni"
                        placeholder="Ingrese su numero de documento">
                    <span class="badge text-danger errors-dni"></span>
                </div>
                
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
            </form>
        </div>
        @stop



