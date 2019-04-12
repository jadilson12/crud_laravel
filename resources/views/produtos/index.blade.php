@extends('layouts.app',[ "current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de produtos</h5>
               @if(count($produto) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quatidade</th>
                    <th>Preço</th>
{{--                    <th>ID Categoria</th>--}}
                    <th>Criado</th>
                    <th>Ações</th>

                </tr>
                </thead>
                <tbody>
                @foreach($produto as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->nome}}</td>
                        <td>{{$prod->descricao}}</td>
                        <td>{{$prod->quantidade}}</td>
                        <td>{{$prod->preco}}</td>
{{--                        <td>{{$prod->categoria_id}}</td>--}}
                        <td>{{$prod->created_at}}</td>
                        <td>
                            <a href="{{url('/produtos')}}/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{url('/produtos')}}/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
               @endif
        </div>
        <div class="card-footer">
            <a href="{{route('produtos.novo')}}" class="btn btn-sm btn-primary" role="button">Novo produto</a>
        </div>
    </div>


@endsection
