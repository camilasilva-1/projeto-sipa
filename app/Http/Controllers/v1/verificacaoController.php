<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerificacaoController extends Controller
{
    
    public function store(Request $request)
    {
       
        return response()->json([
            'status' => 'alerta',
            'codigo_evento' => 'ERR-402',
            'nivel_risco' => 'CRÍTICO',
            'alerta_gerado' => true,
            'mensagem' => 'BLOQUEIO DE SEGURANÇA: O paciente possui registro de choque anafilático com este componente químico.',
            'detalhes' => [
                'paciente_id' => $request->id_paciente,
                'medicamento_id' => $request->id_medicamento,
                'timestamp' => now()->toDateTimeString()
            ]
        ], 200);
    }

    public function confirmarAlerta(Request $request, $id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "A ciência do profissional para o alerta ID {$id} foi registrada no log do SIPA.",
            'profissional_responsavel' => $request->nome_medico,
            'justificativa' => $request->justificativa
        ], 200);
    }
}