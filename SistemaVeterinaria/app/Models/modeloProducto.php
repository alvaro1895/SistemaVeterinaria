<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloProducto extends Model
{
    use HasFactory;

    protected $table ='producto';

    protected $primaryKey = 'idProd';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'cantidad',
        'fecha de vencimiento',
        'idmarca',
    ];

    public $timestamps = false; // Desactiva los timestamps

    // Relación con tipo
    public function tipo()
    {
        return $this->belongsTo(modeloTipo::class, 'idTipo', 'idTipo');
    }

    // Relación con tamañoRaza
    public function tamañoRaza()
    {
        return $this->belongsTo(modeloTamañoRaza::class, 'idRaza', 'idTamañoRaza');
    }

    // Relación con marca
    public function marca()
    {
        return $this->belongsTo(modeloMarca::class, 'idMarca', 'idMarca');
    }
}




