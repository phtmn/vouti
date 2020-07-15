<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleitor extends Model
{
    protected $table = 'eleitores';

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
        // \\'campanha_id',
        'zona_id',
        'secao'
    ];

    public function candidatos()
    {
        return $this->belongsToMany(Candidato::class);
    }

    public function local_votacao()
    {
        return $this->hasOne(LocalVotacao::class, 'zona_id');
    }

    // public function campanha()
    // {
    //     return $this->belongsTo(Campanha::class, 'campanha_id');
    // }

    public function campanhas()
    {
         return $this->belongsToMany(Campanha::class);
    }

    
}
