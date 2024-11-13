<?php

//Ruta para vista inicio
Route::view('/', 'inicioGatoNegro')->name("inicio");

//Ruta para vista nosotros
Route::view('/nosotros', 'nosotros')->name("sobrenosotros");

//Ruta para vista servicios
Route::view('/servicios', 'Servicio/Servicios')->name("servicios");

//Ruta para vista productos
Route::view('/productos', 'Producto/Productos')->name("productos");