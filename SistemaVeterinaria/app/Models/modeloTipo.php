<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\modeloCategoria; // Asegúrate de que también esté importado

class modeloTipo extends Model
{
    protected $table = 'tipo'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idTipo'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando las columnas `created_at` y `updated_at`

    protected $fillable = [
        'idCategoria',
        'nombreTipo',
        'descripcionTipo'
    ];

    // Relación con categoría
    public function categoria()
    {
        return $this->belongsTo(modeloCategoria::class, 'idCategoria', 'idCategoria');
    }


    public function productos()
    {
        return $this->belongsToMany(modeloProducto::class, 'detalle_compra', 'idTipo', 'idProducto');
    }
}
