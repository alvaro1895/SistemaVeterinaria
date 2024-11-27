<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloServicio;
use App\Models\modeloEspecialista;

class controladorGestionServicio extends Controller
{
    // Método para mostrar todos los servicios
    public function index(Request $request)
    {
        $search = $request->input('search');
        $especialistas = modeloEspecialista::all(); // Obtener todos los especialistas

        if ($search) { //Verifica si hay un término de búsqueda
            $servicios = modeloServicio::with('especialista')

                ->where('nombreServicio', 'LIKE', "%$search%") //filtra los servicios por el nombre
                ->get(); //obtiene los resultados filtrados
        } else {
            $servicios = modeloServicio::with('especialista')->get();
        }
        // Envía los datos ($servicios, $especialistas y $search) a la vista.
        return view('servicio/gestionServicio', compact('servicios', 'especialistas', 'search'));
    }

    // Guardar un nuevo servicio
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombreServicio' => 'required|string|max:255',
            'precioServicio' => 'required|numeric',
            'descripcionServicio' => 'required|string|max:255',
            'idEspecialista' => 'required|exists:especialista,idEspecialista', // Validar que exista el especialista
        ]);

        modeloServicio::create([
            'nombreServicio' => $request->input('nombreServicio'),
            'precioServicio' => $request->input('precioServicio'),
            'descripcionServicio' => $request->input('descripcionServicio'),
            'idEspecialista' => $request->input('idEspecialista'),
        ]);
        // Redirigir al índice de gestión de servicios con un mensaje de éxito
        return redirect()->route('GestionServicio.index')->with('success', 'Servicio agregado correctamente');
    }

    // Actualizar un servicio
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreServicio' => 'required|string|max:255',
            'precioServicio' => 'required|numeric',
            'descripcionServicio' => 'required|string|max:255',
            'idEspecialista' => 'required|exists:especialista,idEspecialista', // Validar que exista el especialista
        ]);

        $servicio = modeloServicio::findOrFail($id);

        $servicio->update([
            'nombreServicio' => $request->input('nombreServicio'),
            'precioServicio' => $request->input('precioServicio'),
            'descripcionServicio' => $request->input('descripcionServicio'),
            'idEspecialista' => $request->input('idEspecialista'),
        ]);

        return redirect()->route('GestionServicio.index')->with('success', 'Servicio actualizado correctamente');
    }


    // Método para cambiar el estado de un servicio (Habilitado/Inhabilitado)
    public function toggleEstado($id)
    {
        // Encuentra el servicio por su ID
        $servicio = modeloServicio::findOrFail($id);

        // Alterna entre 'Habilitado' e 'Inhabilitado'
        if ($servicio->EstadoServicio === 'Habilitado') {
            $servicio->EstadoServicio = 'Inhabilitado';
        } else {
            $servicio->EstadoServicio = 'Habilitado';
        }

        // Guarda los cambios en la base de datos
        $servicio->save();

        // Redirecciona con un mensaje de éxito
        return redirect()->route('GestionServicio.index')->with('success', 'Estado del servicio actualizado correctamente.');
    }
    
}
