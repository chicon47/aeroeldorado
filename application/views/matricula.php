<html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>MATRÍCULA - AEROCLUBE DE ELDORADO DO SUL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>


        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/js/bootstrap.min.js'); ?>">

    </head>

    <body>
        <div class="container">
            <div class="page-header">
                <h1>Consulta de Matrículas</h1>      
            </div>
            <div class="alert alert-success" style="display: none;">
            </div>
            <br>
            <div class="panel panel-default">
                <!-- Default panel contents -->

                <table class="table table-responsive" style="margin-top: 20px;">
                    <thead>
                        <tr>
                            <th><b>Curso</b></th>
                            <th style="text-align: center;"><b>Aluno</b></th>
                            <th style="text-align: center;"><b>Data Matrícula</b></th>
                            <th style="text-align: center;"><b>Situação</b></th>
                            <th style="text-align: center;"><b>Vigente</b></th>
                            <th></th>
                            <th></th>
                        </tr>

                    </thead>


                    <tbody id="showdata" style="overflow-x:hidden;">

                    </tbody>

                </table>
            </div>
        </div>



        <div id="baixaMatricula" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Confirmação de Exclusão</h4>
                    </div>
                    <div class="modal-body">
                        <b style="color: red;">Atenção: a exclusão de Pessoa Física IMPEDE o acesso do usuário ao sistema. Caso deseje bloquear o acesso do usuário ao sistema consulte: Menu > Login</b> <br><br>
                        Você realmente deseja excluir este registro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" id="btnDelete" class="btn btn-danger">Deletar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </body>



    <script>
        $(function() {

            carregaMatriculas();

            function carregaMatriculas() {

                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>matricula/carregaMatriculas',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {

                            switch (data[i].matricula_vigente) {
                                case 'SIM':
                                    html += '<tr>' +
                                            '<td hidden>' + data[i].cod_matricula + '</td>' +
                                            '<td>' + data[i].descricao_cursomatricula + '</td>' +
                                            '<td style="text-align: center;">' + data[i].nomeguerra_matricula + '</td>' +
                                            '<td style="text-align: center;">' + data[i].data_matricula + '</td>' +
                                            '<td style="text-align: center;">' + data[i].baixa_matricula + '</td>' +
                                            '<td style="text-align: center;">' + data[i].matricula_vigente + '</td>' +
                                            '<td>' +
                                            '<a href="javascript:;" class="btn btn-xs btn-warning baixa-matricula" data="' + data[i].cod_matricula + '">Baixar</a>' +
                                            '</td>' +
                                            '<td>' +
                                            '<a href="javascript:;" class="glyphicon glyphicon glyphicon-print item-print" data="' + data[i].cod_matricula + '"></a>' +
                                            '</td>' +
                                            '</tr>';
                                    break;

                                case 'NÃO':
                                    html += '<tr bgcolor="#696969"> ' +
                                            '<td hidden>' + data[i].cod_matricula + '</td>' +
                                            '<td style="color:#FFFFFF" >' + data[i].descricao_cursomatricula + '</td>' +
                                            '<td style="text-align: center; color:#FFFFFF ">' + data[i].nomeguerra_matricula + '</td>' +
                                            '<td style="text-align: center; color:#FFFFFF ">' + data[i].data_matricula + '</td>' +
                                            '<td style="text-align: center; color:#FFFFFF ">' + data[i].baixa_matricula + '</td>' +
                                            '<td style="text-align: center; color:#FFFFFF ">' + data[i].matricula_vigente + '</td>' +
                                            '<td>' +
                                            '<a href="javascript:;" class="btn btn-xs btn-warning disabled baixa-matricula" data="' + data[i].cod_matricula + '">Baixar</a>' +
                                            '</td>' +
                                            '<td>' +
                                            '<a href="javascript:;" class="glyphicon glyphicon glyphicon-print item-print" data="' + data[i].cod_matricula + '"></a>' +
                                            '</td>' +
                                            '</tr>';
                                    break;
                            }
                        }
                        $('#showdata').html(html);
                    },
                    error: function() {
                        alert('Could not get Data from Database');
                    }
                });
            }





            $('#showdata').on('click', '.baixa-matricula', function() {

                var cod_matricula = $(this).attr('data');


                $('#deleteModal').modal('show');

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: '<?php echo base_url() ?>matricula/baixarMatricula',
                    data: {cod_matricula: cod_matricula},
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Matrícula baixada com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                            carregaMatriculas();
                        } else {
                            alert('Error');
                        }
                    },
                    error: function() {
                        alert('Erro ao baixar matrícula.');
                    }
                });

            });
        });

    </script>
</html>