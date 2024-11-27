<?php
use App\Http\Controllers\controladorServicio;
use App\Http\Controllers\controladorReserva;
use App\Http\Controllers\controladorGestionServicio;

Route::get('/GestionServicio', [controladorGestionServicio::class, 'index'])->name('GestionServicio.index');
Route::post('/GestionServicio', [controladorGestionServicio::class, 'store'])->name('GestionServicio.store');
Route::put('/GestionServicio/{id}', [controladorGestionServicio::class, 'update'])->name('GestionServicio.update');
//Route::delete('/GestionServicio/{id}', [controladorGestionServicio::class, 'destroy'])->name('GestionServicio.destroy');
Route::post('/GestionServicio/toggle-estado/{id}', [controladorGestionServicio::class, 'toggleEstado'])->name('GestionServicio.toggleEstado');
//Ruta para dirigir de la pag. servicio a reserva
Route::get('/agregarReserva',[controladorReserva::class, 'index'])->name("traeListaServicio");