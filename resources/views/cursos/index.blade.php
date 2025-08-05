@extends('layouts.app')

@section('content')
<h1>Gestión de Cursos</h1>

<div class="mb-4 text-end">
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">
        + Crear Curso
    </a>
</div>

@if($cursos->count())
<table class="table table-striped table-bordered">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->descripcion }}</td>
            <td>
                <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('cursos.destroy', $curso) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro querés borrar este curso?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay cursos disponibles.</p>
@endif
@endsection




