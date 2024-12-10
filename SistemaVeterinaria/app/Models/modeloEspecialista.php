<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa la clase HasFactory para usar fábricas de modelos
use Illuminate\Database\Eloquent\Model; // Importa la clase Model, que es la base de todos los modelos en Laravel

class modeloEspecialista extends Model // Define la clase
{
    use HasFactory; // Utiliza el trait HasFactory para habilitar el uso de fábricas en este modelo

    // Especifica la tabla correspondiente
    protected $table = 'especialista'; // Define el nombre de la tabla asociada a este modelo

    protected $primaryKey='idEspecialista'; // Define el id de la tabla

    // Definir los campos que se pueden llenar
    protected $fillable = [ // Define los atributos que se pueden asignar en masa
        'nombreEspecialista', // Nombre del doctor
        'apellidoEspecialista', // Especialidad del doctor
        'celularEspecialista', //
        'correoEspecialista', //

    ];

    public $timestamps = false; // Desactiva los timestamps


}
