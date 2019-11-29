<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = ['id','image','nome_completo','numero','cargo'];
}
