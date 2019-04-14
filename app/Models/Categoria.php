<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    // isso como uma lixeira posibitando a restouração posterior
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    // fillable define quais os campos que podem ser inseridos pelo usuário do sistema no Banco

    protected $fillable = ['nome']    ;

    // guarded protege os campos de inserções impede que alguém insira dados em alguns campos da nossa tabela.

    protected $guarded = [ 'created_at', 'update_at'];

    public function produto(){
        // realacionamento sendo esse de UM para muito

        return $this->hasMany('App\Produto');
    }

}
