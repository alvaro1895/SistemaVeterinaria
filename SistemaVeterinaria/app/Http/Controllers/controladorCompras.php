<?php

namespace App\Http\Controllers;

use App\Models\modeloPago;
use Illuminate\Http\Request;

class ControladorCompras extends Controller
{
    public function index()
    {
        // Obtener todos los pagos que incluyen productos asociados
        $compras = modeloPago::with('producto.tipo', 'producto.marca')->get();

        // Retornar la vista 'compras' con los datos de las compras
        return view('usuario.compras', compact('compras'));

    }
}
