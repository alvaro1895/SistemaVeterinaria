<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloTipo extends Model
{
    protected $table = 'tipo'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'idTipo'; // Llave primaria personalizada

    protected $fillable = [
        'nombreTipo',
        'descripcionTipo',
        'idCategoria',
    ];
    // Relación con categoría
    public function categoria()
    {
        return $this->belongsTo(modeloCategoria::class, 'idCategoria', 'idCategoria');
    }
    // Desactivar timestamps
    public $timestamps = false;
}
