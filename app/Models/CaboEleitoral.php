<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaboEleitoral extends Model
{
    protected $fillable = ['id','nome_completo','cpf','telefone', 'email','senha','repetir_senha'];
}
