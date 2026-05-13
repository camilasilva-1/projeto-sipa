<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    
    protected $table = 'Paciente'; 

    protected $primaryKey = 'id_paciente';

    protected $fillable = [
        'nome', 
        'CPF',
        'data_nascimento', 
        'contato', 
        'fk_Profissional_id_profissional' 
    ];


    public function alergias()
    {
        return $this->belongsToMany(
            Alergia::class, 
            'Paciente_Alergia', 
            'fk_Paciente_id_paciente', 
            'fk_Alergia_id_alergia'
        )->withPivot('Data_diagnostico', 'profissional_responsavel', 'Observacoes_tecnicas'); 
    }

    public function profissional()
    {
        return $this->belongsTo(Profissional::class, 'fk_Profissional_id_profissional');
    }
}