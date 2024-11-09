<?php

namespace App\Http\Controllers;

use App\Models\modeloReserva;
use App\Models\modeloPago;
use App\Models\Reservas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorReservas extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->idUsers;

        $pago = modeloPago::with(['user', 'reserva'])->where('idUsers', $idUser)->get();


        return view('usuario.reservaS', compact('pago')); // Cargar la vista correcta
    }
}
