<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Agregar la columna 'tipo'
            $table->string('tipo', 10)->nullable()->after('password');//permitir nulos

            // Agregar la columna 'idPersona' como clave foránea
            $table->Integer('idPersona')->nullable()->after('tipo');//permitir nulos
            $table->foreign('idPersona')->references('idPersona')->on('persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['idPersona']);
            $table->dropColumn('idPersona');
            $table->dropColumn('tipo');
        });
    }
};
