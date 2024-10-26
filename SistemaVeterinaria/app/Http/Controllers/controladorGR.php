<?php
namespace App\Http\Controllers; // Define el espacio de nombres para el controlador

use Illuminate\Http\Request; // Importa la clase Request para manejar las solicitudes HTTP
use App\Models\GestionReservaM; // Importa el modelo GestionReservaM para interactuar con la base de datos

class controladorGR extends Controller // Define la clase GestionReservaC que extiende de Controller
{
    // Mostrar todas las reservas
    public function index() // Método para mostrar todas las reservas
    {
        // Obtener todas las reservas
        $reservas = modeloReserva::all(); // Recupera todas las reservas desde la base de datos
        // Llamar a la vista gestionReserva dentro de la carpeta Servicio
        return view('Servicio.gestionReserva', compact('reservas')); // Retorna la vista con las reservas
    }

    // Mostrar formulario de edición
    public function edit($id) // Método para mostrar el formulario de edición de una reserva específica
    {
        $reserva = GestionReservaM::find($id); // Buscar reserva por ID
        return view('Servicio.editReserva', compact('reserva')); // Retorna la vista de edición con la reserva encontrada
    }

    // Actualizar reserva
    public function update(Request $request, $id) // Método para actualizar una reserva
    {
        $reserva = GestionReservaM::find($id); // Encontrar la reserva por ID
        $reserva->update($request->all()); // Actualizar la reserva con los nuevos datos recibidos
        return redirect()->route('reserva.index'); // Redirigir a la lista de reservas
    }

    // Eliminar reserva
    public function destroy($id) // Método para eliminar una reserva
    {
        $reserva = GestionReservaM::find($id); // Encontrar la reserva por ID
        $reserva->delete(); // Eliminar la reserva
        return redirect()->route('reserva.index'); // Redirigir a la lista de reservas
    }
}
