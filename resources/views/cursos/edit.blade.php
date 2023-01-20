@extends('layouts.plantilla')
@section('title', 'EDIT')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenido a la pagina donde puede editar el cursos</h1>
            <form action="{{ route('cursos.update', $curso) }}" method="post">
                @method('put')
                @csrf
                <label>
                    Nombre:<br>
                    <input type="text" name="name" value="{{ old('name', $curso->name) }}">
                </label>
                @error('name')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror
                <input type="hidden" name="slug" value="slug">
                <br>
                <label>
                    Descripción:<br>
                    <textarea name="descripcion" cols="23" rows="5">{{ old('descripcion',$curso->descripcion) }}</textarea>
                </label>
                @error('descripcion')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror
                <br>
                <label>
                    Categoría:<br>
                    <input type="text" name="categoria" value="{{ old('categoria',$curso->categoria) }}">
                </label>
                @error('categoria')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror
                <br><br>
                <input type="submit" value="Actualizar curso">
            </form>
        </div>
    </div>
</div>
@endsection
