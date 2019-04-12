@extends('layouts.app',[ "current" => "categoria"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{url('/produtos')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite nome da produto">
                    </div>
                    <div class="col form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Digite a descrição do produto">
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="quantidade">Quatidade</label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="20">
                    </div>
                    <div class="col form-group">
                        <label for="preco">Preço</label>
                        <input type="number" class="form-control" name="preco" id="preco" placeholder=" 00,00">
                    </div>
                    <div class="col form-group">
                    <label for="categoria">Categoria</label>
                    <select class="form-control custom-select">
                        <option selected>Selecionar</option>
                        @foreach($categoria as $cat)
                            <option value="{{$cat->id}}" id="categoria" name="categoria">{{$cat->nome}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection