<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloServicio;

class controladorServicio extends Controller
{
    public function index()
    {
        $listaServicios = modeloServicio::all();
        //utilizando compact para compactar los datos en una array para mandar a la vista
        return view('Servicio/agregarServicio', compact('listaServicios'));

        //return view('Servicio/agregarServicio');
    }

    public function create()
    {
        // Show the form for creating a new resource.
    }

    public function store(Request $request)
    {
        $servicio = new modeloServicio();
        $servicio->nombreServ = $request->input('servicio');
        $servicio->descripcionServ = $request->input('descripcion');
        $servicio->precioServ = $request->input('precio');
        $servicio->save();

        return redirect()->route('agregarServicio');     
    }

    public function show($id)
    {
        // Display the specified resource.
    }

    public function edit($id)
    {
        // Show the form for editing the specified resource.
    }

    public function update(Request $request, $id)
    {
        // Update the specified resource in storage.
    }

    public function destroy($id)
    {
        $servicio= modeloServicio::find($id);
   
        if ($servicio) {
            $servicio->delete();
            return redirect()->route('listaServicios');
        } 
        else {
            return redirect()->route('listaServicios')->with('error', 'Servicio no encontrado');
        }
    }
}
