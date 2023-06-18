@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Listado de programas</h1>
@stop

@section('content')
    <a href="{{route('f_reg_prog')}}" class="btn btn-success">Añadir</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
                $controlador_programas = new App\Http\Controllers\Programas;
            @endphp
            @foreach($programas as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td scope="row">{{$p->codprograma}}</td>
                <td scope="row">{{$p->nomprograma}}</td>
                <td scope="row">{{$controlador_programas->encontrarFacultad($p->facultad)}}</td>
                <td>
                    <a href="{{route('f_edit_prog', $p->codprograma)}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('elimina_prog', $p->codprograma)}}" class="btn btn-danger">Eliminar</a>
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