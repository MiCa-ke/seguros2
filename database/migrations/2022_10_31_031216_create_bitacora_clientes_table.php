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
        Schema::create('bitacora_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('user');             //quien hizo
            $table->string('accion');           //que hizo
            $table->date('fecha');              //cuando hizo
            $table->time('hora');               //a que hora lo hizo
            $table->string('ip');               //ip del cliente
            $table->string('cliente_id')->nullable();       //datos de la tabla que se asigno
            $table->string('nombre');
            $table->string('apellido_pa');
            $table->string('apellido_ma');
            $table->string('telefono');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora_clientes');
    }
};
