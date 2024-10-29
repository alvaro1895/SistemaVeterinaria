<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloPago;

class controladorPago extends Controller
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
        $pago = new modeloPago();
        $pago->numeroTarjeta = $request->input('tarjeta');
        $pago->nombreTitular = $request->input('nombreTitular');
        $pago->añoVencimiento = $request->input('año');
        $pago->mesVencimiento = $request->input('mes');
        $pago->cvv = $request->input('cvv');
        $pago->idDireccion = $request->input('idDireccion');
        $pago->idReserva = $request->input('idReserva');
        $pago->idUsers = $request->input('idUsuario');
        
        $pago->save();

        

        return redirect()->route('inicio');
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
    public function edit($direccion_id,$idReserva,$idUsuario)
    {
        return view('Pagos/pasarelaPago', compact('direccion_id','idReserva','idUsuario'));
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
