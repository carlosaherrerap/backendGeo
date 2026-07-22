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
        Schema::create('dialings', function (Blueprint $table) { //marcacion
            $table->uuid('id')->primary();

            $table->foreignUuid('id_ubiety')->constrained('Ubiety')->onDelete('cascade');
            $table->foreignUuid('id_evidence')->constrained('Evidence')->onDelete('cascade');

            $table->string('descripcion');
            $table->date('fec_emitido'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dialings');
    }
};
