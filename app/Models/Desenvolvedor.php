<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    // Isso é obrigaorio porque foi renomeado a tabela

    protected $table = 'desenvolvedores';

    // Desenvolvedor pertecem vários projetos

    function projetos(){
        return $this->belongsToMany('App\Models\Densevolvedor','alocacoes');
    }
}
