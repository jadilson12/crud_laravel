<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {

        return view('clientes');

    }

    public function indexjson()
    {

        return (Cliente::paginate(5));

    }

}
