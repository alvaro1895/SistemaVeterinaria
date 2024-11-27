<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\modeloReserva;
use App\Models\modeloServicio;
use App\Models\modeloEspecialista;
use Illuminate\Support\Facades\Auth;
use App\Models\modeloPago;
use App\Models\modeloPagoPresencial;

class controladorReservaAdmin extends Controller
{
    // Método index para mostrar la vista de reserva de servicios
    public function index()
    {
        // Obtén la lista de servicios y especialistas desde la base de datos
        $listaServicios = modeloServicio::all();
        $listaEspecialista = modeloEspecialista::all();
        $usuario = Auth::user(); // Obtiene la información del usuario autenticado

        // Retorna la vista de reservaServicioAdmin con los datos necesarios
        return view('Servicio/reservaServicioAdmin', compact('listaServicios', 'listaEspecialista', 'usuario'));
    }

    public function store(Request $request)
    {
        // Validar los datos de la reserva
        $request->validate([
            'idServicio' => 'required', 
            'fechaReserva' => 'required|date',
            'horaReserva' => 'required|date_format:H:i',
            'nombrePagoPresencial' => 'required',
            'apellidoPagoPresencial' => 'required',
            'celularPagoPresencial' => 'required|regex:/^[0-9]{9}$/',
            'correoPagoPresencial' => 'required|email',
        ]);

        // Crear una nueva reserva
        $reserva = new modeloReserva();
        $reserva->idServicio = $request->input("idServicio");
        $reserva->fechaReserva = $request->input("fechaReserva");
        $reserva->horaReserva = $request->input("horaReserva");

        // Guardar la reserva en la base de datos
        $reserva->save();

        // Obtener el ID de la reserva recién creada
        $reservaId = $reserva->idReserva;

        $idUser = Auth::user()->idUsers;

        // Crear un nuevo pago con datos por defecto (solo para asociarlo con la reserva)
        $pago = new modeloPago();
        $pago->idReserva = $reservaId;
        $pago->nombreTitular = 'no data';
        $pago->numeroTarjeta = 'no data';
        $pago->cvv = 1;
        $pago->añoVencimiento = 1;
        $pago->mesVencimiento = 1;
        $pago->idUsers = $idUser;

        // Guardar el pago en la base de datos
        $pago->save();

        // Crear un nuevo registro en pagoPresencial
        $pagoPresencial = new modeloPagoPresencial();
        $pagoPresencial->idPago = $pago->idPago; // Relacionar con el pago recién creado
        $pagoPresencial->nombre = $request->input("nombrePagoPresencial");
        $pagoPresencial->apellido = $request->input("apellidoPagoPresencial");
        $pagoPresencial->celular = $request->input("celularPagoPresencial");
        $pagoPresencial->correo = $request->input("correoPagoPresencial");

        // Guardar el pago presencial en la base de datos
        $pagoPresencial->save();

        // Redireccionar a la vista de gestión de pagos presenciales con mensaje de éxito
        return redirect()->route('gestionPago.presencial')->with('success', 'Reserva y Pago Presencial registrados exitosamente');
    }
}
