@extends('layouts.app')

@section('content')
<h1>Crear Nuevo Curso</h1>

<form action="{{ route('cursos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Curso</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Matemáticas" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" rows="3" class="form-control" placeholder="Descripción breve del curso"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Guardar Curso</button>
    <a href="{{ route('cursos.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
</form>
@endsection

