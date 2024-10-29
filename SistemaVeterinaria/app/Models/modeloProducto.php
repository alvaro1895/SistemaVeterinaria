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
        'nombreProducto',
        'descripcionProducto',
        'precioProducto',
        'imagenProducto',
        'cantidadProducto',
    ];

    public $timestamps = false; // Desactiva los timestamps

    /*public function direccion()
    {
        return $this->belongsTo(modeloDireccion::class, 'idDireccion');
    }*/
}

    


