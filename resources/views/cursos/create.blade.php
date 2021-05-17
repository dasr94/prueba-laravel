@extends('layouts.plantilla')
@section('title', 'Curso Create')
@section('content')
    <h1>Aqui podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf

        <label>
            Curso: <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <p>*{{$message}}</p>
        @enderror
        <br>
        <label>
            Description: <br>
            <textarea name="descripcion" rows="10">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <p>*{{$message}}</p>
        @enderror
        <br>
        <button type="submit">Guardar</button>
    </form>
@endsection