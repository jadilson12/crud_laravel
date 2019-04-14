<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function cliente(){

        // relacionamento entre chave id cliente com id enderenço

        return $this->belongsTo('App\Models\Cliente');
    }
}
