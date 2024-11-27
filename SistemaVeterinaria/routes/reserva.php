<?php
use App\Http\Controllers\ControladorReserva;
use App\Http\Controllers\ControladorReservaAdmin;
use App\Http\Controllers\controladorGestionPago;

//Dayra
//Ruta para reservar servicio formulario de reserva
Route::get('/agregarReserva',[controladorReserva::class, 'index'])->name("traeListaServicio");
Route::post('/reserva', [controladorReserva::class, 'store'])->name('reserva.store');



// Ruta para los administradores para reservar servicios
// ver formulario de fomulario de servicio desde administrador
Route::get('/agregarReservaAdmin', [ControladorReservaAdmin::class, 'index'])->name('traeListaServicioAdmin');

// Ruta para manejar el almacenamiento de la reserva y pago
Route::post('/reservaAdmin', [ControladorReservaAdmin::class, 'store'])->name('reservaAdmin.storeAdmin');

// Noc 
//Ruta para mostrar el formulario de creación de una nueva reserva
Route::get('/reservas/crear', [controladorReserva::class, 'crearReserva'])->name('reservas.crear');

// Ruta para almacenar una nueva reserva mediante el método POST
Route::post('/reservas', [controladorReserva::class, 'store'])->name('reservas.store');

// Ruta para almacenar una nueva reserva mediante el método POST
Route::get('/reserva', [controladorReserva::class, 'index'])->name('reserva.index');