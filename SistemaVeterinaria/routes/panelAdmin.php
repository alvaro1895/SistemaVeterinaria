<?php
use App\Http\Controllers\controladorGestionPagoPresencial;
use App\Http\Controllers\controladorGestionPagoVirtual;
use App\Http\Controllers\ControladorGestionReserva;
use App\Http\Controllers\ControladorGestionProductos;
use App\Http\Controllers\ControladorGestionUsuarios;
use App\Http\Controllers\ControladorGestionServicios;

// Ruta para la gestión de pagos presenciales
Route::get('/gestion-de-pagos-presencial', [controladorGestionPagoPresencial::class, 'index'])->name('gestionPago.presencial');

// Ruta para la gestión de pagos virtuales
Route::get('/gestion-de-pagos-virtuales', [controladorGestionPagoVirtual::class, 'index'])->name('gestionPago.pagosVirtuales');

Route::get('/gestion-reservas', [ControladorGestionReserva::class, 'index'])->name('pagos.index');
Route::get('/gestion-productos', [ControladorGestionProductos::class, 'index'])->name('gestionProductos');
Route::get('/gestion-usuarios', [ControladorGestionUsuarios::class, 'index'])->name('usuarios.index');
Route::get('/gestion-servicios', [ControladorGestionServicios::class, 'index'])->name('gestionServicios');

Route::get('/panel-admin', function () {
    return view('panelAdmin');
})->name('panelAdmin');
