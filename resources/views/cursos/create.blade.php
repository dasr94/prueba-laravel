@extends('layouts.plantilla')
@section('title', 'Curso Create')
@section('content')
    <h1>Aqui podras crear un curso</h1>
    <form action="{{'cursos.store'}}" method="POST">
        @csrf

        <label>
            Curso: <br>
            <input type="text" name="name">
        </label>

        <label>
            Description: <br>
            <textarea name="descripcion" rows="10"></textarea>
        </label>
        <button type="submit">Guardar</button>
    </form>
@endsection