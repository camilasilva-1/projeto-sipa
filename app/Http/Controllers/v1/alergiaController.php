<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlergiaController extends Controller
{
   
    public function index()
    {
            return response()->json([
            ['id_alergia' => 1, 'nome_alergia' => 'dipirona', 'categoria' => 'medicamentosa', 'intensidade' => 'grave'],
            ['id_alergia' => 2, 'nome_alergia' => 'paracetamol', 'categoria' => 'medicamentosa', 'intensidade' => 'leve'],
           
        ], 200);  
    }


    public function store(Request $request)
    {
        return response()->json([
    'status' => 'sucesso',
    'mensagem' => 'Alergia cadastrada com sucesso!',
    'dados' => $request->all()
], 201);
    }


    public function show(string $id)
    {
        return response()->json([
            'id_alergia' => $id,
            'nome_alergia' => 'dipirona',
            'categoria' => 'medicamentosa',
            'intensidade_alergia' => 'grave'
        ], 200);
    }

    
    public function update(Request $request, string $id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => " Alergia de ID {$id} atualizada com sucesso!",
            'dados_atualizados' => $request->all ()
        ], 200);
    }

}
