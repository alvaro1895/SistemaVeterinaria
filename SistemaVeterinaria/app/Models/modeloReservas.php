<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $table = 'reserva'; // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'idReserva'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando `created_at` y `updated_at`

    protected $fillable = [
        'idServicio',
        'fechaReserva',
        'horaReserva'
    ];

    // Relación con el modelo Servicio
    public function servicio()
    {
        return $this->belongsTo(modeloServicio::class, 'idServicio');
    }

}
