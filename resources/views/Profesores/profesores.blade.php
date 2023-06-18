@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
    <h1>Listado de Profesores</h1>
@stop

@section('content')
    <a href="{{route('f_reg_prof')}}" class="btn btn-success">Añadir</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Catedra</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($profesores as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td scope="row">{{$p->codprofesor}}</td>
                <td scope="row">{{$p->nomprofesor}}</td>
                <td scope="row">{{$p->catprofesor}}</td>
                <td>
                    <a href="{{route('f_edit_prof', $p->codprofesor)}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('elimina_prof', $p->codprofesor)}}" class="btn btn-danger">Eliminar</a>
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