<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloDireccion;

class controladorDireccion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //guardar registro
        $direccion = new modeloDireccion();
        $direccion->direccion = $request->input('direccion');
        $direccion->departamento = $request->input('departamento');
        $direccion->provincia = $request->input('provincia');
        $direccion->distrito = $request->input('distrito');
        $direccion->manzana = $request->input('manzana');
        $direccion->lote = $request->input('lote');
        $direccion->referencia = $request->input('referencia');

        $idReserva = $request->input('idReserva');
        $idUsers = $request->input('idUsuario');
        
        $direccion->save();

        // Obtener el ID recién creado
        $direccionId = $direccion->idDireccion;

        // Aquí puedes redirigir a la creación del pago pasando el ID de direccion
        return redirect()->route('pasarelaPago', [
                                                    'direccion_id' => $direccionId,
                                                    'idReserva' => $idReserva,
                                                    'idUsuario'=>$idUsers
                                                ]);

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
    public function edit($idReserva, $idUsuario)
    {
        return view('Pagos/direccionPago', compact('idReserva', 'idUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
