<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function endereco(){

        // atribuindo um unico endereço para o cliente

        return $this->hasOne('App\Endereco');
    }
}
