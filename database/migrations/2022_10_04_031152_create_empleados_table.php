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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('telefono');
            $table->string('direccion');
            $table->unsignedBigInteger('id_turno')->nullable();
            $table->foreign('id_turno')
                ->references('id_turno')
                ->on('turnos')
                ->onDelete('Cascade')
                ->onUpdate('Cascade');

            $table->unsignedBigInteger('id_ambiente')->nullable();
            $table->foreign('id_ambiente')
                ->references('id_ambiente')
                ->on('ambientes')
                ->onDelete('Cascade')
                ->onCascade('Cascade');

            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('Cascade')
                ->onCascade('Cascade');

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
        Schema::dropIfExists('empleados');
    }
};
