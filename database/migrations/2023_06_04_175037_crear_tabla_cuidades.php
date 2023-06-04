<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ciudades', function (Blueprint $table) {
            //campos de la tabla
            $table->string('codciudad',5);
            $table->string('nomcuidad',20);
            $table->string('departamento',2);

            //Llaves
            $table->primary('codciudad');

            //laves foraneas
            $table->foreign('departamento')->references('coddepto')->on('departamentos');

            //por defecto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};
