<?php

namespace App\Http\Controllers;

use App\Models\modeloPago; // Importamos el modelo
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controladorGestionPago extends Controller
{
    // Método para mostrar los pagos con búsqueda por nombre de usuario (pago virtual o presencial)
    public function index(Request $request)
    {
        // Captura el término de búsqueda ingresado por el usuario
        $search = $request->input('search');

        if ($search) {
            // Filtra los pagos por el nombre del usuario (usando LIKE para coincidencias parciales)
            $pagos = modeloPago::whereHas('user', function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })->get();
        } else {
            // Si no hay término de búsqueda, obtiene todos los registros
            $pagos = modeloPago::all();
        }

        // Devuelve la vista con los datos de los pagos y el término de búsqueda
        return view('Pagos/gestionPagos', compact('pagos', 'search'));
    }

    // Método para mostrar únicamente los pagos virtuales (excluyendo los pagos presenciales)
    public function mostrarPagosVirtuales(Request $request)
    {
        // Captura el término de búsqueda ingresado por el usuario
        $search = $request->input('search');

        if ($search) {
            // Filtra los pagos virtuales por el nombre del usuario (usando LIKE para coincidencias parciales)
            $pagos = modeloPago::whereDoesntHave('pagoPresencial') // Solo pagos virtuales
                ->whereHas('user', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%$search%");
                })->get();
        } else {
            // Si no hay término de búsqueda, obtiene todos los registros de pagos virtuales
            $pagos = modeloPago::doesntHave('pagoPresencial')->get();
        }

        // Devuelve la vista con los datos de los pagos virtuales y el término de búsqueda
        return view('Pagos/gestionPagos', compact('pagos', 'search'));
    }
}
