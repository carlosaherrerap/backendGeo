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
        Schema::create('talks', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->foreignUuid('id_chat')->constrained('Chat')->onDelete('cascade');
            $table->foreignUuid('id_user_send_message')->constrained('User')->onDelete('cascade');

            $table->string('texto');

            $table->foreignUuid('id_ubiety')->constrained('Ubiety')->onDelete('cascade');

            $table->date('fec_envio');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talks');
    }
};
