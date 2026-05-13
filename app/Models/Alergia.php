<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    protected $table = 'Alergia';
    
    protected $primaryKey = 'id_alergia';
    
    protected $fillable = [
        'nome_alergia', 
        'categoria', 
        'intensidade_alergia' 
    ];
   
    public function pacientes()
    {
        return $this->belongsToMany(
            Paciente::class, 
            'Paciente_Alergia', 
            'fk_Alergia_id_alergia', 
            'fk_Paciente_id_paciente'
        );
    }
}