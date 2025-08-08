@extends('layouts.app')

@section('content')
<h1>Crear Materia</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('materias.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ old('nombre') }}">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{ old('descripcion') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Crear Materia</button>
    <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
