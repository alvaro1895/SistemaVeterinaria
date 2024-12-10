<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloEspecialista;

class controladorEspecialista extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaServicios = modeloServicio::all();
        //utilizando compact para compactar los datos en una array para mandar a la vista
        return view('Servicio/reservaServicio', compact('listaEspecialista'));

    }

    public function listaEspecialista()
    {
        $listaEspecialista = modeloEspecialista::all();
        //utilizando compact para compactar los datos en una array para mandar a la vista
        return view('especialista', compact('listaEspecialista'));

    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Crear un nuevo registro en la base de datos
        modeloEspecialista::create([
            'nombreEspecialista' => $request->input('nombre'),
            'apellidoEspecialista' => $request->input('apellidos'),
            'celularEspecialista' => $request->input('celular'),
            'correoEspecialista' => $request->input('correo'),
        ]);

        // Redirigir a la vista con un mensaje de éxito
        return redirect()->route('vista-especialista')->with('success', 'Especialista agregado correctamente.');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEspecialista)
    {
        $especialista = modeloEspecialista::findOrFail($idEspecialista);

        $especialista->update([
            'nombreEspecialista' => $request->input('nombre'),
            'apellidoEspecialista' => $request->input('apellidos'),
            'celularEspecialista' => $request->input('celular'),
            'correoEspecialista' => $request->input('correo'),
        ]);

        return redirect()->route('vista-especialista')->with('success', 'Especialista actualizado correctamente');

    }
    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEspecialista)
    {
        try {
            // Encuentra el registro del especialista por su ID
            $especialista = modeloEspecialista::findOrFail($idEspecialista);

            // Elimina el registro de la base de datos
            $especialista->delete();

            // Redirige con un mensaje de éxito
            return redirect()->route('ruta-a-lista-especialistas')
                             ->with('success', 'Especialista eliminado correctamente.');
        } catch (\Exception $e) {
            // Si ocurre un error, redirige con un mensaje de error
            return redirect()->route('vista-especialista')
                             ->with('error', 'No se pudo eliminar el especialista. Inténtalo de nuevo.');
        }
    }

}
