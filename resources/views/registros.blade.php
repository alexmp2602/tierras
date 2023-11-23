@extends('base')
@section('contenido')
<h1>Registros</h1>
@if(count($registros))        
        <table id="tabla" class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>                        

                    </tr>
                </thead>
                <tbody>                
                @foreach($registros as $reg)
                    <tr>
                        <td>{{ $reg->codigo}}</td>
                        <td>{{ $reg->nombre}}</td>
                    </tr>                       
                @endforeach 
                </tbody>
        </table>
@endif                    
<a href="{{url('/')}}">Volver</a>
@stop