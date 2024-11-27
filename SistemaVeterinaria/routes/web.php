<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorServicio;
use App\Http\Controllers\controladorProducto;
use App\Http\Controllers\controladorBlock;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControladorReserva;
use App\Http\Controllers\ControladorReservaAdmin;
use App\Http\Controllers\controladorGestionUsuario;
use App\Http\Controllers\controladorGestionPago;
use Apo\Http\Controllers\controladorGestionPagoPresencial;
use App\Http\Controllers\controladorGestionPagoVirtual;
use App\Http\Controllers\controladorPersona;
use App\Http\Controllers\ControladorCompras;
use App\Http\Controllers\ControladorGestionReserva;


use App\Http\Controllers\controladorDireccion;
use App\Http\Controllers\controladorPago;
use App\Http\Controllers\controladorCarrito;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//paginas de vista directa de las paginas web
require base_path("routes/vista-directa.php");

//rutas de la funcionalidad de reserva
require base_path("routes/reserva.php");

//rutas de la funcionalidad de inicio sesion
require base_path("routes/inicio-sesion.php");

//rutas de la funcionalidad de servicio
require base_path("routes/servicio.php");

//rutas de la funcionalidad de gestionPago
require base_path("routes/pagos.php");

//ruta de la funcionalidad de tipo
require base_path("routes/tipo.php");

//ruta de panel de admin 
require base_path("routes/panelAdmin.php");

//Ruta para contactanos
Route::view('/contactanos', 'Contactanos')->middleware('auth')->name("contactanos");

//Ruta para olvidar contraseña
Route::view('/olvidarcontraseña', 'Usuario/olvidarC')->name("olvidarcontraseña");

//Rutas para Usuario
Route::view('/restablecerContraseña', 'Usuario/reestablecer')->name("restablecerContraseña");

//Rutas formulario de direccion para el pago
Route::get('/direccion/{idReserva}/{idUsuario}', [controladorDireccion::class, 'edit'])->name('direccion');
Route::post('/registrarDireccion',[controladorDireccion::class, 'store'])->name("registrarDireccion");

//Rutas para la pasarela de pago
Route::get('/pasarelaPago/{direccion_id}/{idReserva}/{idUsuario}', [controladorPago::class, 'edit'])->name('pasarelaPago');
Route::post('/registrarPago',[controladorPago::class, 'store'])->name("registrarPago");

//Rutas de carrito
Route::get('/inicioTienda', [controladorCarrito::class, 'shop'])->name('shop');
Route::get('/cart', [controladorCarrito::class, 'cart'])->name('cart.index');
Route::post('/add', [controladorCarrito::class, 'add'])->name('cart.store');
Route::post('/update', [controladorCarrito::class, 'update'])->name('cart.update');
Route::post('/remove', [controladorCarrito::class, 'remove'])->name('cart.remove');
Route::post('/clear', [controladorCarrito::class, 'clear'])->name('cart.clear');






//ruta formulario servicio
Route::get('/reservaServicio',
    function () {
        return view('Servicio/reservaServicio');
    }
)->name("reservaServicio");

//Ruta para reservar servicio
Route::get('/agregarReserva',[controladorReserva::class, 'index'])->name("traeListaServicio");

//Ruta de pasarela de pagos
Route::get('/pagar',
    function () {
        return view('reservaServicio/pagar');
    }
)->name("pagar");



//Rutas para los servicios administradores
Route::get('/agregarServicio', [controladorServicio::class, 'index'])->middleware('auth')->name("agregarServicio");
Route::post('/agregarServicio', [controladorServicio::class, 'store']);
Route::delete('/eliminarServicio{idServ}', [controladorServicio::class, 'destroy'])->name("eliminarServicio");
Route::get('/listaServicios', [controladorServicio::class, 'index'])->name("listaServicios");

//Rutas para los productos administradores
Route::get('/agregarProducto', [controladorProducto::class, 'index'])->name("agregarProducto");
Route::post('/agregarProducto', [controladorProducto::class, 'store']);
Route::delete('/eliminarProducto{idProd}', [controladorProducto::class, 'destroy'])->name("eliminarProducto");
Route::get('/listaProductos', [controladorProducto::class, 'index'])->name("listaProductos");

//Rutas para el block
Route::get('/block', [controladorBlock::class, 'index'])->name("block");//->middleware('auth'); verificar si un usuario esta logeado
Route::get('/articulo1', [controladorBlock::class, 'articulo1'])->name("articulo1");
Route::get('/articulo2', [controladorBlock::class, 'articulo2'])->name("articulo2");
Route::get('/articulo3', [controladorBlock::class, 'articulo3'])->name("articulo3");
Route::get('/articulo4', [controladorBlock::class, 'articulo4'])->name("articulo4");
Route::get('/articulo5', [controladorBlock::class, 'articulo5'])->name("articulo5");
Route::get('/articulo6', [controladorBlock::class, 'articulo6'])->name("articulo6");
Route::get('/articulo7', [controladorBlock::class, 'articulo7'])->name("articulo7");
Route::get('/articulo8', [controladorBlock::class, 'articulo8'])->name("articulo8");
Route::get('/articulo9', [controladorBlock::class, 'articulo9'])->name("articulo9");


//----------------------------------------------------------





//Route::get('/pago', [ControladorPago::class, 'index'])->name('pago');
Route::get('/pago', function () {
    return view('pago');
})->name('pago');


//Dayra:  Ruta para gestionar las reservas de serivicio realizadas
Route::prefix('pagos')->group(function () {
    // Ruta para mostrar el listado de pagos (vista principal)
    Route::get('/', [ControladorGestionReserva::class, 'index'])->name('pagos.index');

    // Ruta para actualizar un pago
    Route::put('/{id}/update', [ControladorGestionReserva::class, 'update'])->name('gestionReserva.update');

    // Ruta para eliminar un pago
    Route::delete('/{id}', [ControladorGestionReserva::class, 'destroy'])->name('gestionReserva.destroy');

});


//------------------------------------------------------------------------------------------------
//Steven
//Ruta de controladorReserva


Route::get('/reservas', [ControladorReserva::class, 'index'])->name('reservas.index');

//Ruta de controladorCompra
Route::get('/compras', [ControladorCompras::class, 'index'])->name('compras');

// //Ruta de contrladorPersonas
Route::get('/persona', [controladorPersona::class, 'index'])->name('persona');
Route::post('/persona/{id}', [controladorPersona::class, 'update'])->name('persona.update');

// //Ruta de controladorReserva
Route::get('/reservas', [ControladorReservas::class, 'index'])->name('reservas.index');

// Ruta para gestionar usuarios


Route::get('/usuarios', [controladorGestionUsuario::class, 'index'])->name('usuarios.index'); // Muestra la página de gestión de usuarios
Route::get('/usuarios/{id}/edit', [controladorGestionUsuario::class, 'edit'])->name('usuarios.edit'); // Edita un usuario
Route::get('/usuarios/{id}/toggle-status', [controladorGestionUsuario::class, 'toggleStatus'])->name('usuarios.toggleStatus'); // Cambia el estado de un usuario

Route::put('/usuarios/{id}/edit', [controladorGestionUsuario::class, 'update'])->name('usuarios.update');

//Ruta para panelAdmin

Route::get('/panel-admin', function () {
    return view('panelAdmin');
})->name('panelAdmin');
