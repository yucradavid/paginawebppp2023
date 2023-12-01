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
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del criterio
            $table->string('type'); // Tipo de criterio (puede ser 'abierta', 'numerica', 'seleccion', etc.)
            $table->text('question_description'); // Descripción o pregunta asociada al criterio
            $table->integer('importance_Criteria')->default(1); // Peso o importancia del criterio (por defecto, 1)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterias');
    }
};
