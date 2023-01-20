@extends('layouts.plantilla')
@section('title', 'Curso '. $curso->name)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenido al curso: {{ $curso->name }}</h1>
            <button>
                <a href="{{ route('cursos.index') }}">Volver a cursos</a>
            </button>
            <button>
                <a href="{{ route('cursos.edit', $curso) }}">Editar cursos</a>
            </button>
            <p>
                <strong>Categoria: </strong>{{ $curso->categoria }}
            </p>
            <p>
                {{ $curso->descripcion }}
            </p>
            <form action="{{ route('cursos.destroy', $curso) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">
                    Eliminar registro
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
