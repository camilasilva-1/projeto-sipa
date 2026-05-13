<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Paciente', function (Blueprint $table) {
            $table->id('id_paciente');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->date('data_nascimento');
            $table->string('contato');
            // Criando a coluna da Chave Estrangeira
            $table->unsignedBigInteger('fk_Profissional_id_profissional');
            // Criando o relacionamento real com a tabela Profissional
            $table->foreign('fk_Profissional_id_profissional')
                  ->references('id_profissional')
                  ->on('Profissional')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Paciente');
    }
};