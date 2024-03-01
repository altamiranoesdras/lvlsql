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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->integer('dpi')->nullable();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->integer('Telefono');
            $table->date('Fecha_Nac');
            $table->enum('Estado', ['Activo', 'Inactivo']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
