@extends('layouts.app',[ "current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{url('/produtos')}}/{{$produto->id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$produto->nome}}" >
                    </div>
                    <div class="col form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" value="{{$produto->descricao}}" >
                    </div>
                    <div class="col form-group">
                        <label for="quantidade">Quatidade</label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade" value="{{$produto->quantidade}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="preco">Preço</label>
                        <input type="number" class="form-control" name="preco" id="preco" value="{{$produto->preco}}" >
                    </div>
{{--                    <div class="col form-group">--}}
{{--                        <label for="select">Categoria</label>--}}
{{--                        <select class="selected" id="select">--}}
{{--                            @foreach($categorias as categoriasa)--}}
{{--                                <option value="{{categoriasa->id}}">{{categoriasa->nome}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection