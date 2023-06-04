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
        Schema::create('barrios', function (Blueprint $table) {
            //Campos de la tabla
            $table->string('codbarrio',3);
            $table->string('nombarrio',30);
            $table->smallInteger('estbarrio');
            $table->smallInteger('comuna');

            //LLave primaria
            $table->primary('codbarrio');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrios');
    }
};
