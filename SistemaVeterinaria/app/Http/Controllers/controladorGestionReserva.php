<?php

namespace App\Http\Controllers;

use App\Models\modeloPago;
use App\Models\modeloReserva;
use App\Models\User;
use Illuminate\Http\Request;

class controladorGestionReserva extends Controller
{
    // Método para mostrar la lista de pagos
    public function index(Request $request)
    {
        // // Obtén todos los pagos o lo que necesites mostrar
        // $pagos = modeloPago::all(); // Ajusta esto según tus necesidades

        // Obtén todos los pagos con los datos de usuario y reserva asociados
        $pagos = modeloPago::with(['user', 'reserva.servicio.especialista'])->get();

        // Devuelve la vista con los pagos
//  para ver que datos me entrega la consulta

//        dd($pagos);
        return view('Servicio/gestionReserva', compact('pagos')); // Reemplaza 'nombreDeTuVista' con el nombre de tu vista


    }

    // Método para actualizar el pago
    public function update(Request $request, $idPago)
    {
        $pago = modeloPago::findOrFail($idPago);
        $request->validate([
            'nombreEspecialista' => 'required|string|max:255',
            'fechaReserva' => 'required|date',
            'horaReserva' => 'required',
        ]);

        // Actualizar los campos de la relación
        $pago->reserva->servicio->especialista->nombreEspecialista = $request->input('nombreEspecialista');
        $pago->reserva->fechaReserva = $request->input('fechaReserva');
        $pago->reserva->horaReserva = $request->input('horaReserva');

        $pago->push();  // Guarda todas las relaciones

        return redirect()->route('pagos.index')->with('success', 'Reserva actualizada correctamente');
    }


    // Editar un usuario
    public function edit($idPago)
    {
        // Obtener el usuario por ID
        $pago = User::findOrFail($idPago);
        return view('pago.edit', compact('pagos'));
    }

    // Método para eliminar el pago
    public function destroy($idPago)
    {
        $pago = modeloPago::findOrFail($idPago);
        $pago->delete();

        return redirect()->route('pagos.index')->with('success', 'Pago eliminado correctamente');
    }



}
