<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloProducto;

class controladorProducto extends Controller
{
    
    public function index()
    {
        $listaProducto = modeloProducto::all();
        //utilizando compact para compactar los datos en una array para mandar a la vista
        return view('Producto/agregarProducto', compact('listaProducto'));

        //return view('Producto/agregarProducto');
    }
    public function create()
    {
        // Show the form for creating a new resource.
    }

    public function store(Request $request)
    {
        $Producto = new modeloProducto();
        $Producto->nombreProd = $request->input('producto');
        $Producto->descripcionProd = $request->input('descripcion');
        $Producto->precioProd = $request->input('precio');
        $Producto->cantidadProd = $request->input('cantidad');
        $Producto->fechavencProd = $request->input('fechaVencimiento');
        $Producto->imagenProd = $request->input('imagen');
        $Producto->idMarca = $request->input('marca');
        $Producto->save();

        return redirect()->route('agregarProducto');    
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
        $servicio= modeloProducto::find($id);
   
        if ($servicio) {
            $servicio->delete();
            return redirect()->route('listaProductos');
        } 
        else {
            return redirect()->route('listaProductos')->with('error', 'Servicio no encontrado');
        }
    }
}
