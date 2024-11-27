<?php

namespace App\Models;
use App\Models\modeloPago; // Importa el modelo Direccion

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloPagoPresencial extends Model
{
    // Nombre de la tabla
    protected $table = 'pagoPresencial';
    // Clave primaria
    protected $primaryKey = 'idPagoPresencial';
    // Indica si el modelo debe gestionar automáticamente las marcas de tiempo (created_at, updated_at)
    public $timestamps = false;

    // Campos que pueden ser asignados de manera masiva
    protected $fillable = [
        'idPago',
        'nombre',
        'apellido',
        'celular',
        'correo'
    ];

    // Relación con Pago
    public function pago()
    {
        return $this->belongsTo(modeloPago::class, 'idPago');
    }




}

