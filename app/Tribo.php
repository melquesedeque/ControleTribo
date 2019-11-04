<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribo extends Model{
    
    protected $fillable = [
        'igreja',
        'nomeTribo',
        'dataTribo',
        'oferta',
        'quantidadePessoal'
    ];
}
