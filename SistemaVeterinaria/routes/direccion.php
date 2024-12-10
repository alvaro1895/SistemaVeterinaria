<?php
use App\Http\Controllers\controladorDireccion;

//Rutas formulario de direccion para el pago
Route::get('/direccion/{idReserva}/{idUsuario}', [controladorDireccion::class, 'edit'])->name('direccion');
Route::post('/registrarDireccion',[controladorDireccion::class, 'store'])->name("registrarDireccion");
