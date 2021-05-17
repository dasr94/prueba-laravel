@extends('layouts.plantilla');
@section('title', 'Editar Curso');
@section('content')
<h1>Aqui puedes editar un curso</h1>
<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf
    @method('put')
    <label>
        Curso: <br>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label>
    <br>
    @error('name')
            <p>*{{$message}}</p>
    @enderror
    <label>
        Description: <br>
        <textarea name="descripcion" rows="10">{{old('descripcion', $curso->descripcion)}}</textarea>
    </label>
    <br>
    @error('descripcion')
            <p>*{{$message}}</p>
    @enderror
    <br>
    <button type="submit">Actualizar Formulario</button>
</form>
    
@endsection    
