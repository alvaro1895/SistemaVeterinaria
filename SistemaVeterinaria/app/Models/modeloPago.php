<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\modeloDireccion; // Importa el modelo Direccion
use App\Models\modeloPersona; // Importa el modelo Persona
use App\Models\modeloReserva; // Importa el modelo Reserva
use App\Models\modeloProducto; // Importa el modelo Producto
use App\Models\modeloPagoPresencial;

use App\Models\user; // Importa el modelo Producto

class modeloPago extends Model
{
    protected $table = 'pago'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idPago'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando las columnas `created_at` y `updated_at`

    protected $fillable = [
        'idDireccion',
        'idUsers',
        'idReserva',
        'idProducto',
        'nombreTitular',
        'numeroTarjeta',
        'cvv',
        'añoVencimiento',
        'mesVencimiento'
    ];

    // Relación con dirección
    public function direccion()
    {
        return $this->belongsTo(modeloDireccion::class, 'idDireccion');
    }

    // Relación con persona
    public function persona()
    {
        return $this->belongsTo(modeloPersona::class, 'idPersona');
    }
    //Relación con reserva
    public function reserva()
    {
        return $this->belongsTo(modeloReserva::class, 'idReserva');
    }

    // Relación con producto
    public function producto()
    {
        return $this->belongsTo(modeloProducto::class, 'idProducto');
    }

    // Relación con user
    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers');
    }

    //dua
    public function pagoPresencial()
{
    return $this->hasOne(modeloPagoPresencial::class, 'idPago');
}


}
