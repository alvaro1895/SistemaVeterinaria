<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class controladorPersona extends Controller
{
    //steven
    public function index()
    {
        // Obtener los datos de la persona desde la base de datos.
        $persona = User::find(2); // Cambia el ID según sea necesario. deberia salir del logeo

        // Retornar la vista con los datos de la persona.
        return view('usuario.persona', compact('persona'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo' => 'required|email|max:255',
        ]);

        $persona = User::findOrFail($id);
        $persona->name = $request->nombre;
        $persona->lastname = $request->apellido;
        $persona->phone = $request->telefono;
        $persona->email = $request->correo;
        $persona->save();

        return redirect()->back()->with('success', 'Datos actualizados correctamente.');
    }
}
