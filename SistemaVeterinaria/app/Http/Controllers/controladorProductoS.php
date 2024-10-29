<?php

namespace App\Http\Controllers;

use App\Models\modeloPago;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        // Obtener todos los pagos junto con la información del producto, tipo y marca
        $compras = modeloPago::with(['producto', 'producto.tipo', 'producto.marca'])
            ->get()
            ->map(function ($pago) {
                return [
                    'imagenProducto' => $pago->producto->imagenProducto,
                    'idPago' => $pago->idPago,
                    'nombreProducto' => $pago->producto->nombreProducto,
                    'nombreTipo' => $pago->producto->tipo->nombreTipo,
                    'nombreMarca' => $pago->producto->marca->nombreMarca,
                    'precioProducto' => $pago->producto->precioProducto,
                    'cantidadProducto' => $pago->producto->cantidadProducto,
                ];
            });

        return view('compras.index', compact('compras'));
    }
}

