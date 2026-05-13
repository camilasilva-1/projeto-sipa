<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    
    protected $table = 'Profissional';

    protected $primaryKey = 'id_profissional';

    protected $fillable = [
        'nome', 
        'contato', 
        'crm_crf', 
        'especialidade'
    ];


    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'fk_Profissional_id_profissional');
    }
}