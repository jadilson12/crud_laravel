@extends('layouts.app',[ "current" => "categoria"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadasto de Categoria</h5>
            @if(count($categoria) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Categoria</th>
                        <th>Criado</th>
                        <th>Modificado</th>
                        <th>Ações</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categoria as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->nome}}</td>
                            <td>{{$cat->created_at}}</td>
                            <td>{{$cat->updated_at}}</td>
                            <td>
                                <a href="{{url('/categorias')}}/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="{{url('/categorias')}}/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{route('categorias.novo')}}" class="btn btn-sm btn-primary" role="button">Novo Categoria</a>
        </div>
    </div>


@endsection
