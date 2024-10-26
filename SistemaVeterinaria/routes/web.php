<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorServicio;
use App\Http\Controllers\controladorProducto;
use App\Http\Controllers\controladorBlock;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GestionReservaC;
use App\Http\Controllers\controladorReserva;

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
//Ruta para inicio
Route::get('/',
    function () {
        return view('inicioGatoNegro');
    }
)->name("inicio");

//Ruta para inicio
Route::get('/',
    function () {
        return view('inicioGatoNegro');
    }
)->name("inicio");

//Ruta para nosotros
Route::get('/nosotros',
    function () {
        return view('nosotros');
    }
)->name("sobrenosotros");

//Ruta para servicios
Route::get('/servicios',
    function () {
        return view('Servicio/Servicios');
    }
)->name("servicios");

//Ruta para productos
Route::get('/productos',
    function () {
        return view('Producto/Productos');
    }
)->name("productos");

//Ruta para contactanos
Route::get('/contactanos',
    function () {
        return view('Contactanos');
    }
)->name("contactanos");


//Ruta para olvidar contraseña
Route::get('/olvidarcontraseña',
    function () {
        return view('Usuario/olvidarC');
    }
)->name("olvidarcontraseña");

//Ruta para registrar usuario
Route::get('/registrarusuario',
    function () {
        return view('Usuario/registrarU');
    }
)->name("registrarusuario");

//Rutas para Usuario
Route::get('/login',
    function () {
        return view('Usuario/login');
    }
)->name("login");

//Rutas para Usuario
Route::get('/restablecerContraseña',
    function () {
        return view('Usuario/reestablecer');
    }
)->name("restablecerContraseña");

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

// Ruta para mostrar el formulario de creación de una nueva reserva
Route::get('/reservas/crear', [controladorReserva::class, 'crearReserva'])->name('reservas.crear');

// Ruta para almacenar una nueva reserva mediante el método POST
Route::post('/reservas', [controladorReserva::class, 'store'])->name('reservas.store');

//Rutas para los servicios administradores
Route::get('/agregarServicio', [controladorServicio::class, 'index'])->name("agregarServicio");
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


// Ruta para mostrar todas las reservas
Route::get('/reserva', [GestionReservaC::class, 'index'])->name('reserva.index');

// Ruta para mostrar el formulario de edición de una reserva específica
Route::get('/reserva/{id}/edit', [GestionReservaC::class, 'edit'])->name('reserva.edit');

// Ruta para actualizar una reserva específica mediante el método POST
Route::post('/reserva/{id}/edit', [GestionReservaC::class, 'update'])->name('reserva.update');

// Ruta para eliminar una reserva específica
Route::delete('/reserva/{id}', [GestionReservaC::class, 'destroy'])->name('reserva.destroy');

// Ruta para mostrar todas las reservas (otra forma de acceder a la misma funcionalidad)
Route::get('/gestionReserva', [GestionReservaC::class, 'index'])->name('gestionReserva.index');



