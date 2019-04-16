$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function getItemProximo(data) {
    i = data.current_page + 1;
    if(data.current_page === data.last_page)
        s = '<li class="page-item disabled">';
    else
        s = '<li class="page-item">';

    s += '<a class="page-link" ' + ' pagina="' + i + '" href="javascript:void(0);">Próximo</a></li>';
    return s;
}

function getItemAnterior(data) {
    i = data.current_page  - 1;
    if(data.current_page === 1)
        s = '<li class="page-item disabled">';
    else
        s = '<li class="page-item">';

    s += '<a class="page-link"  ' + ' pagina="' + i + '" href="javascript:void(0);">Anterior</a></li>';
    return s;
}

function getItem(data, i) {
    if(data.current_page === i)
        s = '<li class="page-item active">';
    else
        s = '<li class="page-item">';

    s += '<a class="page-link" ' + ' pagina="' + i + '"  href="javascript:void(0);">' + i + '</a></li>';
    return s;
}

function montarPagination(data) {
    $('#pagination>ul>li').remove();
    $('#pagination>ul').append(getItemAnterior(data));



    // logica para centalizar o indicador da pagina
    n = 10;

    if (data.current_page - n/2 <= 1)
        inicio = 1;
    else if (data.last_page - data.current_page < n)
        inicio = data.last_page - n + 1;
    else
        inicio = data.current_page - n/2;

    final= inicio + n - 1;

    // fim da logica

    for( i = inicio; i < final; i++){
        s = getItem(data, i);
        $('#pagination>ul').append(s);
    }
    $('#pagination>ul').append(getItemProximo(data));
}

// carreagar cliente

function montarlinha(cliente) {

    cliente =  '<tr>' +
        '<td>' +  cliente.id +'</td>' +
        '<td>' +  cliente.nome +'</td>' +
        '<td>' +  cliente.sobrenome + '</td>' +
        '<td>' +  cliente.email + '</td>' +
        '</tr>';
    return cliente;
}

function montarTabela(resp) {
    $('#tabelaClientes>tbody>tr').remove();
    for(i = 0; i < resp.data.length; i++){
        let s = montarlinha(resp.data[i])
        $('#tabelaClientes>tbody').append(s);
    }
}

function cagerregarCliente(pagina) {
    $.get('/json',{page:pagina}, function(resp){
        montarTabela(resp);
        montarPagination(resp);

        // Funcionalidade do Clique na navegação pagination

        $('#pagination>ul>li>a').click(function () {
            cagerregarCliente( $(this).attr('pagina'));

        });

        $("#cardtitle").html( "Exibindo " + resp.per_page +
            " clientes de " + resp.total +
            " (" + resp.from + " a " + resp.to +  ")" );
    })
}

$(function () {
    cagerregarCliente(1)
})

// fim de carregar cliente