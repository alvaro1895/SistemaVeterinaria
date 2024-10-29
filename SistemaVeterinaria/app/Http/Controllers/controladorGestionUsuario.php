<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControladorGestionUsuario extends Controller
{
    // Mostrar la lista de usuarios
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = User::all();
        return view('usuario.gestionUsuario', compact('usuarios')); // Asegúrate de que la ruta esté correcta
    }

    // Editar un usuario
    public function edit($idUsers)
    {
        // Obtener el usuario por ID
        $usuario = User::findOrFail($idUsers);
        return view('usuario.edit', compact('usuarios')); // Cambia 'usuarios.edit' a 'usuario.edit' si tu vista está en esa carpeta
    }

    // Actualizar un usuario
    public function update(Request $request, $idUsers)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'tipo' => 'required|string|max:20',
        ]);

        // Encontrar el usuario por ID
        $usuario = User::findOrFail($idUsers);
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->email = $request->email;
        $usuario->phone = $request->phone;
        $usuario->tipo = $request->tipo;

        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    // Inhabilitar/Habilitar usuario
    public function toggleStatus($idUsers)
    {
        // Encontrar el usuario por ID
        $usuario = User::findOrFail($idUsers);

        // Cambiar el estado entre 'active' e 'inactive'
        $usuario->estado = $usuario->estado === 'active' ? 'inactive' : 'active';

        $usuario->save();

        // Redirigir de vuelta a la lista de usuarios con mensaje de éxito
        return redirect()->route('usuarios.index')->with('success', 'Estado del usuario actualizado correctamente.');
    }
}
