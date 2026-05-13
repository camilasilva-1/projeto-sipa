<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'Medicamento'; 

    protected $primaryKey = 'id_medicamento'; 

    protected $fillable = [
        'nome_comercial', 
        'apresentacao_dosagem', 
        'fabricante', 
        'nome_generico', 
        'composicao_principio_ati', 
        'cod_atc' 
    ];
}