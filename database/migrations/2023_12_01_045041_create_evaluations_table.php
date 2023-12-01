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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();

            $table->text('comments')->nullable(); // Comentarios asociados a la evaluación del desempeño
            $table->integer('qualification')->nullable(); // Calificación numérica (puede ser nullable si la evaluación es cualitativa)
            $table->enum('state', ['Entrada', 'Intermedio', 'Final'])->default('Entrada'); // Estado de la evaluación
            $table->date('evaluation_date')->nullable(); // Fecha de la evaluación
            $table->unsignedBigInteger('competitor_id')->nullable(); // Permitir valores nulos
            $table->foreign('competitor_id')->references('id')->on('competitors')->onDelete('cascade');
            $table->unsignedBigInteger('criteria_id')->nullable(); // Clave foránea para relacionar con la tabla 'criteria_evaluations'
            $table->foreign('criteria_id')->references('id')->on('criterias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
