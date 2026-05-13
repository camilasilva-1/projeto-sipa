<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verificacao extends Model
{
    protected $table = 'Verificacao';
    protected $primaryKey = 'id_verificacao';

    protected $fillable = [
        'fk_Paciente_id_paciente',
        'fk_Medicamento_id_medicamento',
        'status',
        'codigo_evento', 
        'nivel_risco',
        'mensagem',
        'profissional_id'
    ];
}