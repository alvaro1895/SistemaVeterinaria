<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modeloPersona extends Model
{
    protected $table = 'persona'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idPersona'; // Llave primaria personalizada
    public $timestamps = false; // Si no estás usando las columnas created_at y updated_at

    protected $fillable = [
        'nombrePersona',
        'apellidoPersona',
        'celularPersona',
        'correoPersona'
    ];
    //metodos editar y actualizar
    public function edit($id)
    {
        // Buscar la persona por su ID
        $persona = Persona::findOrFail($id);

        // Retornar la vista de edición con la información de la persona
        return view('persona-edit', compact('persona'));
    }

    // Relación con pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'idPersona', 'idPersona');
    }
}
