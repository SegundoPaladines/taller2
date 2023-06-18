@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Listado de Estudiantes</h1>
@stop

@section('content')
    <a href="{{route('f_reg_est')}}" class="btn btn-success">Añadir</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
                $controlador_estudiantes = new App\Http\Controllers\Estudiantes;
            @endphp
            @foreach($estudiantes as $e)
            <tr>
                <th scope="row">{{$i}}</th>
                <td scope="row">{{$e->codestudiante}}</td>
                <td scope="row">{{$e->nomestudiante}}</td>
                <td scope="row">{{$e->edadestudiante}}</td>
                <td scope="row">{{$e->fechaestudiante}}</td>
                <td scope="row">{{$e->sexestudiante}}</td>
                <td scope="row">{{$controlador_estudiantes->encontrarCiudad($e->ciudad)}}</td>
                <td scope="row">{{$controlador_estudiantes->encontrarBarrio($e->barrio)}}</td>
                <td scope="row">{{$controlador_estudiantes->encontrarPrograma($e->programa)}}</td>
                <td>
                    <a href="{{route('f_edit_est', $e->codestudiante)}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('elimina_est', $e->codestudiante)}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @php
                $i=$i+1;
            @endphp
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop