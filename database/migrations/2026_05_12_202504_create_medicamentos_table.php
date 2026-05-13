<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Medicamento', function (Blueprint $table) {
            $table->id('id_medicamento');
            $table->string('nome_comercial');
            $table->string('apresentacao_dosagem');
            $table->string('fabricante');
            $table->string('nome_generico'); // Importante para cruzar com a alergia
            $table->text('composicao_principio_ati');
            $table->string('cod_atc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Medicamento');
    }
};