<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{



    public function index()
    {
        $categoria = Categoria::all();

        return view('categorias.index', compact('categoria'));
    }


    public function create()
    {
        return view('categorias.nova');
    }


    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->input('nomeCategoria');
        $categoria->save();
        return redirect('/categorias');
    }


    public function edit($id)
    {
        $categoria = Categoria::find($id);

        if(isset($categoria)){

            return view('categorias.edita',compact('categoria'));
        }

        return redirect('/categorias');
    }



    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if(isset($categoria)){

            $categoria->nome = $request->input('nomeCategoria');
            $categoria->save();

        }

        return redirect('/categorias');
    }



    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if(isset($categoria)){

            $categoria->delete();
        }

        return redirect('/categorias');
    }

    public function indexJson()
    {
        $categoria = Categoria::all();

        return json_encode($categoria);
    }
}
