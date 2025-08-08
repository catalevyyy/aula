@extends('layouts.app')

@section('content')
<h1>Gestión de Materias</h1>

<div class="mb-4 text-end">
    <a href="{{ route('materias.create') }}" class="btn btn-primary">
        + Crear Materia
    </a>
</div>

@if($materias->count())
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
        @foreach($materias as $materia)
        <tr>
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->nombre }}</td>
            <td>{{ $materia->descripcion }}</td>
            <td>
                <a href="{{ route('materias.edit', $materia) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('materias.destroy', $materia) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro querés borrar esta materia?');">
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
<p>No hay materias disponibles.</p>
@endif
@endsection
