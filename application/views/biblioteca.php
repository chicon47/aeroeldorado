<?php
if (basename($_SERVER["PHP_SELF"]) == basename(__FILE__))
    exit("<script>alert('Nao permitido')</script>\n<script>window.location=('http://www.google.com.br')</script>");
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>



        <script type="text/javascript"  src="//cdn.tinymce.com/4/tinymce.min.js"></script>




        <script>
            function filter() {
                /*var dados = $('#categoria_biblioteca').serialize() + '&' + $('#aeronave_biblioteca').serialize();*/
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'biblioteca/filtro/',
                    data: dados,
                    success: function(data)
                    {
                        alert(data);
                    }

                });
                return data;
            }
        </script>



        <!--<div style="padding-left: 30px; font-size: 1.5em; font-family: 'Avenir Next', Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;">Biblioteca</div>
        -->
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Biblioteca</h1>      
            </div>
            <div class="alert alert-success" style="display: none;">
            </div>
            <br>
            <div class="panel panel-default">
                <!-- Default panel contents -->


                <table class="table table-responsive" style="margin-top: 20px;">
                    <thead>
                        <tr>
                            <th>Descrição do Arquivo</th>
                            <th>Aeronave</th>
                            <th>Categoria</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        foreach ($lib as $item) {

                            echo ' <tr> <td>' . $item->nome_item . '</td><td>' . $item->aeronave_item . '</td><td>' . $item->categoria_item . '</td><td> <a target="_blank" style="font-color: black;" href="' . site_url($item->caminho_item) . '"><img src="' . site_url("img/download.png") . '" alt="Baixar!" width="16" height="16" border="0"></a></td> </tr>';
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>





        <br><br><br>    




        <!--<div id="loader"></div>
        
        <div style="display:none;" id="myDiv" class="animate-bottom">
            <h2>Tada!</h2>
            <p>Some text in my newly loaded page..</p>
        </div>-->

        <script>
            var numitens = 10; //quantidade de itens a ser mostrado por página
            var pagina = 1;	//página inicial - DEIXE SEMPRE 1
            $(document).ready(function() {
                getitens(pagina, numitens); //Chamando função que lista os itens
            });

            function getitens(pag, maximo) {

                pagina = pag;
                $.ajax({
                    type: 'post',
                    /*data: 'tipo=listagem&pag='+pag +'&maximo='+maximo,*/
                    data: {tipo: 'listagem', pag: pag, maximo: maximo},
                    async: false,
                    url: '<?php echo base_url() ?>biblioteca/buscaAtt',
                    success: function(data) {
                        var retorno = JSON.parse(data);
                        var html = '';
                        var i;
                        for (i = 0; i < retorno.length; i++) {




                            html += '<tr>' +
                                    '<td hidden>' + retorno[i].cod_pessoafisica + '</td>' +
                                    '<td>' + retorno[i].codaes_matricula + '</td>' +
                                    '<td>' + retorno[i].nome_pessoafisica + '</td>' +
                                    '<td>' + retorno[i].anac_pessoafisica + '</td>' +
                                    '<td>' + retorno[i].telefone_pessoafisica + '</td>' +
                                    '<td>' + retorno[i].email_pessoafisica + '</td>' +
                                    '<td>' +
                                    '<a href="javascript:;" class="btn btn-xs btn-info item-edit" data="' + retorno[i].cod_pessoafisica + '">Editar</a>' +
                                    '<a href="javascript:;" class="btn btn-xs btn-danger item-delete" data="' + retorno[i].cod_pessoafisica + '">Excluir</a>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href="javascript:;" class="glyphicon glyphicon-info-sign item-popup" data="' + retorno[i].anac_pessoafisica + '&' + retorno[i].cpf_pessoafisica + '"></a>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href="javascript:;" class="glyphicon glyphicon glyphicon-list-alt item-matricula" data="' + retorno[i].cod_pessoafisica + '&' + retorno[i].cpf_pessoafisica + '&' + retorno[i].cod_cursomatricula + '&' + retorno[i].tipo_curso + '"></a>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href="javascript:;" class="glyphicon glyphicon glyphicon glyphicon-lock item-login" data="' + retorno[i].cpf_pessoafisica + '&' + retorno[i].codaes_matricula + '"></a>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href="javascript:;" class="glyphicon glyphicon-envelope item-email" data="' + retorno[i].cpf_pessoafisica + '&' + retorno[i].codaes_matricula + '"></a>' +
                                    '</td>' +
                                    '</tr>';
                        }
                        $('#showdata').html(html);
                        contador();
                        //Chamando função que conta os itens e chama o paginador
                    }
                });
            }
            function contador() {

                $.ajax({
                    type: 'GET',
                    data: {tipo: 'contador'},
                    url: '<?php echo base_url() ?>pessoafisica/buscaPessoasCont',
                    success: function(retorno_pg) {
                        paginador(retorno_pg)
                    }
                })
            }
            function paginador(cont) {

                if (cont <= numitens) {
                    $('#paginador').html('<tr><td>Apenas uma Página<td><tr>')
                } else {
                    $('#paginador').html('<ul class="pagination justify-content-center"></ul>');

                    var qtdpaginas = Math.ceil(cont / numitens)
                    for (var i = 1; i <= qtdpaginas; i++) {
                        if (pagina == i) {
                            $('#paginador ul').append('<li class="page-item"><a class="page-link" href="#" onclick="getitens(' + i + ', ' + numitens + ')">' + i + '</a></li>')
                        } else {
                            $('#paginador ul').append('<li class="page-item"><a class="page-link" href="#" onclick="getitens(' + i + ', ' + numitens + ')">' + i + '</a></li> ')
                        }
                    }
                    if (pagina != qtdpaginas) {
                        $('#paginador ul').append('<li class="page-item"><a class="page-link" href="#" onclick="getitens(' + (pagina - 1) + ', ' + numitens + ')">Anterior</a></li>')
                        $('#paginador ul').append('<li class="page-item"><a class="page-link" href="#" onclick="getitens(' + (pagina + 1) + ', ' + numitens + ')">Próxima</a></li>')
                    }
                }
            }


        </script>

    </body>



</html>

