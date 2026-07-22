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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombres');
            $table->string('ape_pat');
            $table->string('ape_mat');
            $table->integer('doc')->unique();
            $table->string('nacionalidad');
            $table->string('genero');
            $table->integer('telefono', 9)->unique();
            $table->string('direccion');

            $table->foreignUuid('id_location')->constrained('Location')->onDelete('cascade'); //Sede
            $table->foreignUuid('id_activity')->constrained('Activity')->onDelete('cascade');
            $table->foreignUuid('id_ubiety')->constrained('Ubiety')->onDelete('cascade'); //Ubicacion
            $table->foreignUuid('id_turno')->constrained('Schedule')->onDelete('cascade'); //Turno

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};
