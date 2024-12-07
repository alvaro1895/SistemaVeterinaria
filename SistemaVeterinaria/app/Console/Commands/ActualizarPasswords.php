<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; //importar el modelo User
use Illuminate\Support\Facades\Hash; //importar el medoto de encriptacion

class ActualizarPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usuarios:actualizar-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualizar contraseñas no encriptadas de los usuarios';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Obtener todos los usuarios
        $usuarios = User::all();

        foreach ($usuarios as $usuario) {
            // Verificar si la contraseña necesita ser encriptada
            //if (!Hash::needsRehash($usuario->password)) {
            if (strlen($usuario->password) < 60 || !str_starts_with($usuario->password, '$2y$')) {
                $usuario->password = Hash::make($usuario->password);
                $usuario->save();
                $this->info("Contraseña actualizada para el usuario ID: {$usuario->idUsers}");
            }
            else {
                $this->info("El usuario ID: {$usuario->idUsers} ya tiene una contraseña encriptada.");
            }
        }

        $this->info("Todas las contraseñas han sido revisadas y actualizadas si era necesario.");

        return Command::SUCCESS; // Indicamos que todo salió bien
    }
}
