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
        Schema::create('decanos', function (Blueprint $table) {
             //campos de la tabla
             $table->string('coddecano',2);
             $table->string('nomdecano',40);
             $table->string('facultad',2);
 
             //Llaves
             $table->primary('coddecano');
 
             //laves foraneas
             $table->foreign('facultad')->references('codfacultad')->on('facultades');
 
             //por defecto
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decanos');
    }
};
