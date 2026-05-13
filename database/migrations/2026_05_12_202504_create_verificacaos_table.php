<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Verificacao', function (Blueprint $table) {
            $table->id('id_verificacao');
            $table->unsignedBigInteger('fk_Paciente_id_paciente');
            $table->unsignedBigInteger('fk_Medicamento_id_medicamento');
            $table->string('status');         // alerta ou seguro
            $table->string('codigo_evento');  // ERR-402
            $table->string('nivel_risco');    // CRÍTICO
            $table->text('mensagem');
            $table->text('justificativa')->nullable();
            $table->unsignedBigInteger('profissional_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Verificacao');
    }
};