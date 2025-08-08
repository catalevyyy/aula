<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Mostrar la lista de cursos
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    // Mostrar el formulario para crear un nuevo curso
    public function create()
    {
        return view('cursos.create');
    }

    // Guardar un nuevo curso en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
        ]);

        // Crear el curso usando asignación masiva
        Curso::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir a la lista de cursos con un mensaje de éxito
        return redirect('/cursos')->with('success', 'Curso creado correctamente');
    }

    // Mostrar el formulario para editar un curso existente
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    // Actualizar un curso en la base de datos
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
        ]);

        // Buscar el curso y actualizarlo
        $curso = Curso::findOrFail($id);
        $curso->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir con mensaje de éxito
        return redirect('/cursos')->with('success', 'Curso actualizado correctamente');
    }

    // Eliminar un curso de la base de datos
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect('/cursos')->with('success', 'Curso eliminado correctamente');
    }
}
