<?php
use App\Http\Controllers\ControladorReserva;
//Dayra
//Ruta para reservar servicio formulario de reserva
Route::get('/agregarReserva',[controladorReserva::class, 'index'])->name("traeListaServicio");

// Ruta para mostrar el formulario de creación de una nueva reserva
Route::get('/reservas/crear', [controladorReserva::class, 'crearReserva'])->name('reservas.crear');

// Ruta para almacenar una nueva reserva mediante el método POST
Route::post('/reservas', [controladorReserva::class, 'store'])->name('reservas.store');

// Ruta para almacenar una nueva reserva mediante el método POST
Route::post('/reserva', [controladorReserva::class, 'store'])->name('reserva.store');
Route::get('/reserva', [controladorReserva::class, 'index'])->name('reserva.index');