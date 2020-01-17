<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable = ['id','ano','turno'];

    public function eleitores()
    {
        return $this->hasOne(Eleitor::class, 'campanha_id');
    }
}
