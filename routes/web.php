<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

// Ruta raíz que muestra la vista menú
Route::get('/', function () {
    return view('menu');
});

// Rutas CRUD para cursos
Route::resource('cursos', CursoController::class);

// Rutas CRUD para materias
Route::resource('materias', MateriaController::class);

// Rutas para otras secciones (crear las vistas correspondientes en resources/views)
Route::view('/aulas', 'aulas.index')->name('aulas.index');
Route::view('/reservas', 'reservas.index')->name('reservas.index');
Route::view('/cortinas', 'cortinas.index')->name('cortinas.index');
Route::view('/aire-acondicionado', 'aire-acondicionado.index')->name('aire-acondicionado.index');
Route::view('/focos', 'focos.index')->name('focos.index');

// Opcional: Ruta fallback para manejar URLs no definidas y evitar errores 404 crudos
// Route::fallback(function () {
//     return redirect('/');
// });
