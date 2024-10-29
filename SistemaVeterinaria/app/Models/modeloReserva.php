<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloReserva extends Model
{
    use HasFactory;

    protected $table ='reserva';

    protected $primaryKey = 'idReserva';

    protected $fillable = [
        'idServicio',
        'fechaReserva',
        'horaReserva',
    ];

    public $timestamps = false; // Desactiva los timestamps
    public function servicio()
    {
    return $this->belongsTo(modeloServicio::class, 'idServicio', 'idServicio');
    }
}
