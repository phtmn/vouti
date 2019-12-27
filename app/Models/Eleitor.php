<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleitor extends Model
{
    protected $table = 'eleitores';///
    protected $fillable = [
        'id',
        'nome',
        'genero',
        'data_nasc',
        'cpf',
        'rg',
        'instagram',
        'facebook',
        'youtube',
        'cep',
        'logradouro',
        'num',
        'bairro',
        'cidade',        
        'uf',
        'num_titulo',
        'zona',
        'secao'
        ];
}
