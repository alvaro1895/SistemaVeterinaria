<?php
use App\Http\Controllers\controladorGestionTipo;

Route::get('/GestionTipo', [controladorGestionTipo::class, 'index'])->name('GestionTipo.index'); //mostrar y buscas

Route::post('/GestionTipo', [controladorGestionTipo::class, 'store'])->name('GestionTipo.store'); //guardar
Route::put('/GestionTipo/{id}', [controladorGestionTipo::class, 'update'])->name('GestionTipo.update'); //actualizar
Route::delete('/GestionTipo/{id}', [controladorGestionTipo::class, 'destroy'])->name('GestionTipo.destroy'); //eliminar