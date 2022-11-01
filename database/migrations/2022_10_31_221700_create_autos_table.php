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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->date('year');
            $table->string('color');
            $table->string('puertas');
            $table->string('motor');
            //referecia a la tabla cliente por el id
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')
                   ->on('clientes')
                   ->references('id')  //cambiar por carnet
                   ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
};
