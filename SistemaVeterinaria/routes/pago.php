<?php
use App\Http\Controllers\controladorPago;
//Rutas para la pasarela de pago
Route::get('/pasarelaPago/{direccion_id}/{idReserva}/{idUsuario}', [controladorPago::class, 'edit'])->name('pasarelaPago');
Route::post('/registrarPago',[controladorPago::class, 'store'])->name("registrarPago");