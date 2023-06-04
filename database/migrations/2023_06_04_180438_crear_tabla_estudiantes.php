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
        Schema::create('estudiantes', function (Blueprint $table) {
             //campos de la tabla
             $table->string('codestudiante',4);
             $table->string('nomestudiante',30);
             $table->smallInteger('edadestudiante');
             $table->date('fechaestudiante');
             $table->char('sexestudiante',1);
             $table->string('ciudad',5);
             $table->string('barrio',3);
             $table->string('programa',2);
 
             //Llaves
             $table->primary('codestudiante');
 
             //laves foraneas
             $table->foreign('ciudad')->references('codciudad')->on('ciudades');
             $table->foreign('barrio')->references('codbarrio')->on('barrios');
             $table->foreign('programa')->references('codprograma')->on('programas');
 
             //por defecto
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
