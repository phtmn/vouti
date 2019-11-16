<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    protected $table = 'papeis';
    protected $fillable = ['nome'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
