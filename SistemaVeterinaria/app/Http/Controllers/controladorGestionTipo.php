<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloTipo;
use App\Models\modeloCategoria;

class controladorGestionTipo extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $categorias = modeloCategoria::all(); // Obtener todas las categorías

        if ($search) { // Verifica si hay un término de búsqueda
            $tipos = modeloTipo::with('categoria') // Relación con categoría
                ->where('nombreTipo', 'LIKE', "%$search%") // Filtra por nombre del tipo
                ->get();
        } else {
            $tipos = modeloTipo::with('categoria')->get(); // Obtener todos los tipos con sus categorías
        }

        // Envía los datos ($tipos, $categorias, $search) a la vista
        return view('producto/gestionTipo', compact('tipos', 'categorias', 'search'));
    }


    // Guardar un nuevo tipo de producto
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombreTipo' => 'required|string|max:255',
            'descripcionTipo' => 'required|string|max:255',
            'idCategoria' => 'required|exists:categoria,idCategoria', // Validar que exista el especialista
        ]);

        modeloTipo::create([
            'nombreTipo' => $request->input('nombreTipo'),
            'descripcionTipo' => $request->input('descripcionTipo'),
            'idCategoria' => $request->input('idCategoria'),
        ]);

        // Redirigir al índice de gestión de servicios con un mensaje de éxito
        return redirect()->route('GestionTipo.index')->with('success', 'Tipo de producto agregado correctamente');
    }

    // Actualizar un servicio
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreTipo' => 'required|string|max:255',
            'descripcionTipo' => 'required|string|max:255',
            'idCategoria' => 'required|exists:categoria,idCategoria',
        ]);

        $servicio = modeloTipo::findOrFail($id);

        $servicio->update([
            'nombreTipo' => $request->input('nombreTipo'),
            'descripcionTipo' => $request->input('descripcionTipo'),
            'idCategoria' => $request->input('idCategoria'),
        ]);

        return redirect()->route('GestionTipo.index')->with('success', 'Tipo de producto actualizado correctamente');
    }

    // Método para eliminar un servicio
    public function destroy($id)
    {
        // Busca el servicio por su ID
        $tipo = modeloTipo::findOrFail($id);

        // Elimina el servicio de la base de datos
        $tipo->delete();

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('GestionTipo.index')->with('success', 'Tipo de producto eliminado correctamente');
    }
}
