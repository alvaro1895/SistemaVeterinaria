<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Importa la clase Request de Laravel, que se usa para manejar y manipular solicitudes HTTP (por ejemplo, obtener datos de formularios enviados por el usuario).
use App\Models\modeloReserva; // Importa el modelo 'modeloReserva' para interactuar con la tabla de reservas en la base de datos.
use App\Models\modeloServicio; // Importa el modelo 'modeloServicio' para trabajar con los datos de la tabla de servicios en la base de datos.
use App\Models\modeloEspecialista; // Importa el modelo 'modeloEspecialista' para manipular datos de la tabla de especialistas en la base de datos.
use Illuminate\Support\Facades\Auth; // Importa la clase Auth, que permite acceder a funcionalidades de autenticación, como verificar el usuario actual o si un usuario está autenticado.
use Carbon\Carbon; //  biblioteca de Laravel para manejar fechas y horas.
use App\Models\User;

class controladorReserva extends Controller
{
    public function index() // Define una función pública llamada "index", generalmente usada para mostrar la página principal de una sección o listado.
    {
        $reserva = modeloReserva::all(); // Recupera todos los registros de la tabla 'reservas' utilizando el modelo 'modeloReserva' y los almacena en la variable $reserva.
        $listaServicios = modeloServicio::all(); // Recupera todos los registros de la tabla 'servicios' usando el modelo 'modeloServicio' y los almacena en la variable $listaServicios.
        $listaEspecialista = modeloEspecialista::all(); // Recupera todos los registros de la tabla 'especialistas' mediante el modelo 'modeloEspecialista' y los almacena en $listaEspecialista.
        $usuario = Auth::user(); // Obtiene la información del usuario autenticado (si está logueado) y la almacena en la variable $usuario.
        return view('Servicio/reservaServicio', compact('listaServicios', 'listaEspecialista', 'usuario'));
        // Retorna la vista 'reservaServicio' ubicada en la carpeta 'Servicio'. El método compact envía las variables $listaServicios, $listaEspecialista y $usuario a la vista para que puedan ser usadas en el frontend.
    }

    public function store(Request $request) // Define una función pública llamada "store" que recibe un objeto $request, utilizado para acceder a los datos enviados por el formulario de reserva.
    {
        // Validar los datos
        $request->validate([
            'idServicio' => 'required', // Valida que 'idServicio' esté presente en la solicitud. Si falta, muestra un error. 'idServicio' => 'required|exists:servicio,idServicio'
            'fechaReserva' => 'required|date', // Valida que 'fechaReserva' esté presente y sea una fecha válida.
            'horaReserva' => 'required|date_format:H:i' // Valida que 'horaReserva' esté presente y siga el formato de tiempo 'hora:minuto:segundo'.
        ]);

        // Crear una nueva reserva
        $reserva = new modeloReserva(); // Crea una nueva instancia de 'modeloReserva', que representa una nueva reserva en la base de datos.
        $reserva->idServicio = $request->input("idServicio"); // Asigna el valor de 'idServicio' recibido del formulario a la propiedad idServicio del modelo reserva.
        $reserva->fechaReserva = $request->input("fechaReserva"); // Asigna 'fechaReserva' de la solicitud al atributo fechaReserva del modelo.
        $reserva->horaReserva = $request->input("horaReserva"); // Asigna 'horaReserva' de la solicitud al atributo horaReserva del modelo.

        // Guardar la reserva en la base de datos
        $reserva->save(); // Guarda la nueva reserva en la base de datos.
        // Redireccionar o devolver una respuesta exitosa

        $reservaId = $reserva->idReserva;

        $idUser = Auth::user()->idUsers;

        return redirect()->route('direccion',[
                                                'idReserva' => $reservaId,
                                                'idUsuario'=>$idUser
                                            ]);
    }
}
