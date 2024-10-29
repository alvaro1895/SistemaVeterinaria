<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modeloMarca extends Model
{
    protected $table = 'marca'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idMarca'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando `created_at` y `updated_at`

    protected $fillable = [
        'nombreMarca',
        'descripcionMarca'
    ];

    // Relación con productos (opcional, si es necesario)
    public function productos()
    {
        return $this->hasMany(modeloProducto::class, 'idMarca', 'idMarca');
    }
}
