<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\alergiaController;
use App\Http\Controllers\v1\MedicamentoController;
use App\Http\Controllers\v1\VerificacaoController;
use App\Http\Controllers\v1\ProfissionalController;
use App\Http\Controllers\v1\PacienteController; 

Route::prefix('v1')->group(function () {

    // --- ALERGIAS ---
    Route::apiResource('alergias', alergiaController::class);

    // --- MEDICAMENTOS E ALERTAS ---
    Route::apiResource('Medicamentos', MedicamentoController::class);
    Route::post('/Verificacoes', [VerificacaoController::class, 'store']);
    Route::patch('/Alertas/{id}/confirmar', [VerificacaoController::class, 'confirmarAlerta']);

    // --- PROFISSIONAIS ---
    Route::apiResource('Profissionais', ProfissionalController::class);

    // --- PACIENTES ---
    Route::apiResource('Pacientes', PacienteController::class);

});