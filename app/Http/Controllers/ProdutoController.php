<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{


    // A função indexView mosta a lista de produtos

    public function indexView()
    {

        return view('produtos');

    }

    public function index()
    {

        $produto = Produto::all();
        return $produto->toJson();

    }


    public function store(Request $request)
    {
        $produtos = new Produto();
        $produtos->nome = $request->input('nome');
        $produtos->preco = $request->input('preco');
        $produtos->estoque = $request->input('estoque');
        $produtos->categoria_id = $request->input('categoria_id');
        $produtos->save();
        return json_encode($produtos);
    }


    public function show($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            return json_encode($produto);
        }
        return response('Produto não encontado', 404);
    }


    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->nome = $request->input('nome');
            $produto->preco = $request->input('preco');
            $produto->estoque = $request->input('estoque');
            $produto->categoria_id = $request->input('categoria_id');
            $produto->save();
            return json_encode($produto);
        }
        return response('Produto não encontrado', 404);
    }


    public function destroy($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            $produto->delete();
            return response('Ótimo, deu bom',200);
        }
        return response('erro, deu ruim',404);
    }
}
