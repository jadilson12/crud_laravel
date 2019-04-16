@extends('layouts.app',[ "current" => "clientes"])

@section('body')
    <div class="card border">
        <div class="card-header text-center" id="cardtitle">
        </div>
        <div class="card-body" >
            <table class="table table-hover" id="tabelaClientes">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <nav id="pagination">
                <ul class="pagination justify-content-md-center">
                </ul>
            </nav>
        </div>
    </div>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection

@section('javascript')
<script src="{{ asset('js/page/clientes.js')}}" type="text/javascript" ></script>

@endsection