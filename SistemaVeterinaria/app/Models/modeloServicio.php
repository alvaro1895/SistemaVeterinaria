<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloServicio extends Model
{
    use HasFactory;

    protected $table ='servicio';

    protected $primaryKey = 'idServ';

    protected $fillable = [
        'nombreServ',
        'descripcionServ',
        'precioServ',
    ];

    public $timestamps = false; // Desactiva los timestamps
}
