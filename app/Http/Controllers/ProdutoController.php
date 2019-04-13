<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{


    // A função indexView mosta a lista de produtos

    public function indexView()
    {
        return view('produtos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::all();
        return $produto->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if(isset($produto)){
            $produto->nome = $request->input('nome');
            $produto->descricao = $request->input('descricao');
            $produto->quantidade = $request->input('quantidade');
            $produto->preco = $request->input('preco');
//            $produto->categoria_id = $request->input('categorias');
            $produto->save();
        }
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            $produto->delete();
        }
        return redirect('/produtos');
    }
}
