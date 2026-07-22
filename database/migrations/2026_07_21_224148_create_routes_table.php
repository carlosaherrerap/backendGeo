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
        Schema::create('routes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');

            $table->foreignUuid('id_user')->constrained('User')->onDelete('cascade');
            $table->foreignUuid('id_sede')->constrained('Location')->onDelete('cascade'); //Sedes

            $table->date('fec_visita');

            $table->foreignUuid('id_period')->constrained('Period')->onDelete('cascade');

            $table->string('estado');
            $table->date('fec_asignado'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrati ons.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
