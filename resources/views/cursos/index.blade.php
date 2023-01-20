@extends('layouts.plantilla')
@section('title', 'INDEX')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenido a la pagina principal de cursos</h1>
            <a href="{{ route('cursos.create') }}">Crear curso</a>
            <table class="table table-responsive">
                <thead>
                    <th>Acción</th>
                    <th>Nombre del curso</th>
                    <th>Descripciòn del curso</th>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>
                                {{-- <a href="{{ route('cursos.show' , $curso->id) }}">
                                    {{ $curso->id }}
                                </a> --}}
                                <button>
                                    <a href="{{ route('cursos.show' , $curso) }}">ver</a>
                                    {{-- <br>
                                    {{ route('cursos.show' , $curso) }} --}}
                                </button>
                            </td>
                            <td>
                                {{-- <a href="{{ route('cursos.show' , $curso->id) }}"> --}}
                                    {{ $curso->name }}
                                {{-- </a> --}}
                            </td>
                            <td>
                                {{-- <a href="{{ route('cursos.show' , $curso->id) }}"> --}}
                                    {{ $curso->descripcion }}
                                {{-- </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $cursos->links() }}
        </div>
    </div>
</div>
@endsection
