@extends('layouts.app',[ "current" => "clientes"])

@section('body')
    <div class="card border">
            <div class="card-header text-center">Tabela de Clientes
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Exibindo {{$clientes->count()}} clientes de {{$clientes->total()}}
                    ( {{$clientes->firstItem()}} a {{$clientes->lastItem()}} ) </h5>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->sobrenome}}Otto</td>
                            <td>{{$cliente->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer float-md-right">
                {{ $clientes->links() }}
            </div>
    </div>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection

@section('javascript')

    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>


@endsection