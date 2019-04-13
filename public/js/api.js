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