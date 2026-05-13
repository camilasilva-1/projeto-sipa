<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Profissional', function (Blueprint $table) {
            $table->id('id_profissional'); // Chave primária que o Model espera
            $table->string('nome');
            $table->string('contato');
            $table->string('crm_crf')->unique(); // Unique para não repetir médico
            $table->string('especialidade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Profissional');
    }
};