<?php
use App\Http\Controllers\controladorGestionPago;
use App\Http\Controllers\controladorGestionPagoPresencial;
use App\Http\Controllers\controladorGestionPagoVirtual;
// Ruta para la gestión de pagos 
Route::get('/gestion-de-pagos', [controladorGestionPago::class, 'index'])->name('gestionPago.index');

// Ruta para la gestión de pagos presenciales
Route::get('/gestion-de-pagos-presencial', [controladorGestionPagoPresencial::class, 'index'])->name('gestionPago.presencial');

// Ruta para la gestión de pagos virtuales
Route::get('/gestion-de-pagos-virtuales', [controladorGestionPagoVirtual::class, 'index'])->name('gestionPago.pagosVirtuales');