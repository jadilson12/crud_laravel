@extends('layouts.app',[ "current" => "categoria"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{url('/categorias')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria"  required placeholder="Nome da categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection