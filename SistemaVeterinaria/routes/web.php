<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorLogin;
use App\Http\Controllers\controladorServicio;
use App\Http\Controllers\controladorProducto;
use App\Http\Controllers\controladorBlock;

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

//Ruta para vista inicio
Route::view('/', 'inicioGatoNegro')->name("inicio");

//Ruta para vista nosotros
Route::view('/nosotros', 'inicioGatoNegro')->name("sobrenosotros");

//Ruta para vista servicios
Route::view('/servicios', 'Servicio/Servicios')->name("servicios");

//Ruta para vista productos
Route::view('/productos', 'Producto/Productos')->name("productos");

//Ruta para contactanos
Route::view('/contactanos', 'Contactanos')->middleware('auth')->name("contactanos");

//Ruta para olvidar contraseña
Route::view('/olvidarcontraseña', 'Usuario/olvidarC')->name("olvidarcontraseña");

//Rutas para Usuario
Route::view('/restablecerContraseña', 'Usuario/reestablecer')->name("restablecerContraseña");

//Rutas para Usuarios
Route::view('/inicioSesion', 'Usuario/iniciarSesion')->name("inicioSesion");
Route::view('/registrarUsuario', 'Usuario/registrarUsuario')->name("formularioRegistrarUsuario");
Route::post('/registrar-Usuario', [controladorLogin::class, 'register'])->name("registrarUsuario");
Route::post('/inicio-Sesion', [controladorLogin::class, 'login'])->name("inicio-Sesion");
Route::get('/cerrarSesion', [controladorLogin::class, 'logout'])->name("cerrarSesion");


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

