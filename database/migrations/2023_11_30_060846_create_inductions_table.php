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
        Schema::create('inductions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date'); // Add the 'date' field of type date
            $table->string('location'); // Add the 'location' field of type string
            $table->time('time'); // Add the 'time' field of type time
            $table->string('responsible'); // Add the 'responsible' field of type string
            $table->integer('duration'); // Add the 'duration_in_hours' field of type integer
            $table->string('file_type');
            $table->string('link');
            $table->unsignedBigInteger('material_id')->nullable(); // Permitir valores nulos

            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');

            $table->unsignedBigInteger('competitor_id')->nullable(); // Permitir valores nulos


            $table->foreign('competitor_id')->references('id')->on('competitors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inductions');
    }
};
