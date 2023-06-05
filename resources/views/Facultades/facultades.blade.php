@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Esta es la vista facultades</h1>
@stop

@section('content')
    <a href="/registrar_facultades" class="btn btn-success">Añadir</a>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo Facultad</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach($facultades as $f)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$f->codfacultad}}</td>
            <td>{{$f->nomfacultad}}</td>
            <td>
                <a href="/" class="btn btn-primary">Editar</a>
                <a href="{{route('elimina_fac', $f->codfacultad)}}" class="btn btn-danger">Eliminar</a>
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