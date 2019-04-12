<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // fillable define quais os campos que podem ser inseridos pelo usuário do sistema no Banco

    protected $fillable = ['nome','descricao','quantidade','preco'];

    // guarded protege os campos de inserções impede que alguém insira dados em alguns campos da nossa tabela.

    protected $guarded = ['created_at', 'update_at'];
}
