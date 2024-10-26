<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\modeloServicio;
use App\Models\modeloEspecialista;
class controladorReserva extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaServicios = modeloServicio::all();
        $listaEspecialista =modeloEspecialista::all();
        //utilizando compact para compactar los datos en una array para mandar a la vista

        return view('Servicio/reservaServicio', compact('listaServicios', 'listaEspecialista'));
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
        {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'fechaReserva' => 'required|date',
                'horaReserva' => 'required|date_format:H:i',
                'idServicio' => 'required|exists:servicio,idServicio',
            ]);

            // Crear la reserva y guardarla en la base de datos
            modeloReserva::create([
                'fechaReserva' => $validatedData['fechaReserva'],
                'horaReserva' => $validatedData['horaReserva'],
                'idServicio' => $validatedData['idServicio'],
            ]);

            // Redirigir o mostrar mensaje de éxito
            return redirect()->back()->with('success', 'Reserva realizada con éxito.');
        }
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
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
