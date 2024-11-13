<?php
use App\Http\Controllers\controladorLogin;
//rutas para usuarios alvaro
//Inicio sesion usuarios
Route::view('/inicioSesion', 'Usuario/iniciarSesion')->name("inicioSesion");
Route::view('/registraUsuario', 'Usuario/registrarUsuario')->name("formularioRegistrarUsuario");
Route::post('/registrar-Usuario', [controladorLogin::class, 'register'])->name("registrarUsuario");
Route::post('/inicio-Sesion', [controladorLogin::class, 'login'])->name("inicio-Sesion");
Route::get('/cerrarSesion', [controladorLogin::class, 'logout'])->name("cerrarSesion");