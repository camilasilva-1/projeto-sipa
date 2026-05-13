<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    
    public function index()
    {
        return response()->json([
            'status' => 'sucesso',
            'dados' => [
                [
                    'id' => 1,
                    'nome' => 'Dr. Arnaldo Silva',
                    'crm_crf' => '12345-PE',
                    'contato' => '(81) 98888-2222',
                    'especialidade' => 'Imunologista'
                ]
            ]
        ]);
    }

   
    public function store(Request $request)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => 'Profissional cadastrado!',
            'dados' => [
                'id' => rand(1, 100),
                'nome' => $request->nome,
                'crm_crf' => $request->crm_crf,
                'contato' => $request->contato,
                'especialidade' => $request->especialidade
            ]
        ], 201);
    }

    
    public function show($id)
    {
        return response()->json([
            'status' => 'sucesso',
            'dados' => [
                'id' => $id,
                'nome' => 'Dr. Arnaldo Silva',
                'crm_crf' => '12345-PE',
                'contato' => '(81) 98888-2222',
                'especialidade' => 'Imunologista'
            ]
        ]);
    }

    
    public function update(Request $request, $id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "Profissional ID {$id} atualizado!",
            'dados' => array_merge(['id' => $id], $request->all())
        ]);
    }

   
    public function destroy($id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "Profissional ID {$id} removido do sistema."
        ]);
    }
}