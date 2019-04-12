<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        return view('produtos.index',compact('produto','categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categoria = Categoria::all();

        return view('produtos.novo', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->quantidade = $request->input('quantidade');
        $produto->preco = $request->input('preco');
       // $produto->categoria_id = $request->input('categorias');
        $produto->save();
        return redirect('/produtos');
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

        $produto = Produto::find($id);
        if(isset($produto)){
            return view('produtos.edita',compact('produto'));
        }
        return redirect('/produtos');
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
