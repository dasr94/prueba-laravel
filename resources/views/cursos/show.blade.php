@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso->name)
@section('content')
<h1>Bienvenido al curso: {{$curso->name}}</h1>
<p>{{$curso->descripcion}}</p>
<a href="{{route('cursos.index')}}">Regresar a cursos</a>
@endsection
