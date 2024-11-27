<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modeloCategoria extends Model
{
    protected $table = 'categoria'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idCategoria'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando las columnas `created_at` y `updated_at`

    protected $fillable = [
        'nombreCategoria',
        'descripcionCategoria'
    ];
}