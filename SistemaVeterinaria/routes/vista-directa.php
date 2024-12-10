<?php
use App\Http\Controllers\controladorEspecialista;
use App\Http\Controllers\controladorGestionProductos;
//Ruta para vista inicio
Route::view('/', 'inicioGatoNegro')->name("inicio");

//Ruta para vista nosotros
Route::view('/nosotros', 'nosotros')->name("sobrenosotros");

//Ruta para vista servicios
Route::view('/servicios', 'Servicio/Servicios')->name("servicios");

//Ruta para vista productos
Route::view('/productos', 'Producto/Productos')->name("productos");

//Ruta para vista reporte
Route::view('/reporte', 'reporteBI')->name("reporte");


Route::get('/gestionProductos', [controladorGestionProductos::class, 'index'])->name("gestionProducto.vista");
Route::post('/gestionProductos', [controladorGestionProductos::class, 'store'])->name("gestionProducto.agregar");
Route::put('/gestionProductos/{idProducto}', [controladorGestionProductos::class, 'update'])->name("gestionProducto.editar");
Route::delete('/gestionProductos/{idProducto}', [controladorGestionProductos::class, 'destroy'])->name("gestionProducto.eliminar");

Route::get('/Productos', [controladorGestionProductos::class, 'listarProductos'])->name("producto.vista");


//Ruta para vista notifiacion
Route::view('/notificacion', 'notificacion')->name("notificacion");

//Ruta para vista especilista
Route::view('/especialista', 'especialista')->name("especialista");

Route::get('/especialista-2', [controladorEspecialista::class, 'listaEspecialista'])->name('vista-especialista');

Route::post('/eliminarEspecialista/{idEspecialista}', [controladorEspecialista::class, 'destroy'])->name('eliminar-especialista');

Route::post('/especialista', [EspecialistaController::class, 'store'])->name('especialista.agregar');

Route::delete('/eliminarEspecialista/{idEspecialista}', [controladorEspecialista::class, 'destroy'])->name('eliminar-especialista2');

// Ruta para mostrar la lista de especialistas
Route::get('/especialista', [controladorEspecialista::class, 'listaEspecialista'])->name('vista-especialista');

// Ruta para agregar un nuevo especialista
Route::post('/especialista/agregar', [controladorEspecialista::class, 'store'])->name('agregarespecialista-2');


Route::put('/especialista/actualizar/{idEspecialista}', [controladorEspecialista::class, 'update'])->name('editar-especialista2');

