<?php

namespace App\Http\Controllers;

use App\Models\modeloReserva;
use App\Models\Reservas;
use Illuminate\Http\Request;

class ControladorReservas extends Controller
{
    public function index()
    {
        // Obtener todas las reservas
        $reservas = modeloReserva::all();

        return view('usuario.reservas', compact('reservas')); // Cargar la vista correcta
    }
}
