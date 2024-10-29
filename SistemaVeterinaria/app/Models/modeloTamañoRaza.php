<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modeloTamañoRaza extends Model
{
    protected $table = 'tamañoRaza'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idTamañoRaza'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando las columnas `created_at` y `updated_at`

    protected $fillable = [
        'nombreRaza',
        'descripcionRaza'
    ];

    // Relación con productos
    public function productos()
    {
        return $this->hasMany(modeloProducto::class, 'idRaza', 'idTamañoRaza');
    }
}
