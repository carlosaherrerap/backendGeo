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
        Schema::create('positions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            
            $table->foreignUuid('id_user')->constrained('User')->onDelete('cascade');
            $table->foreignUuid('id_activity')->constrained('Activity');

            $table->string('posx');
            $table->string('posy');
            $table->date('fec_reg');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
