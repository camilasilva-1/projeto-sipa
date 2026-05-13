<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    
    public function index()
    {
        return response()->json([
            [
                "id" => 1,
                "nome" => "Dipirona 500mg",
                "categoria" => "Analgésico",
                "alerta" => "Verificar alergia a pirazolonas"
            ],
            [
                "id" => 2,
                "nome" => "Amoxicilina 250mg",
                "categoria" => "Antibiótico",
                "alerta" => "Risco crítico: Penicilina"
            ]
        ], 200);
    }

    public function store(Request $request)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => 'Medicamento cadastrado com sucesso!',
            'dados' => $request->all()
        ], 201);
    }

    public function show($id)
    {
        return response()->json([
            'id_medicamento' => $id,
            'nome' => 'Dipirona 500mg',
            'categoria' => 'Analgésico',
            'instrucoes' => 'Tomar de 6 em 6 horas em caso de dor ou febre.'
        ], 200);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "Medicamento de ID {$id} atualizado com sucesso!",
            'dados_atualizados' => $request->all()
        ], 200);
    }
 
    public function destroy($id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "Medicamento de ID {$id} removido do catálogo."
        ], 200);
    }
}