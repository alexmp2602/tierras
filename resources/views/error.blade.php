@extends('base')
@section('contenido')
   

        <div class="container py-5">
            <!-- Primer formulario -->
                <h2 id="titulo-form1"><span class="titulo-login">Error de datos ingresados</span></h2>

                <div class="alert alert-success"><h1>{{$error}}</h1></div>
                <div class="col-1">
                    <a href="{{url('/')}}" class="btn btn-danger">Volver</a>
                </div>
            </form>
        </div>
        @stop