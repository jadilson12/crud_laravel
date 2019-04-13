$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function carregarCategorias() {
    $.getJSON('/api/categorias', function(data) {
        for(i=0;i<data.length;i++) {
            opcao = '<option value ="' + data[i].id + '">' +
                data[i].nome + '</option>';
            $('#categoriaProduto').append(opcao);
        }
    });
}

function montarLinha(p) {
    var linha = "<tr>" +
        "<td>" + p.id + "</td>" +
        "<td>" + p.nome + "</td>" +
        "<td>" + p.estoque + "</td>" +
        "<td>" + p.preco + "</td>" +
        "<td>" + p.categoria_id + "</td>" +
        "<td>" +
        '<button class="btn btn-sm btn-primary" onclick="editar(' + p.id +')"> Editar </button> ' +
        '<button class="btn btn-sm btn-danger" onclick="remover(' + p.id +')"> Apagar </button> ' +
        "</td>" +
        "</tr>";
    return linha;
}

function carregarProdutos(){
    $.getJSON('/api/produtos', function (produtos) {
        for (i = 0; i < produtos.length; i++) {
            linha = montarLinha(produtos[i]);
            $('#tabelaProdutos>tbody').append(linha);
        }
    });

}

$(function () {
    carregarCategorias();
    carregarProdutos();
});