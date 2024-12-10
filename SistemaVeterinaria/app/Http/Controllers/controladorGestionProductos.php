<?php

namespace App\Http\Controllers;
use App\Models\modeloProducto;
use App\Models\modeloTipo;
use App\Models\modeloTamañoRaza;
use App\Models\modeloMarca;

use Illuminate\Http\Request;

class controladorGestionProductos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = modeloProducto::with(['tamañoRaza', 'tipo.categoria', 'marca'])->get();
        return view('Producto/gestionProducto', compact('productos'));
    }

    public function listarProductos()
    {
        $productos = modeloProducto::with(['tamañoRaza', 'tipo.categoria', 'marca'])->get();
        return view('Producto/Productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new modeloProducto();

        // $producto->idTipo = $request->input('idTipo');
        // $producto->idRaza = $request->input('idRaza');
        // $producto->idMarca = $request->input('idMarca');
        $producto->nombreProducto = $request->input('nombreProducto');
        $producto->descripcionProducto = $request->input('descripcionProducto');
        $producto->precioProducto = $request->input('precioProducto');
        $producto->cantidadProducto = $request->input('cantidadProducto');
        //$producto->imagenProducto = $request->input('imagenProducto');


        if ($request->hasFile('imagenProducto')) {
             // Obtener el archivo subido
            $imagen = $request->file('imagenProducto');
        
             // Generar un nombre único para la imagen
            $imagenNombre = time() . '.' . $imagen->getClientOriginalExtension();
        
             // Mover la imagen a la carpeta public/img y obtener la ruta
            $imagen->move(public_path('img/productos'), $imagenNombre);
        
             // Guardar la ruta relativa en la base de datos
             $producto->imagenProducto = 'img/productos/' . $imagenNombre; // Ruta relativa
        }

        // if ($request->hasFile('imagenProducto')) {
        //     // Mostrar información del archivo subido
        //     dd('se subio la imagen.');
        //     //dd($request->file('imagenProducto'));
        // } else {
        //     dd('No se subió ninguna imagen.');
        // }

        $producto->save();

        return redirect()->route('gestionProducto.vista')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idProducto)
    {
        //$idProductoTraido = $request->input('idproducto');
        $producto = modeloProducto::findOrFail($idProducto);

        // $producto->idTipo = $request->input('idTipo');
        // $producto->idRaza = $request->input('idRaza');
        // $producto->idMarca = $request->input('idMarca');
        $producto->nombreProducto = $request->input('nombreProducto');
        $producto->descripcionProducto = $request->input('descripcionProducto');
        $producto->precioProducto = $request->input('precioProducto');
        $producto->cantidadProducto = $request->input('cantidadProducto');
        $producto->imagenProducto = $request->input('imagenProducto');

        $producto->save();


        return redirect()->route('gestionProducto.vista')->with('success', 'Especialista actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProducto)
    {
        $producto = modeloProducto::findOrFail($idProducto);
        // Verificar si el archivo existe y eliminarlo
        if (file_exists($producto->imagenProducto)) {
            unlink($producto->imagenProducto);
        }
        $producto->delete();        

        return redirect()->route('gestionProducto.vista')->with('success', 'Pago eliminado correctamente');
    }
}
