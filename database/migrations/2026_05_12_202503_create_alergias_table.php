<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Alergia', function (Blueprint $table) {
            $table->id('id_alergia');
            $table->string('nome_alergia');
            $table->string('categoria');
            $table->string('intensidade_alergia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Alergia');
    }
};