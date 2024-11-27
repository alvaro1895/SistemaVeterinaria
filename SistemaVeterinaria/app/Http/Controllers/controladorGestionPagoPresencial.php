<?php

namespace App\Http\Controllers;

use App\Models\modeloPagoPresencial; // Importamos el modelo de pagos presenciales

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controladorGestionPagoPresencial extends Controller
{
    // Método para mostrar los pagos presenciales con búsqueda por nombre del titular
    public function index(Request $request)
    {
        // Captura el término de búsqueda ingresado por el usuario
        $search = $request->input('search');

        if ($search) {
            // Filtra los pagos presenciales por el nombre del titular (usando LIKE para coincidencias parciales)
            $pagosPresenciales = modeloPagoPresencial::where('nombre', 'LIKE', "%$search%")
                ->orWhere('apellido', 'LIKE', "%$search%")
                ->get();
        } else {
            // Si no hay término de búsqueda, obtiene todos los registros de pagos presenciales
            $pagosPresenciales = modeloPagoPresencial::all();
        }

        // Devuelve la vista con los datos de los pagos presenciales y el término de búsqueda
        return view('Pagos/gestionPagosPresencial', compact('pagosPresenciales', 'search'));
    }

    
}
