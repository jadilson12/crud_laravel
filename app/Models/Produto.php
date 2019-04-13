<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    // isso como uma lixeira posibitando a restouração posterior
    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
