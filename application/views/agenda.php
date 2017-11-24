<?php
if (basename($_SERVER["PHP_SELF"]) == basename(__FILE__))
    exit("<script>alert('Nao permitido')</script>\n<script>window.location=('http://www.google.com.br')</script>");
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->

<html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>AGENDA - AEROCLUBE DE ELDORADO DO SUL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo site_url('estilos/css/ckb.css'); ?>"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">


        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/js/bootstrap.min.js'); ?>">

    </head>

    <body>

        <div id="desmarcaModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Atenção!</h4>
                    </div>
                    <div class="modal-body">
                        É importante avisar o aluno que seu voo está sendo desmarcado. Selecione o motivo do cancelamento:
                        <br>
                        <form id="formCadInva" action="" method="post">
                            <input type="hidden" name="cod_pessoafisica" value="1">
                            <?php
                            $this->load->library('form_validation');
                            $this->load->helper('form');
                            echo validation_errors();




                            $attr = array(
                                'method' => 'POST',
                                'id' => 'ajax_form',
                                'type' => 'submit',
                                'class' => 'container-fluid page'
                            );
                            echo form_open('', $attr);
                            ?>
                            <fieldset>

                                <br>
                                <fieldset class="col-md-12">

                                    <div class="panel panel-default">
                                        <div class="panel-body">


                                            <div class="radio radio-inline radio-primary">
                                                <?php
                                                $motivo_manut = array(
                                                    'name' => 'radio',
                                                    'id' => 'motivo_manut',
                                                    'type' => 'radio',
                                                    'value' => 1
                                                );

                                                echo form_radio($motivo_manut)
                                                ?>
                                                <label for="motivo_manut"> MANUTENÇÃO</label>
                                            </div>
                                            <br>

                                            <!--MET, PRIORIDADE, IND. INVA, FINANCEIRO, CMA -->

                                            <div class="radio radio-inline radio-primary">

                                                <?php
                                                $motivo_metero = array(
                                                    'name' => 'radio',
                                                    'id' => 'motivo_metero',
                                                    'type' => 'radio',
                                                    'value' => 1,
                                                );

                                                echo form_radio($motivo_metero)
                                                ?>
                                                <label for="motivo_metero"> COND. MET. ADVERSA</label>
                                            </div>
                                            <br>
                                            <div class="radio radio-inline radio-primary">

                                                <?php
                                                $motivo_prioridade = array(
                                                    'name' => 'radio',
                                                    'id' => 'motivo_prioridade',
                                                    'type' => 'radio',
                                                    'value' => 1,
                                                );

                                                echo form_radio($motivo_prioridade)
                                                ?>
                                                <label for="motivo_prioridade"> VOO PRIORITÁRIO NA ACFT</label>
                                            </div>
                                            <br>
                                            <div class="radio radio-inline radio-primary">

                                                <?php
                                                $motivo_invaindisp = array(
                                                    'name' => 'radio',
                                                    'id' => 'motivo_invaindisp',
                                                    'type' => 'radio',
                                                    'value' => 1,
                                                );

                                                echo form_radio($motivo_invaindisp)
                                                ?>
                                                <label for="motivo_invaindisp">IND. INVA</label>
                                            </div>
                                            <br>
                                            <div class="radio radio-inline radio-primary">

                                                <?php
                                                $motivo_debitos = array(
                                                    'name' => 'radio',
                                                    'id' => 'motivo_debitos',
                                                    'type' => 'radio',
                                                    'value' => 1,
                                                );

                                                echo form_radio($motivo_debitos)
                                                ?>
                                                <label for="motivo_debitos">DÉBITOS FINANCEIROS</label>
                                            </div>
                                            <br>
                                            <div class="radio radio-inline radio-primary">

                                                <?php
                                                $motivo_cma = array(
                                                    'name' => 'radio',
                                                    'id' => 'motivo_cma',
                                                    'type' => 'radio',
                                                    'value' => 1,
                                                );

                                                echo form_radio($motivo_cma)
                                                ?>
                                                <label for="motivo_cma">CMA VENCIDO</label>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">

                                                <label for="infoad">Informações adicionais:</label>
                                                <?php
                                                $infoad = array(
                                                    'name' => 'radio',
                                                    'id' => 'infoad',
                                                    'type' => 'textarea',
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => 'OPCIONAL',
                                                    'style' => 'resize: none'
                                                );

                                                echo form_textarea($infoad)
                                                ?>

                                            </div>

                                        </div>
                                    </div>

                                </fieldset>


                            </fieldset>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" id="btnDesmarcaVoo" class="btn btn-danger">Desmarcar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->





        <div class="container">  
            <div class="page-header">
                <h1>Agenda</h1>      
            </div>

            <div class="alert alert-success" style="display: none;">
            </div>
            <br>


            <div id="carregadias" style="text-align: center;" class="" style="padding: 1em;">


            </div>

            <div id="carregamarcacaoadmin" style="overflow-x:hidden;">
                
                    
                    <?php
                    $this->load->library('form_validation');
                    $this->load->helper('form');
                    echo validation_errors();




                    $attr = array(
                        'method' => 'POST',
                        'id' => 'formMarcaVoo',
                        'type' => 'submit',
                        'class' => 'container-fluid page'
                    );
                    echo form_open('', $attr);
                    ?>


                    <br>
                    <fieldset class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php
                                $cod_curso = array(
                                    'name' => 'cod_curso',
                                    'id' => 'cod_curso',
                                    'placeholder' => 'CÓD. AES',
                                    'type' => 'text',
                                    'required' => 'true',
                                    'class' => 'form-control',
                                    'maxlength' => 4
                                );
                                ?>
                                <div class="row">

                                    <div class="form-group col-md-2">
                                        <label for="cod_curso">Curso</label>
                                        <?php
                                        

                                        $cursos = array(
                                            '2' => 'PP-A',
                                            '4' => 'PC-A',
                                            '6' => 'INVA'
                                        );
                                        echo form_dropdown('', $cursos, '', $cod_curso);
                                        ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="cod_missao">Missão</label>
                                        <?php
                                        $missao = array(
                                            '1' => 'ADAPTAÇÃO',
                                            '2' => 'ÁREA',
                                            '3' => 'TGL',
                                            '4' => 'NAVEGAÇÃO',
                                            '5' => 'CHECK',
                                            '6' => 'REPASSE',
                                            '7' => 'PI',
                                        );

                                        $jsmissao = array(
                                            'name' => 'cod_missao',
                                            'id' => 'cod_missao',
                                            'placeholder' => 'Missão',
                                            'type' => 'text',
                                            'required' => 'true',
                                            'class' => 'form-control',
                                            'maxlength' => 4
                                        );
                                        echo form_dropdown('', $missao, '', $jsmissao);
                                        ?>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="cod_instrutor">Instrutor</label>
                                        <?php
                                        $jsinvas = array(
                                            'name' => 'cod_instrutor',
                                            'id' => 'cod_instrutor',
                                            'placeholder' => 'Instrutor',
                                            'type' => 'text',
                                            'required' => 'true',
                                            'class' => 'form-control',
                                            'maxlength' => 4
                                        );
                                        echo form_dropdown('', '', '', $jsinvas);
                                        ?>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="codaes">Aeronave</label>
                                        <?php
                                        $jsacft = array(
                                            'name' => 'cod_aeronave',
                                            'id' => 'cod_aeronave',
                                            'placeholder' => 'Aeronave',
                                            'type' => 'text',
                                            'required' => 'true',
                                            'class' => 'form-control',
                                            'maxlength' => 4
                                        );
                                        echo form_dropdown('', '', '', $jsacft);
                                        ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="cod_pessoafisica">Aluno</label>
                                        <?php
                                        $jsaluno = array(
                                            'name' => 'cod_pessoafisica',
                                            'id' => 'cod_pessoafisica',
                                            'placeholder' => 'Aeronave',
                                            'type' => 'text',
                                            'required' => 'true',
                                            'class' => 'form-control',
                                            'maxlength' => 4
                                        );
                                        echo form_dropdown('', '', '', $jsaluno);
                                        ?>
                                    </div>

                                   <!-- <div class="form-group col-md-2">
                                        <label for="codaes">Prioridade</label>
                                        <?php
                                        echo form_dropdown('', '', '', $codaes);
                                        ?>
                                    </div>-->
                                </div>
                                <div id="carrega_hora" style="overflow-x:hidden;">

                                </div>
                                <div class="form-group col-md-3">
                                <?php
                                $submitMat = array(
                                    'value' => 'Marcar Voo',
                                    'id' => 'btnMarcaVoo',
                                    'class' => 'btn btn-primary',
                                );

                                echo form_submit($submitMat);
                                form_close();
                                ?>
                                </div>
                            </div>

                        </div>

                    </fieldset>



               
            </div>

            <div id="carregamarcacaoaluno" style="overflow-x:hidden;">

            </div>

            <!-- Default panel contents -->

            <table class="table table-bordered" style="margin-top: 20px;">


                <tbody id="carregaescala" style="overflow-x:hidden;">

                </tbody>

            </table>
        </div>
    </div>
</body>

<?php
$nivelacesso = $this->session->userdata('cod_nivelacesso');

if ($nivelacesso == 5) {
    $qtde_dias = 21;
} if ($nivelacesso == 1) {
    $qtde_dias = 14;
}
?>
<script>

    $(function() {
        carregaescala();
        buscaDiasSemana();
        ddpInvas();
        dpdAcfts();
        dpdAlunos();



        $('#btnMarcaVoo').click(function(e) {
            
            var dia_mes = $('#formMarcaVoo').attr('data-transfer-dia');
            var data = $('#formMarcaVoo').serialize();
            var horarios = $('#formHorarios').serialize();
            
            
            var dados = data+'&dia_mes='+dia_mes+'&horarios='+horarios;
            alert(dados);
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>agenda/marcaVoos',
                data: dados,
                async: false,
                dataType: 'json',
                success: function(response) {
                  e.preventDefault();
                },
                error: function() {
                   
                }
            });

        });


        function ddpInvas() {

            var tipo_curso = $('#formMatricula').attr('data-transfer-tipocurso');
            var cod_cursomatricula = $('#formMatricula').attr('data-transfer-codcurso');

            $.ajax({
                type: 'ajax',
                data: {tipo_curso: tipo_curso, cod_cursomatricula: cod_cursomatricula},
                url: '<?php echo base_url() ?>instrutores/dpdInvas',
                async: false,
                method: 'POST',
                dataType: 'json',
                beforeSend: function() {
                    $("#cod_instrutor").html('<option value="">Carregando informações...</option>')
                },
                success: function(data) {
                    var option = '';
                    $.each(data, function(key, value) {
                        option += '<option value="' + key + '">' + value + '</option>';
                    });

                    $("#cod_instrutor").html('<option value="">Selecione...</option>' + option);
                },
                error: function() {
                    alert('Erro ao carregar dados.');
                }
            });
        }


        function dpdAcfts() {

            var tipo_curso = $('#formMatricula').attr('data-transfer-tipocurso');
            var cod_cursomatricula = $('#formMatricula').attr('data-transfer-codcurso');

            $.ajax({
                type: 'ajax',
                data: {tipo_curso: tipo_curso, cod_cursomatricula: cod_cursomatricula},
                url: '<?php echo base_url() ?>aeronaves/dpdAcfts',
                async: false,
                method: 'POST',
                dataType: 'json',
                beforeSend: function() {
                    $("#cod_aeronave").html('<option value="">Carregando informações...</option>')
                },
                success: function(data) {
                    var option = '';
                    $.each(data, function(key, value) {
                        option += '<option value="' + key + '">' + value + '</option>';
                    });

                    $("#cod_aeronave").html('<option value="">Selecione...</option>' + option);
                },
                error: function() {
                    alert('Erro ao carregar dados.');
                }
            });
        }

        function dpdAlunos() {

            var tipo_curso = $('#formMatricula').attr('data-transfer-tipocurso');
            var cod_cursomatricula = $('#formMatricula').attr('data-transfer-codcurso');

            $.ajax({
                type: 'ajax',
                data: {tipo_curso: tipo_curso, cod_cursomatricula: cod_cursomatricula},
                url: '<?php echo base_url() ?>pessoafisica/dpdAlunos',
                async: false,
                method: 'POST',
                dataType: 'json',
                beforeSend: function() {
                    $("#cod_pessoafisica").html('<option value="">Carregando informações...</option>')
                },
                success: function(data) {
                    var option = '';
                    $.each(data, function(key, value) {
                        option += '<option value="' + key + '">' + value + '</option>';
                    });

                    $("#cod_pessoafisica").html('<option value="">Selecione...</option>' + option);
                },
                error: function() {
                    alert('Erro ao carregar dados.');
                }
            });
        }









        function buscaDiasSemana() {
            var qtd_dias = "<?php echo $qtde_dias; ?>";

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>agenda/buscaDiasSemana',
                async: false,
                data: {qtd_dias: qtd_dias},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        if (i == 7 || i == 14) {
                            html += '<br>';
                            $('#carregadias').html(html);
                        }
                        html +=
                                /*  '<a href="javascript:;" class="btn btn-xs btn-danger glyphicon glyphicon-trash item-delete-inva" data="' + data[i].cod_pessoafisica + '"></a>' +*/


                                '<button type="button" id="btnSelectDia" class="btn btn-blue btn-sm item-dia-escala" data="' + data[i].dia_mes + '">' + data[i].dia_nome + ' ' + data[i].dia_mes + '</button>';
                    }
                    $('#carregadias').html(html);

                },
                error: function() {
                    alert('Could not get Data from Database');
                }
            });


        }


        $('#carregaescala').on('click', '.item-delete-voo', function() {
            var cod_agenda = $(this).attr('data');
            $('#desmarcaModal').modal('show');

            $('#btnDesmarcaVoo').unbind().click(function() {

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: '<?php echo base_url() ?>agenda/desmarcaVoo',
                    data: {cod_agenda: cod_agenda},
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#desmarcaModal').modal('hide');
                            $('.alert-success').html('Voo desmarcado!').fadeIn().delay(4000).fadeOut('slow');
                            getitens();
                        } else {
                            alert('Error');
                        }
                    },
                    error: function() {
                        alert('Error deleting');
                    }
                });
            });
        });

        function carregaescala() {

            /*var data = new Date();
             
             // Guarda cada pedaço em uma variável
             var dia     = data.getDate();           // 1-31
             var mes     = data.getMonth();          // 0-11 (zero=janeiro)
             var ano2    = data.getFullYear();           // 2 dígitos
             
             
             // Formata a data e a hora (note o mês + 1)
             var str_data = dia + '/' + (mes+1) + '/' + ano2;
             
             
             // Mostra o resultado
             alert('Hoje é ' + str_data);*/

            $("#carregaescala").html('');

                <?php
                $date = new DateTime();
                date_default_timezone_set('America/Sao_Paulo');
                $dataatual = $date->format('d/m/y');
                ?>
            var data_mes = "<?php echo $dataatual; ?>";
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>agenda/cabecalho',
                async: false,
                data: {dia_mes: data_mes},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var a;
                    for (i = 0; i < data.length; i++) {

                        var array = data[i].horario_escala;
                        var arr = array.split("-");
                        var a = 0;

                        var len = arr.length;

                        var htmla = '';
                        var html_hora = '';
                        html_hora += 'Horários: ';
                        html_hora+= '<form id="formHorarios" action="" method="post">';
                        for (; a < len; ) {



                            /* html_hora += '<div class="checkbox checkbox-inline checkbox-primary">'+
                             '<label for="'+arr[a]+'">'+arr[a]+'</label></div>';*/

                            html_hora += ' <div class="checkbox checkbox-inline checkbox-primary">' +
                                    '<input type="checkbox" name="' + arr[a] + '" value="1" id="' + arr[a] + '">' +
                                    '<label for="' + arr[a] + '">' + arr[a] + '</label></div>';


                            
                            var metade = Math.floor(arr[a].length / 2);
                            var resultado = arr[a].substr(0, metade) + ":" + arr[a].substr(metade);

                            htmla += '<td class="" style="text-align: center; vertical-align: middle;"><b>' + resultado + '</b></td>';
                            a++;
                        }
                        
                        html_hora+= '</form>';
                        
                        $("#carrega_hora").append(html_hora);


                        /*for(a = 0; a < arr.lenght; a++){
                         alert(a);
                         }*/


                        html += '<tr>' +
                                '<td class="btn-org" style="text-align: center; max-width: 3em; min-width: 3em;"><b>' + data[i].dia_nome + '<br>' + data[i].dia_mes + '</b></td>' +
                                htmla;
                        '</tr>';
                    }


                    $("#carregaescala").append(html);
<?php
if ($nivelacesso == 5) {
    $url = 'carregaInvasAdmin';
} else {
    $url = 'carregaInvasDefault';
}
?>
                    var url = "<?php echo $url; ?>";
                    /**before*/

                    $.ajax({
                        type: 'ajax',
                        url: '<?php echo base_url() ?>agenda/' + url,
                        async: false,
                        data: {dia_mes: data_mes, array: array},
                        method: 'post',
                        dataType: 'json',
                        success: function(retorno) {



                            var htmlinvas = '';
                            var i;
                            for (i = 0; i < retorno.length; i++) {
                                htmlinvas += '<tr>' +
                                        '<td class="btn-org" style="text-align: center; vertical-align: middle; max-width: 3em; min-width: 3em;"><br>' + retorno[i].nomeguerra_pessoafisica + '<br><br></td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora1 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora2 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora3 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora4 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora5 + '</td>' +
                                        '</tr>';
                            }
                            $("#carregaescala").append(htmlinvas);
                        },
                        error: function() {
                            alert('Could not get Data from Database');
                        }
                    });


                },
                error: function() {
                    alert('Could not get Data from Database');
                }
            });





        }
        $('#carregadias').on('click', '.item-dia-escala', function() {


            $("#carregaescala").html('');
            $("#carrega_hora").html('');
            var data_mes = $(this).attr('data');
            $('#formMarcaVoo').attr('data-transfer-dia', data_mes);
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>agenda/cabecalho',
                async: false,
                data: {dia_mes: data_mes},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var a;
                    for (i = 0; i < data.length; i++) {
                        var array = data[i].horario_escala;
                        var arr = array.split("-");
                        var a = 0;
                        var len = arr.length;
                        var htmla = '';
                        var html_hora = '';
                        html_hora += 'Horários: ';
                        html_hora+= '<form id="formHorarios" action="" method="post">';
                        for (; a < len; ) {



                            /* html_hora += '<div class="checkbox checkbox-inline checkbox-primary">'+
                             '<label for="'+arr[a]+'">'+arr[a]+'</label></div>';*/

                            html_hora += ' <div class="checkbox checkbox-inline checkbox-primary">' +
                                    '<input type="checkbox" name="' + arr[a] + '" value="' + arr[a] + '" id="' + arr[a] + '">' +
                                    '<label for="' + arr[a] + '">' + arr[a] + '</label></div>';


                            
                            var metade = Math.floor(arr[a].length / 2);
                            var resultado = arr[a].substr(0, metade) + ":" + arr[a].substr(metade);

                            htmla += '<td class="" style="text-align: center; vertical-align: middle;"><b>' + resultado + '</b></td>';
                            a++;
                        }
                        
                        html_hora+= '</form>';
                        console.log('Monta Form: ', html_hora);
                        $("#carrega_hora").append(html_hora);


                        /*for(a = 0; a < arr.lenght; a++){
                         alert(a);
                         }*/


                        html += '<tr>' +
                                '<td class="btn-org" style="text-align: center; max-width: 3em; min-width: 3em;"><b>' + data[i].dia_nome + '<br>' + data[i].dia_mes + '</b></td>' +
                                htmla;
                        '</tr>';
                    }


                    $("#carregaescala").append(html);
<?php
if ($nivelacesso == 5) {
    $url = 'carregaInvasAdmin';
} else {
    $url = 'carregaInvasDefault';
}
?>
                    var url = "<?php echo $url; ?>";
                    /**before*/


                    $.ajax({
                        type: 'ajax',
                        url: '<?php echo base_url() ?>agenda/' + url,
                        async: false,
                        data: {dia_mes: data_mes, array: array},
                        method: 'post',
                        dataType: 'json',
                        success: function(retorno) {
                            var keys = Object.keys(retorno);
                            var str = JSON.stringify(retorno);



                            var htmlinvas = '';
                            var i;
                            var b = 'hora';

                            /*for (var i = 0; i < retorno.length; i++) {
                             var obj = arr[i];
                             
                             
                             console.log(arr[i]);
                             
                             htmlinvas += '<tr>' +
                             '<td class="btn-org" style="text-align: center; vertical-align: middle; max-width: 3em; min-width: 3em;"><br>' + retorno[i].nomeguerra_pessoafisica + '<br><br></td>' +
                             '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].v + '</td>' +
                             '</tr>';
                             
                             console.log(retorno[i].v);
                             for (var key in obj) {
                             
                             
                             
                             
                             htmlinvas += '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora1 + '</td>' +
                             '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora2 + '</td>' +
                             '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora3 + '</td>' +
                             '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora4 + '</td>' +
                             '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora5 + '</td>' +
                             '</tr>';
                             
                             }
                             }*/
                            for (i = 0; i < retorno.length; i++) {
                                htmlinvas += '<tr>' +
                                        '<td class="btn-org" style="text-align: center; vertical-align: middle; max-width: 3em; min-width: 3em;"><br>' + retorno[i].nomeguerra_pessoafisica + '<br><br></td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora1 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora2 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora3 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora4 + '</td>' +
                                        '<td class=" desmarca-voo" data="" style="text-align: center; max-width: 3em; min-width: 3em; background-color: #f5f4f7; vertical-align: middle;">' + retorno[i].hora5 + '</td>' +
                                        '</tr>';

                            }
                            $("#carregaescala").append(htmlinvas);


                        },
                        error: function() {
                            alert('Could not get Data from Database');
                        }
                    })


                },
                error: function() {
                    alert('Could not get Data from Database');
                }
            });
        });
    });

</script>
</html>