<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
 
    public $pacientes = [
        '1' => [
            'id_paciente' => 1, 
            'nome' => 'Renan Fernandes', 
            'CPF' => '111.222.333-44',
            'data_nascimento' => '1996-08-15', 
            'contato' => 'fernandes.renan@email.com'
        ],
        '2' => [
            'id_paciente' => 2, 
            'nome' => 'Nicole Goncalves', 
            'CPF' => '555.666.777-88', 
            'data_nascimento' => '1985-10-22', 
            'contato' => '(81) 99566-8888'
        ]
    ];

    public function index()
    {
           return response()->json(array_values($this->pacientes), 200, [], JSON_PRETTY_PRINT);
    }


    public function store(Request $request)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => 'Paciente cadastrado com sucesso!',
            'dados' => $request->all()
        ], 201, [], JSON_PRETTY_PRINT);
    }

    
    public function show(string $id)
    {
        if (isset($this->pacientes[$id])) {
            return response()->json($this->pacientes[$id], 200, [], JSON_PRETTY_PRINT);
            }
        return response()->json([
            'status' => 'erro',
            'mensagem' => 'Paciente não encontrado'
        ], 404, [], JSON_PRETTY_PRINT);
        
    }

    
    public function update(Request $request, string $id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "Paciente atualizado com sucesso!",
            'dados_atualizados' => $request->all()
        ], 200, [], JSON_PRETTY_PRINT);
    }

   
    public function destroy(string $id)
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => "Paciente removido com sucesso!"
        ], 200, [], JSON_PRETTY_PRINT);
    }
}