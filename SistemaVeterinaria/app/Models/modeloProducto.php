<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloProducto extends Model
{
    use HasFactory;

    protected $table ='producto';

    protected $primaryKey = 'idProducto';

    protected $fillable = [
        'idTipo',
        'idTamañoRaza',
        'idMarca',
        'nombreProducto',
        'descripcionProducto',
        'precioProducto',
        'cantidadProducto',
        'imagenProducto'
    ];

    public $timestamps = false; // Desactiva los timestamps

    // Relación con tipo
    public function tipo()
    {
        return $this->belongsTo(modeloTipo::class, 'idTipo');
    }

    // Relación con tamañoRaza
    public function tamañoRaza()
    {
        return $this->belongsTo(modeloTamañoRaza::class, 'idTamañoRaza');
    }

    // Relación con marca
    public function marca()
    {
        return $this->belongsTo(modeloMarca::class,'idMarca');
    }
}




