<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalVotacao extends Model
{
    protected $table = 'locais_votacao';
    protected $fillable = [
        'id',
        'local',
        'zona',
        'secao',
        'cep',
        'logradouro',
        'num',
        'bairro',
        'cidade'
        ];
}
