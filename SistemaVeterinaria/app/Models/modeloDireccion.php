<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modeloDireccion extends Model
{
    protected $table = 'direccion'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idDireccion'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando las columnas `created_at` y `updated_at`

    protected $fillable = [
        'direccion',
        'distrito',
        'manzana',
        'lote',
        'referencia'
    ];

    // Relación con pagos
    public function pagos()
    {
        return $this->hasMany(modeloPago::class, 'idDireccion', 'idDireccion');
    }
}
