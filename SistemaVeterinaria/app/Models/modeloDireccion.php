<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloDireccion extends Model
{
    use HasFactory;

    protected $table ='direccion';

    protected $primaryKey = 'idDireccion';

    protected $fillable = [
        'direccion',
        'deoartamento',
        'provincia',
        'distrito',
        'manzana',
        'lote',
        'referencia',
    ];

    public $timestamps = false; // Desactiva los timestamps

}
