<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeloServicio extends Model
{
    use HasFactory;

    protected $table ='servicio';

    protected $primaryKey = 'idServicio';

    protected $fillable = [
        'idEspecialista',
        'nombreServicio',
        'precioServicio',
        'descripcionServicio',
        'estadoServicio',
    ];

    public $timestamps = false; // Desactiva los timestamps
    public function especialista()
    {
    return $this->belongsTo(modeloEspecialista::class, 'idEspecialista', 'idEspecialista');
    }
}

