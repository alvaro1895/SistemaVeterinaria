<?php

namespace App\Http\Controllers;

use App\Models\modeloPago; // Asegúrate de usar el nombre correcto del modelo
use Illuminate\Http\Request;

class controladorGestionPagoVirtual extends Controller
{
    // Método para mostrar los pagos virtuales y presenciales
    public function index(Request $request)
    {
        // Captura el término de búsqueda ingresado por el usuario
        $search = $request->input('search');

        // Obtener los pagos virtuales (los que no tienen una entrada en pagopresencial)
        $pagosVirtuales = modeloPago::doesntHave('pagoPresencial')
            ->when($search, function ($query) use ($search) {
                return $query->whereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('name', 'LIKE', "%$search%");
                });
            })
            ->get();

        // Obtener los pagos presenciales (los que tienen una entrada en pagopresencial)
        $pagosPresenciales = modeloPago::has('pagoPresencial')
            ->when($search, function ($query) use ($search) {
                return $query->whereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('name', 'LIKE', "%$search%");
                });
            })
            ->with('pagoPresencial') // Cargar la relación pagoPresencial para mostrar en la vista
            ->get();

        // Retornar la vista con ambos tipos de pagos
        return view('Pagos.gestionPagosVirtuales', compact('pagosVirtuales', 'pagosPresenciales', 'search'));
    }
}
