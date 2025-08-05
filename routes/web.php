<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('menu');
});

// Ruta con todas las acciones CRUD para Cursos
Route::resource('cursos', CursoController::class);
