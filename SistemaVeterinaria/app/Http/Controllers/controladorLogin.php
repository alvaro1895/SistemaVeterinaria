<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class controladorLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         //$listaServicios = modeloServicio::all();
         //utilizando compact para compactar los datos en una array para mandar a la vista
         //return view('Servicio/agregarServicio', compact('listaServicios'));
 
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
    public function register(Request $request)
    {
        //registrar al usuario
        $user = new User();
        $user->name = $request->input("nombre").' '.$request->input("apellido");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));

        $user->save();

        Auth::login($user);

        return redirect()->route('agregarServicio');

    }

    public function logout(Request $request)
    {
        //Cerrar sesion
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicioSesion');
    }

    public function login(Request $request)
    {
        //inicio de sesion
        $credenciales = [
            'email' => $request->input('email'), 
            'password' => $request->input('password')
        ];
        
        $recordarSesion = ($request->has('remember') ? true : false);

        if (Auth::attempt($credenciales,$recordarSesion)) {
            $request->session()->regenerate();

            return redirect()->intended(route('agregarServicio'));
            
        } else {
            return redirect()->route('inicioSesion');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
