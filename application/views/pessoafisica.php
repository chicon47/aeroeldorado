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
        <title>MATRÍCULA - AEROCLUBE DE ELDORADO DO SUL</title>
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
        <div class="container">
            <div class="alert alert-success" style="display: none;">

            </div>
            <div class="page-header">
                <h1>Pessoa Física</h1>
            </div>


            <div id="exTab2" class="container">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a  href="#1" data-toggle="tab">Cadastro</a>
                    </li>
                    <li><a href="#2" data-toggle="tab">Instrutores</a>
                    </li>
                    <li><a href="#3" data-toggle="tab">Professores</a>
                    </li>
                </ul>

                <div class="tab-content ">
                    <div class="tab-pane active" id="1">

                        <?php
                        $add = array(
                            'value' => 'Adicionar',
                            'id' => 'btnAdd',
                            'name' => 'btnAdd',
                            'class' => 'btn btn-md btn-info'
                        );
                        $filtro_pf = array(
                            'nome_pessoafisica' => 'NOME',
                            'anac_pessoafisica' => 'ANAC',
                            'cpf_pessoafisica' => 'CPF'
                        );
                        $js = array(
                            'class' => 'form-control',
                            'id' => 'filtro_pf',
                            'name' => 'filtro_pf',
                            'required' => 'true',
                            'type' => ''
                        );
                        $shirts_on_sale = array('small', 'large');
                        $campo_busca = array(
                            'name' => 'filtro',
                            'id' => 'filtro',
                            'placeholder' => 'Digite o termo para buscar...',
                            'type' => 'text',
                            'required' => 'true',
                            'class' => 'form-control ',
                            'onkeyup' => 'search()'
                        );
                        $submit = array(
                            'value' => 'Pesquisar',
                            'id' => 'pesq',
                            'name' => 'pesq',
                            'class' => 'btn btn-primary',
                        );
                        ?>

                        <div class="panel panel-default">
                            <!-- Default panel contents -->

                            <div class="panel-body">

                            </div>
                            <div class="row" style="padding: 1em;">
                                <div class="form-group col-md-1">
                                    <?php
                                    echo form_submit($add);
                                    ?>
                                </div>
                                <div class="form-group col-md-2">
                                    <?php
                                    echo form_dropdown('', $filtro_pf, '', $js);
                                    ?>
                                </div>
                                <div class="form-group col-md-7">
                                    <?php
                                    echo form_input($campo_busca);
                                    ?>
                                </div>
                                <div class="form-group col-md-offset-1">
                                    <?php
                                    echo form_submit($submit);
                                    ?>
                                </div>
                            </div>
                            <!-- Table -->
                            <table class="table table-responsive table-striped" style="margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><b>Nº AES</b></td>
                                        <th><b>Nome</b></td>
                                        <th style="text-align: center;"><b>ANAC</b></td>
                                        <th style="text-align: center;"><b>Telefone</b></td>
                                        <th><b>E-mail</b></td>
                                        <th></td>
                                        <th></td>
                                        <th></td>
                                        <th></td>
                                        <th></td>
                                    </tr>

                                </thead>
                                <tbody id="showdata" style="overflow-x:hidden;">

                                </tbody>


                            </table>

                        </div>
                        <nav id="paginador">

                        </nav>
                    </div>
                    <div class="tab-pane" id="2">
                        <div class="panel panel-default">

                            <?php
                            $add = array(
                                'value' => 'Adicionar',
                                'id' => 'btnAddInva',
                                'name' => 'btnAddInva',
                                'class' => 'btn btn-md btn-info'
                            );
                            $filtro_pf = array(
                                'nome_pessoafisica' => 'NOME',
                                'anac_pessoafisica' => 'ANAC',
                                'cpf_pessoafisica' => 'CPF'
                            );
                            $js = array(
                                'class' => 'form-control',
                                'id' => 'filtro_pf',
                                'name' => 'filtro_pf',
                                'required' => 'true',
                                'type' => ''
                            );
                            $shirts_on_sale = array('small', 'large');
                            $campo_busca = array(
                                'name' => 'filtro',
                                'id' => 'filtro',
                                'placeholder' => 'Digite o termo para buscar...',
                                'type' => 'text',
                                'required' => 'true',
                                'class' => 'form-control ',
                                'onkeyup' => 'search()'
                            );
                            $submit = array(
                                'value' => 'Pesquisar',
                                'id' => 'pesq',
                                'name' => 'pesq',
                                'class' => 'btn btn-primary',
                            );
                            ?>
                            <div class="row" style="padding: 1em;">
                                <br>
                                <div class="form-group col-md-1">
                                    <?php
                                    echo form_submit($add);
                                    ?>
                                </div>
                            </div>


                            <table class="table table-responsive table-striped" style="margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><b>Cód.</b></th>
                                        <th><b>Inva</b></th>
                                        <th colspan="7" style="text-align: center;">Aeronaves / Missões</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>


                                </thead>

                                <tbody id="showdataInvas" style="overflow-x:hidden;">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="3">
                        <h3>CADASTRO DE PROFESSORES DE TURMAS TEÓRICAS</h3>
                    </div>
                </div>
            </div>

            <hr></hr>




















            <!--<h2>PESSOA FÍSICA</h2><BR>-->

        </div>




        <!--
        ************************************************************************
                    INÃ�CIO DO MODAL PARA SET DE DADOS DAS LICENÃ‡AS E HAB DA ANAC
        ************************************************************************
        -->
        <div id="dadosAnac" class="modal fade" tabindex="" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Licenças e Habilitações - ANAC</h4>
                    </div>
                    <div class="modal-body-anac">


                    </div>
                </div>
            </div>
        </div>
        <!--
        ************************************************************************
                    FIM DO MODAL PARA SET DE DADOS DAS LICENÃ‡AS E HAB DA ANAC
        ************************************************************************
        -->
        <div id="dadosLogin" class="modal fade" tabindex="" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content" style="padding: 1em;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body-login">

                        <form id="formCriaLogin" action="" method="post">


                            <?php
                            $this->load->library('form_validation');
                            $this->load->helper('form');
                            echo validation_errors();




                            $crialoginform = array(
                                'method' => 'POST',
                                'id' => 'ajax_form_crialogin',
                                'type' => 'submit',
                                'class' => 'container-fluid page'
                            );

                            echo form_open('', $crialoginform);
                            ?>


                            <?php
                            $usuario = array(
                                'name' => 'codaes_matricula',
                                'id' => 'codaes_matricula',
                                'placeholder' => 'USUÁRIO',
                                'type' => 'text',
                                'required' => 'true',
                                'readonly' => 'true',
                                'class' => 'form-control'
                            );
                            ?>



                            <div class="row">

                                <?php
                                $js = array(
                                    'class' => 'form-control',
                                    'id' => 'cod_nivelacesso',
                                    'name' => 'cod_nivelacesso',
                                    'required' => 'true',
                                    'type' => 'dropdown'
                                );
                                ?>
                                <br>
                                <div class="form-group col-md-12">
                                    <label for="selecionacurso">NÍVEL DE ACESSO:</label>
                                    <?php
                                    echo form_dropdown('', '', '', $js);
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="codaes">USUÁRIO:</label>
                                    <?php
                                    echo form_input($usuario);
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="nomeguerra_matricula">SENHA:</label>
                                    <?php
                                    $senha1 = array(
                                        'name' => 'senha_login',
                                        'id' => 'senha_login',
                                        'type' => 'password',
                                        'placeholder' => 'SENHA',
                                        'class' => 'form-control',
                                        'text-align' => 'center',
                                        'required' => 'true',
                                    );

                                    echo form_input($senha1);
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="nomeguerra_matricula">CONFIRME A SENHA:</label>
                                    <?php
                                    $senha1 = array(
                                        'name' => 'conf_senha_login',
                                        'id' => 'conf_senha_login',
                                        'type' => 'password',
                                        'placeholder' => 'CONF. SENHA',
                                        'class' => 'form-control',
                                        'text-align' => 'center',
                                        'required' => 'true',
                                    );

                                    echo form_input($senha1);
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="sexo">ACESSO A ESCALA</label>

                                    <?php
                                    $matricula_vigente = array(
                                        's' => 'PERMITIR',
                                        'n' => 'NEGAR',
                                    );

                                    $js = array(
                                        'class' => 'form-control',
                                        'id' => 'ativo',
                                        'name' => 'ativo',
                                        'required' => 'true',
                                        'type' => ''
                                    );

                                    $shirts_on_sale = array('small', 'large');
                                    echo form_dropdown('', $matricula_vigente, '', $js);
                                    ?>



                                </div>
                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>



                                <?php
                                $submitLogin = array(
                                    'value' => 'Salvar',
                                    'id' => 'saveLogin',
                                    'class' => 'btn btn-primary',
                                );

                                echo form_submit($submitLogin);
                                form_close();
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div id="matricula" class="modal fade" tabindex="" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: 900px; padding: 1em;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Cadastro de Matrícula</h4>
                    </div>
                    <div class="modal-body-matricula">
                        <form id="formMatricula" action="" method="post">


                            <?php
                            $this->load->library('form_validation');
                            $this->load->helper('form');
                            echo validation_errors();




                            $attr = array(
                                'method' => 'POST',
                                'id' => 'ajax_form_matr',
                                'type' => 'submit',
                                'class' => 'container-fluid page'
                            );

                            echo form_open('', $attr);
                            ?>


                            <br>
                            <?php
                            $codaes = array(
                                'name' => 'codaes_matricula',
                                'id' => 'codaes_matricula',
                                'placeholder' => 'CÓD. AES',
                                'type' => 'text',
                                'readonly' => 'true',
                                'required' => 'true',
                                'class' => 'form-control'
                            );


                            $nomeguerra_matricula = array(
                                'name' => 'nomeguerra_matricula',
                                'id' => 'nomeguerra_matricula',
                                'type' => 'text',
                                'readonly' => 'true',
                                'placeholder' => 'NOME GUERRA',
                                'class' => 'form-control',
                                'text-align' => 'center',
                                'required' => 'true',
                            );
                            ?>



                            <div class="row">

                                <?php
                                $js = array(
                                    'class' => 'form-control',
                                    'id' => 'cod_cursomatricula',
                                    'name' => 'cod_cursomatricula',
                                    'required' => 'true',
                                    'type' => 'dropdown'
                                );
                                ?>
                                <div class="form-group col-md-12">
                                    <label for="selecionacurso">*CURSO:</label>
                                    <?php
                                    echo form_dropdown('', '', '', $js);
                                    ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="codaes">CÓD. AES:</label>
                                    <?php
                                    echo form_input($codaes);
                                    ?>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nomeguerra_matricula">NOME DE GUERRA:</label>
                                    <?php
                                    echo form_input($nomeguerra_matricula);
                                    ?>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="cpf">TIPO SANG.:</label>
                                    <?php
                                    $tiposangue_matricula = array(
                                        'name' => 'tiposangue_matricula',
                                        'id' => 'tiposangue_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'EX.: O, A, AB',
                                        'class' => 'form-control',
                                    );

                                    echo form_input($tiposangue_matricula);
                                    ?>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cpf">FATOR RH:</label>
                                    <?php
                                    $fatorsangue_matricula = array(
                                        'name' => 'fatorsangue_matricula',
                                        'id' => 'fatorsangue_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'EX.: +, -',
                                        'class' => 'form-control',
                                    );

                                    echo form_input($fatorsangue_matricula);
                                    ?>

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cpf">DATA DA MATRÍCULA:</label>
                                    <?php
                                    $date = new DateTime();
                                    date_default_timezone_set('America/Sao_Paulo');
                                    $data_matricula = array(
                                        'name' => 'data_matricula',
                                        'id' => 'data_matricula',
                                        'type' => 'text',
                                        'readonly' => 'true',
                                        'value' => $date->format('d/m/Y H:i'),
                                        'class' => 'form-control',
                                    );

                                    echo form_input($data_matricula);
                                    ?>

                                </div>


                            </div>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">*CEP:</label>
                                    <?php
                                    $cepaluno_matricula = array(
                                        'name' => 'cepaluno_matricula',
                                        'id' => 'cepaluno_matricula',
                                        'type' => 'text',
                                        'placeholder' => '00000-000',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($cepaluno_matricula);
                                    ?>

                                </div>
                                <div class="form-group col-md-7">
                                    <label for="exampleInputEmail1">*ENDEREÇO RESIDENCIAL:</label>
                                    <?php
                                    $endereco_matricula = array(
                                        'name' => 'endereco_matricula',
                                        'id' => 'endereco_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'ENDEREÇO RESIDENCIAL',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($endereco_matricula);
                                    ?>

                                </div>

                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">NÚMERO:</label>
                                    <?php
                                    $nroendereco_matricula = array(
                                        'name' => 'nroendereco_matricula',
                                        'id' => 'nroendereco_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'EX: 358, AP. 510',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($nroendereco_matricula);
                                    ?>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">*BAIRRO:</label>
                                    <?php
                                    $bairroaluno_matricula = array(
                                        'name' => 'bairroaluno_matricula',
                                        'id' => 'bairroaluno_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'BAIRRO',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($bairroaluno_matricula);
                                    ?>

                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputEmail1">*CIDADE:</label>
                                    <?php
                                    $cidadealuno_matricula = array(
                                        'name' => 'cidadealuno_matricula',
                                        'id' => 'cidadealuno_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'CIDADE',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($cidadealuno_matricula);
                                    ?>

                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="exampleInputEmail1">UF:</label>
                                    <?php
                                    $ufaluno_matricula = array(
                                        'name' => 'ufaluno_matricula',
                                        'id' => 'ufaluno_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'UF',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($ufaluno_matricula);
                                    ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="cpf">*É ALÉRGICO A ALGUM(NS) TIPO(S) DE MEDICAMENTO(S)? SE SIM, DESCREVÊ-LOS:</label>
                                    <?php
                                    $alergicomedicamento_matricula = array(
                                        'name' => 'alergicomedicamento_matricula',
                                        'id' => 'alergicomedicamento_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'EX.: SIM, ALÉRGICO A PENINCILINA.',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($alergicomedicamento_matricula);
                                    ?>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="cpf">*EM CASO DE ACIDENTE AVISAR A:</label>
                                    <?php
                                    $nomeparenteacidente_matricula = array(
                                        'name' => 'acidenteavisonome_matricula',
                                        'id' => 'acidenteavisonome_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'NOME COMPLETO',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($nomeparenteacidente_matricula);
                                    ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cpf">*GRAU DE PARENTESCO:</label>
                                    <?php
                                    $grauparenteacidente_matricula = array(
                                        'name' => 'acidenteavisoparentesco_matricula',
                                        'id' => 'acidenteavisoparentesco_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'EX.: PAI, MÃE, MARIDO...',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($grauparenteacidente_matricula);
                                    ?>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="cpf">*ENDEREÇO:</label>
                                    <?php
                                    $enderecoparente_matricula = array(
                                        'name' => 'acidenteavisoendereco_matricula',
                                        'id' => 'acidenteavisoendereco_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'ENDEREÇO COMPLETO',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($enderecoparente_matricula);
                                    ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefone">*TELEFONE:</label>
                                    <?php
                                    $telefoneparente_matricula = array(
                                        'name' => 'acidenteavisotelefone_matricula',
                                        'id' => 'acidenteavisotelefone_matricula',
                                        'type' => 'text',
                                        'placeholder' => 'xx 0000-0000',
                                        'class' => 'form-control',
                                        'required' => 'true',
                                    );

                                    echo form_input($telefoneparente_matricula);
                                    ?>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sexo">MATRÍCULA ATIVA?</label>

                                    <?php
                                    $matricula_vigente = array(
                                        'null' => 'Escolha...',
                                        's' => 'SIM',
                                        'n' => 'NÃO',
                                    );

                                    $js = array(
                                        'class' => 'form-control',
                                        'id' => 'matricula_vigente',
                                        'name' => 'matricula_vigente',
                                        'required' => 'true',
                                        'type' => ''
                                    );

                                    $shirts_on_sale = array('small', 'large');
                                    echo form_dropdown('', $matricula_vigente, '', $js);
                                    ?>



                                </div>


                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>



                        <?php
                        $submitMat = array(
                            'value' => 'Salvar',
                            'id' => 'btnSaveMatr',
                            'class' => 'btn btn-primary',
                        );

                        echo form_submit($submitMat);
                        form_close();
                        ?>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div id="modalCadInva" class="modal fade bd-example-modal-sm" tabindex="" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
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


                        $codaes_matricula = array(
                            'name' => 'codaes_matriculainva',
                            'id' => 'codaes_matriculainva',
                            'type' => 'text',
                            'class' => 'form-control',
                            'text-align' => 'center',
                            'required' => 'true',
                            'placeholder' => 'CÓD. AES',
                            'onblur' => 'buscaPFInva()'
                        );
                        $nomeguerra = array(
                            'name' => 'nomeguerra_matriculainva',
                            'id' => 'nomeguerra_matriculainva',
                            'type' => 'text',
                            'required' => 'true',
                            'class' => 'form-control',
                            'readonly' => 'true',
                            'placeholder' => 'NOME GUERRA',
                            'max_length' => '4'
                        );

                        echo form_open('', $attr);
                        ?>

                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="anac_pessoafisica">CÓD. AES:</label>
                                <?php
                                echo form_input($codaes_matricula);
                                ?>
                            </div>


                            <div class="form-group col-md-5">
                                <label for="nomecompleto">NOME GUERRA:</label>
                                <?php
                                echo form_input($nomeguerra);
                                ?>
                            </div>

                            <div class="media col-md-4">

                                <div class="media-right media-middle" id="foto_perfil">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo site_url('img/users/default.png'); ?>" alt="..." style="width: 96px; height: 96px;  border-radius:10px;">
                                    </a>
                                </div>

                            </div>



                        </div>

                        <fieldset>
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-body">Marque abaixo, as missões em determinada aeronave/curso, as quais o instrutor <b>poderá</b> ministrar instrução.</div>
                            </div>
                            <br>



                            <div id="exTab3" class="container">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a  href="#5" data-toggle="tab">Aeronaves</a>
                                    </li>
                                    

                                </ul>

                                <div class="tab-content ">
                                    <div class="tab-pane active" id="5">

                                        <br>
                                        <fieldset class="col-md-6">

                                            <legend>NE56C - Paulistinha</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $ne56_area = array(
                                                            'name' => 'ne56_area',
                                                            'id' => 'ne56_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($ne56_area, FALSE)
                                                        ?>

                                                        <label for="ne56_area"> ÁREA </label>
                                                    </div>
                                                    <br>

                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $ne56_tgl = array(
                                                            'name' => 'ne56_tgl',
                                                            'id' => 'ne56_tgl',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($ne56_tgl, FALSE)
                                                        ?>
                                                        <label for="ne56_tgl"> TGL </label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $ne56_nav = array(
                                                            'name' => 'ne56_nav',
                                                            'id' => 'ne56_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($ne56_nav)
                                                        ?>
                                                        <label for="ne56_nav"> NAVEGAÇÃO </label>
                                                    </div>

                                                </div>
                                            </div>

                                        </fieldset>

                                        <fieldset class="col-md-6">

                                            <legend>AB115 - Aeroboero</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $ab11_area = array(
                                                            'name' => 'ab11_area',
                                                            'id' => 'ab11_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($ab11_area)
                                                        ?>
                                                        <label for="ab11_area"> ÁREA</label>
                                                    </div>

                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $ab11_tgl = array(
                                                            'name' => 'ab11_tgl',
                                                            'id' => 'ab11_tgl',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($ab11_tgl)
                                                        ?>
                                                        <label for="ab11_tgl"> TGL </label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $ab11_nav = array(
                                                            'name' => 'ab11_nav',
                                                            'id' => 'ab11_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($ab11_nav)
                                                        ?>
                                                        <label for="ab11_nav"> NAVEGAÇÃO </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>


                                        <fieldset class="col-md-6">

                                            <legend>PA140 - Cherokee</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $pa140_area = array(
                                                            'name' => 'pa140_area',
                                                            'id' => 'pa140_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($pa140_area)
                                                        ?>
                                                        <label for="pa140_area"> ÁREA </label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $pa140_tgl = array(
                                                            'name' => 'pa140_tgl',
                                                            'id' => 'pa140_tgl',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($pa140_tgl)
                                                        ?>
                                                        <label for="pa140_tgl"> TGL </label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $pa140_nav = array(
                                                            'name' => 'pa140_nav',
                                                            'id' => 'pa140_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($pa140_nav)
                                                        ?>
                                                        <label for="pa140_nav"> NAVEGAÇÃO </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <fieldset class="col-md-6">

                                            <legend>EMB712 - Tupi</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $emb712_area = array(
                                                            'name' => 'emb712_area',
                                                            'id' => 'emb712_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($emb712_area)
                                                        ?>
                                                        <label for="emb712_area">ÁREA</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $emb712_tgl = array(
                                                            'name' => 'emb712_tgl',
                                                            'id' => 'emb712_tgl',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($emb712_tgl)
                                                        ?>
                                                        <label for="emb712_tgl">TGL</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $emb712_nav = array(
                                                            'name' => 'emb712_nav',
                                                            'id' => 'emb712_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($emb712_nav)
                                                        ?>
                                                        <label for="emb712_nav">NAVEGAÇÃO</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <fieldset class="col-md-6">

                                            <legend>P28R - Arrow</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $p28r_area = array(
                                                            'name' => 'p28r_area',
                                                            'id' => 'p28r_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($p28r_area)
                                                        ?>
                                                        <label for="p28r_area"> ÁREA</label>
                                                    </div>
                                                   
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $p28r_nav = array(
                                                            'name' => 'p28r_nav',
                                                            'id' => 'p28r_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($p28r_nav)
                                                        ?>
                                                        <label for="p28r_nav"> NAVEGAÇÃO </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <fieldset class="col-md-6">

                                            <legend>PA34 - Sêneca I</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $pa34_area = array(
                                                            'name' => 'pa34_area',
                                                            'id' => 'pa34_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($pa34_area)
                                                        ?>
                                                        <label for="pa34_area"> ÁREA</label>
                                                    </div>
                                                    
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $pa34_nav = array(
                                                            'name' => 'pa34_nav',
                                                            'id' => 'pa34_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($pa34_nav)
                                                        ?>
                                                        <label for="pa34_nav"> NAVEGAÇÃO </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <fieldset class="col-md-6">

                                            <legend>EMB810D - Sêneca III</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $emb810d_area = array(
                                                            'name' => 'emb810d_area',
                                                            'id' => 'emb810d_area',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($emb810d_area)
                                                        ?>
                                                        <label for="emb810d_area"> ÁREA</label>
                                                    </div>
                                                    
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $emb810d_nav = array(
                                                            'name' => 'emb810d_nav',
                                                            'id' => 'emb810d_nav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($emb810d_nav)
                                                        ?>
                                                        <label for="emb810d_nav"> NAVEGAÇÃO </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <br>
                                        <fieldset class="col-md-6">

                                            <legend>INVA</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <?php
                                                        $invapi = array(
                                                            'name' => 'invapi',
                                                            'id' => 'invapi',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($invapi)
                                                        ?>
                                                        <label for="invapi"> PI</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox checkbox-inline checkbox-primary">

                                                        <?php
                                                        $invanav = array(
                                                            'name' => 'invanav',
                                                            'id' => 'invanav',
                                                            'value' => 1
                                                        );

                                                        echo form_checkbox($invanav)
                                                        ?>
                                                        <label for="invanav"> NAVEGAÇÃO</label>
                                                    </div>

                                                </div>
                                            </div>

                                        </fieldset>
                                        

                                    </div>
                                    

                                </div>
                            </div>








                        </fieldset>



                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>



                        <?php
                        $submitPf = array(
                            'value' => 'Salvar',
                            'id' => 'btnSaveInva',
                            'class' => 'btn btn-primary',
                        );

                        echo form_submit($submitPf);
                        form_close();
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div id="myModal" class="modal fade" tabindex="" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 900px; padding: 1em;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form id="myForm" action="" method="post">
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


                        <br>
                        <?php
                        $nomecompleto = array(
                            'name' => 'nome_pessoafisica',
                            'id' => 'nome_pessoafisica',
                            'placeholder' => 'NOME COMPLETO',
                            'type' => 'text',
                            'required' => 'true',
                            'class' => 'form-control'
                        );


                        $anac_pessoafisica = array(
                            'name' => 'anac_pessoafisica',
                            'id' => 'anac_pessoafisica',
                            'type' => 'text',
                            'placeholder' => 'CÓD. ANAC',
                            'class' => 'form-control',
                            'text-align' => 'center',
                            'required' => 'true'
                        );

                        $codaes_matricula = array(
                            'name' => 'codaes_matricula',
                            'id' => 'codaes_matricula',
                            'type' => 'text',
                            'placeholder' => 'CÓD. AES',
                            'class' => 'form-control',
                            'text-align' => 'center',
                            
                            'required' => 'true'
                        );


                        $nomeguerra_pessoafisica = array(
                            'name' => 'nomeguerra_pessoafisica',
                            'id' => 'nomeguerra_pessoafisica',
                            'type' => 'text',
                            'placeholder' => 'NOME GUERRA',
                            'class' => 'form-control',
                            'text-align' => 'center',
                            'required' => 'true',
                        );
                        ?>





                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="anac_pessoafisica">CÓD. AES:</label>
                                <?php
                                echo form_input($codaes_matricula);
                                ?>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="nomecompleto">NOME COMPLETO:</label>
                                <?php
                                echo form_input($nomecompleto);
                                ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomeguerra_pessoafisica">NOME DE GUERRA:</label>
                                <?php
                                echo form_input($nomeguerra_pessoafisica);
                                ?>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="anac_pessoafisica">CÓD. ANAC:</label>
                                <?php
                                echo form_input($anac_pessoafisica);
                                ?>
                            </div>


                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="sexo">SEXO:</label>

                                <?php
                                $sexo_pessoafisica = array(
                                    'null' => 'Escolha...',
                                    'M' => 'MASCULINO',
                                    'F' => 'FEMININO',
                                );

                                $js = array(
                                    'class' => 'form-control',
                                    'id' => 'sexo_pessoafisica',
                                    'name' => 'sexo_pessoafisica',
                                    'required' => 'true',
                                    'type' => ''
                                );

                                $shirts_on_sale = array('small', 'large');
                                echo form_dropdown('', $sexo_pessoafisica, '', $js);
                                ?>



                            </div>


                            <div class="form-group col-md-3">
                                <label for="telefone">TELEFONE:</label>
                                <?php
                                $telefone_pessoafisica = array(
                                    'name' => 'telefone_pessoafisica',
                                    'id' => 'telefone_pessoafisica',
                                    'type' => 'tel',
                                    'placeholder' => 'xx 00000-0000',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($telefone_pessoafisica);
                                ?>

                            </div>


                            <div class="form-group col-md-3 ">
                                <label for="datanascto_pessoafisica">DATA NASCTO.:</label>
                                <?php
                                $datanascto_pessoafisica = array(
                                    'name' => 'datanascto_pessoafisica',
                                    'id' => 'datanascto_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => '01/01/2001',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($datanascto_pessoafisica);
                                ?>

                            </div>





                            <div class="form-group col-md-3">
                                <label for="sel1">ESTADO CIVIL:</label>

                                <?php
                                $estadocivil_pessoafisica = array(
                                    'null' => 'Escolha uma opção...',
                                    'SOLTEIRO' => 'SOLTEIRO(A)',
                                    'CASADO' => 'CASADO(A)',
                                    'DIVORCIADO' => 'DIVORCIADO(A)',
                                    'VIUVO' => 'VIÚVO(A)',
                                    'SEPARADO' => 'SEPARADO(A)',
                                );

                                $js = array(
                                    'class' => 'form-control',
                                    'id' => 'estadocivil_pessoafisica',
                                    'required' => 'true',
                                    'type' => 'number',
                                    'name' => 'estadocivil_pessoafisica',
                                );

                                $shirts_on_sale = array('small', 'large');
                                echo form_dropdown('', $estadocivil_pessoafisica, '', $js);
                                ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="naturalidade_pessoafisica">NATURALIDADE:</label>
                                <?php
                                $naturalidade_pessoafisica = array(
                                    'name' => 'naturalidade_pessoafisica',
                                    'id' => 'naturalidade_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'NATURALIDADE',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($naturalidade_pessoafisica);
                                ?>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="nacionalidade">NACIONALIDADE:</label>
                                <?php
                                $nacionalidade_pessoafisica = array(
                                    'name' => 'nacionalidade_pessoafisica',
                                    'id' => 'nacionalidade_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'NACIONALIDADE',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($nacionalidade_pessoafisica);
                                ?>

                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6 ">
                                <label for="nomepai">FILIAÇÃO PAI:</label>
                                <?php
                                $nomepai_pessoafisica = array(
                                    'name' => 'nomepai_pessoafisica',
                                    'id' => 'nomepai_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'NOME COMPLETO DO PAI',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($nomepai_pessoafisica);
                                ?>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="nomemae">FILIAÇÃO MÃE:</label>
                                <?php
                                $nomemae_pessoafisica = array(
                                    'name' => 'nomemae_pessoafisica',
                                    'id' => 'nomemae_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'NOME COMPLETO DA MÃƒE',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($nomemae_pessoafisica);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 ">
                                <label for="email">EMAIL:</label>
                                <?php
                                $email_pessoafisica = array(
                                    'name' => 'email_pessoafisica',
                                    'id' => 'email_pessoafisica',
                                    'type' => 'email',
                                    'placeholder' => 'EMAIL',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($email_pessoafisica);
                                ?>
                            </div>

                            <div class="form-group col-md-3 ">
                                <label for="cpf">CPF:</label>
                                <?php
                                $cpf_pessoafisica = array(
                                    'name' => 'cpf_pessoafisica',
                                    'id' => 'cpf_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'CPF',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($cpf_pessoafisica);
                                ?>

                            </div>

                            <div class="form-group col-md-3">
                                <label for="rg">IDENTIDADE Nº:</label>
                                <?php
                                $rg_pessoafisica = array(
                                    'name' => 'rg_pessoafisica',
                                    'id' => 'rg_pessoafisica',
                                    'type' => 'number',
                                    'placeholder' => 'IDENTIDADE',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($rg_pessoafisica);
                                ?>

                            </div>
                            <div class="form-group col-md-2">
                                <label for="rgorgaoexp_pessoafisica">ÓRGÃO EXP.:</label>
                                <?php
                                $rgorgaoexp_pessoafisica = array(
                                    'name' => 'rgorgaoexp_pessoafisica',
                                    'id' => 'rgorgaoexp_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'O.E.',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($rgorgaoexp_pessoafisica);
                                ?>

                            </div>
                            <div class="form-group col-md-2 ">
                                <label for="dataemissaorg">DATA EMISSÃO:</label>
                                <?php
                                $rgdataemissao_pessoafisica = array(
                                    'name' => 'rgdataemissao_pessoafisica',
                                    'id' => 'rgdataemissao_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'DT. EMISSÃO',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($rgdataemissao_pessoafisica);
                                ?>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="certreservista_pessoafisica">MILITAR Nº:</label>
                                <?php
                                $certreservista_pessoafisica = array(
                                    'name' => 'certreservista_pessoafisica',
                                    'id' => 'certreservista_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'CERT. RESERVISTA',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($certreservista_pessoafisica);
                                ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cpf">CATEGORIA:</label>
                                <?php
                                $certreservistacategoria_pessoafisica = array(
                                    'name' => 'certreservistacategoria_pessoafisica',
                                    'id' => 'certreservistacategoria_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'CATEGORIA',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($certreservistacategoria_pessoafisica);
                                ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cpf">TÍTULO DE ELEITOR:</label>
                                <?php
                                $tituloeleitor_pessoafisica = array(
                                    'name' => 'tituloeleitor_pessoafisica',
                                    'id' => 'tituloeleitor_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'TÍTULO DE ELEITOR',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($tituloeleitor_pessoafisica);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="cpf">ZONA:</label>
                                <?php
                                $tituloeleitorzona_pessoafisica = array(
                                    'name' => 'tituloeleitorzona_pessoafisica',
                                    'id' => 'tituloeleitorzona_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'ZONA',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($tituloeleitorzona_pessoafisica);
                                ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cpf">SEÇÃO:</label>
                                <?php
                                $tituloeleitorsecao_pessoafisica = array(
                                    'name' => 'tituloeleitorsecao_pessoafisica',
                                    'id' => 'tituloeleitorsecao_pessoafisica',
                                    'type' => 'text',
                                    'placeholder' => 'SEÇÃO',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                );

                                echo form_input($tituloeleitorsecao_pessoafisica);
                                ?>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>



                    <?php
                    $submitPf = array(
                        'value' => 'Salvar',
                        'id' => 'btnSave',
                        'class' => 'btn btn-primary',
                    );

                    echo form_submit($submitPf);
                    form_close();
                    ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
</div>

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmação de Exclusão</h4>
            </div>
            <div class="modal-body">
                <b style="color: red;">Atenção: a exclusão de Pessoa Física IMPEDE o acesso do usuário ao sistema. Caso deseje bloquear o acesso do usuário ao sistema consulte: Menu > Secretaria > Login</b> <br><br>
                Você realmente deseja excluir este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" id="btnDelete" class="btn btn-danger">Deletar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModalInva" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmação de Exclusão</h4>
            </div>
            <div class="modal-body">
                <b style="color: red;">Deseja mesmo remover o instrutor de voo?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" id="btnDeleteInva" class="btn btn-danger">Deletar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="avisoDuplicidade" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atenção!</h4>
            </div>
            <div class="modal-body">
                <b style="color: red;">A pessoa selecionada já possui uma matrícula ativa neste curso.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="avisoMatricula" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atenção!</h4>
            </div>
            <div class="modal-body" id="inner-html-st">
                <b style="color: red;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    $(function() {
        buscaInvas();
        $("#datanascto_pessoafisica").mask("99/99/9999");
        $("#telefone_pessoafisica").mask("(99) 99999-9999");
        $("#cpf_pessoafisica").mask("999.999.999-99");
        $("#rgdataemissao_pessoafisica").mask("99/99/9999");
        $("#tituloeleitor_pessoafisica").mask("9999 9999 9999");
        $("#tituloeleitorzona_pessoafisica").mask("999");
        $("#tituloeleitorsecao_pessoafisica").mask("9999");
        $("#acidenteavisotelefone_matricula").mask("(99) 99999-9999");
        $("#cepaluno_matricula").mask("99999-999");


        $("#cepaluno_matricula").change(function() {
            var cep = $('#cepaluno_matricula').val();
            if (cep == '') {
                alert('Informe o CEP antes de continuar');
                $('#cepaluno_matricula').focus();
                return false;
            }
            $('#cepaluno_matricula').html('Aguarde...');
            $.post('pessoafisica/consultaCep',
                    {
                        cep: cep
                    },
            function(dados) {

                $('#endereco_matricula').val(dados.logradouro);
                $('#bairroaluno_matricula').val(dados.bairro);
                $('#cidadealuno_matricula').val(dados.localidade);
                $('#ufaluno_matricula').val(dados.uf);


            }, 'json');
        });


        //Add New PessoaFisica
        $('#btnAdd').click(function() {
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Cadastro de Pessoa Física');
            $('#myForm').attr('action', '<?php echo base_url() ?>pessoafisica/adicionaPessoa');
        });

        //ADD NEW INSTRUTOR
        $('#btnAddInva').click(function() {
            $('#formCadInva')[0].reset();
            var ur = '<?php echo site_url('img/users/'); ?>';
            $('#foto_perfil').html('<img id="foto_perfil" class="media-object" src="' + ur + '/default.png" alt="..." style="width: 96px; height: 96px;  border-radius:10px;">');
            $('#modalCadInva').modal('show');
            $('#modalCadInva').find('.modal-title').text('Permissões do Instrutor de Voo');
            $('#formCadInva').attr('action', '<?php echo base_url() ?>instrutores/adicionaInva');
        });




        $('#btnSave').click(function() {

            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#myModal').modal('hide');
                        $('#myForm')[0].reset();
                        if (response.type == 'add') {
                            var type = 'inseridos'

                        } else if (response.type == 'update') {
                            var type = "alterados"

                        }
                        $('.alert-success').html('Dados ' + type + ' com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                        showAllEmployee();
                    } else {
                        $('.alert-success').html('Usuário já cadastrado no sistema!').fadeIn().delay(4000).fadeOut('slow');
                    }

                },
                error: function() {
                    alert('Could not add data');
                }
            });

        });


        $('#btnSaveInva').click(function() {
            debugger;
            var url = $('#formCadInva').attr('action');
            var cod_pessoafisica = document.getElementById("codaes_matriculainva").value;
            var data = $('#formCadInva').serialize();

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data, codaes_matriculainva: cod_pessoafisica,
                async: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#modalCadInva').modal('hide');
                        $('#formCadInva')[0].reset();
                        if (response.type == 'add') {
                            var type = 'cadastrado'

                        } else if (response.type == 'update') {
                            var type = "alterados"

                        }
                        $('.alert-success').html('Instrutor ' + type + ' com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                        buscaInvas();
                    } else {
                        $('.alert-warning').html('Instrutor já cadastrado no sistema!').fadeIn().delay(4000).fadeOut('slow');
                    }

                },
                error: function(response) {
                    $('#modalCadInva').modal('hide');
                    $('#formCadInva')[0].reset();
                    buscaInvas();
                }
            });

        });


        //delete-
        $('#showdata').on('click', '.item-delete', function() {

            var cod_pessoafisica = $(this).attr('data');
            $('#deleteModal').modal('show');

            $('#btnDelete').unbind().click(function() {
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>pessoafisica/deletarInva',
                    data: {cod_pessoafisica: cod_pessoafisica},
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Registro removido com sucesso!').fadeIn().delay(4000).fadeOut('slow');
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






        $('#showdata').on('click', '.item-edit', function() {
            debugger;
            var cod_pessoafisica = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Editar Pessoa Física');
            $('#myForm').attr('action', '<?php echo base_url() ?>pessoafisica/updatePessoaFisica');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>pessoafisica/editarPessoa',
                data: {cod_pessoafisica: cod_pessoafisica},
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=nome_pessoafisica]').val(data.nome_pessoafisica);
                    $('input[name=anac_pessoafisica]').val(data.anac_pessoafisica);
                    $('select[name=sexo_pessoafisica]').val(data.sexo_pessoafisica);
                    $('input[name=telefone_pessoafisica]').val(data.telefone_pessoafisica);
                    $('input[name=datanascto_pessoafisica]').val(data.datanascto_pessoafisica);
                    $('select[name=estadocivil_pessoafisica]').val(data.estadocivil_pessoafisica);
                    $('input[name=naturalidade_pessoafisica]').val(data.naturalidade_pessoafisica);
                    $('input[name=nacionalidade_pessoafisica]').val(data.nacionalidade_pessoafisica);
                    $('input[name=nomepai_pessoafisica]').val(data.nomepai_pessoafisica);
                    $('input[name=nomemae_pessoafisica]').val(data.nomemae_pessoafisica);
                    $('input[name=email_pessoafisica]').val(data.email_pessoafisica);
                    $('input[name=rg_pessoafisica]').val(data.rg_pessoafisica);
                    $('input[name=cpf_pessoafisica]').val(data.cpf_pessoafisica);
                    $('input[name=certreservista_pessoafisica]').val(data.certreservista_pessoafisica);
                    $('input[name=rgorgaoexp_pessoafisica]').val(data.rgorgaoexp_pessoafisica);
                    $('input[name=rgdataemissao_pessoafisica]').val(data.rgdataemissao_pessoafisica);
                    $('input[name=certreservistacategoria_pessoafisica]').val(data.certreservistacategoria_pessoafisica);
                    $('input[name=tituloeleitor_pessoafisica]').val(data.tituloeleitor_pessoafisica);
                    $('input[name=tituloeleitorzona_pessoafisica]').val(data.tituloeleitorzona_pessoafisica);
                    $('input[name=tituloeleitorsecao_pessoafisica]').val(data.tituloeleitorsecao_pessoafisica);
                    $('input[name=cod_pessoafisica]').val(data.cod_pessoafisica);
                },
                error: function() {
                    alert('Could not Edit Data');
                }
            });
        });






        $('#showdataInvas').on('click', '.item-delete-inva', function() {

            var cod_pessoafisica = $(this).attr('data');
            $('#deleteModalInva').modal('show');

            $('#btnDeleteInva').unbind().click(function() {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: '<?php echo base_url() ?>instrutores/deletarInva',
                    data: {cod_pessoafisica: cod_pessoafisica},
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#deleteModalInva').modal('hide');
                            $('.alert-success').html('Instrutor removido com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                            buscaInvas();
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

        //edit
        $('#showdataInvas').on('click', '.item-edit-perminva', function() {
            $('#formCadInva')[0].reset();
            var cod_pessoafisica = $(this).attr('data');

            $('#modalCadInva').modal('show');
            $('#modalCadInva').find('.modal-title').text('Edição de Permissões do Instrutor de Voo');
            $('#formCadInva').attr('action', '<?php echo base_url() ?>instrutores/updatePermInva');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>instrutores/editarPermInva',
                data: {cod_pessoafisica: cod_pessoafisica},
                async: false,
                dataType: 'json',
                success: function(data) {


                    $('input[name=codaes_matriculainva]').val(data.cod_pessoafisica)
                    
                    if (data.pparea == 1) {
                        $("#pparea").prop("checked", true);
                    }
                    
                    if (data.pptgl == 1) {
                        $("#pptgl").prop("checked", true);
                    }
                    
                    if (data.ppnav == 1) {
                        $("#ppnav").prop("checked", true);
                    }
                    
                    if (data.ppap == 1) {
                        $("#ppap").prop("checked", true);
                    }
                    
                    if (data.pcaper == 1) {
                        $("#pcaper").prop("checked", true);
                    }
                    
                    if (data.pcaprox == 1) {
                        $("#pcaprox").prop("checked", true);
                    }
                    
                    if (data.pcnav == 1) {
                        $("#pcnav").prop("checked", true);
                    }

                    if (data.ne56_area == 1) {
                        $("#ne56_area").prop("checked", true);
                    }

                    if (data.ne56_tgl == 1) {
                        $("#ne56_tgl").prop("checked", true);
                    }

                    if (data.ne56_nav == 1) {
                        $("#ne56_nav").prop("checked", true);
                    }

                    if (data.ab11_area == 1) {
                        $("#ab11_area").prop("checked", true);
                    }

                    if (data.ab11_tgl == 1) {
                        $("#ab11_tgl").prop("checked", true);
                    }

                    if (data.ab11_nav == 1) {
                        $("#ab11_nav").prop("checked", true);
                    }

                    if (data.pa140_area == 1) {
                        $("#pa140_area").prop("checked", true);
                    }

                    if (data.pa140_tgl == 1) {
                        $("#pa140_tgl").prop("checked", true);
                    }

                    if (data.pa140_nav == 1) {
                        $("#pa140_nav").prop("checked", true);
                    }

                    if (data.emb712_area == 1) {
                        $("#emb712_area").prop("checked", true);
                    }

                    if (data.emb712_tgl == 1) {
                        $("#emb712_tgl").prop("checked", true);
                    }

                    if (data.emb712_nav == 1) {
                        $("#emb712_nav").prop("checked", true);
                    }

                    if (data.p28r_area == 1) {
                        $("#p28r_area").prop("checked", true);
                    }

                   
                    if (data.p28r_nav == 1) {
                        $("#p28r_nav").prop("checked", true);
                    }

                    if (data.pa34_area == 1) {
                        $("#pa34_area").prop("checked", true);
                    }

                   

                    if (data.pa34_nav == 1) {
                        $("#pa34_nav").prop("checked", true);
                    }

                    if (data.emb810d_area == 1) {
                        $("#emb810d_area").prop("checked", true);
                    }

                   

                    if (data.emb810d_nav == 1) {
                        $("#emb810d_nav").prop("checked", true);
                    }

                    if (data.invapi == 1) {
                        $("#invapi").prop("checked", true);
                    }

                    if (data.invanav == 1) {
                        $("#invanav").prop("checked", true);
                    }



                    buscaPFInva();
                },
                error: function() {
                    alert('Could not Edit Data');
                }
            });
        });













        //showdata-anac
        $('#showdata').on('click', '.item-popup', function() {
            $('#dadosAnac').modal('show');
            $('#dadosAnac').find('.item-popup').text('Licenças e Habilitações ANAC');
            $('.modal .modal-body-anac').css('overflow-y', 'auto');
            $('.modal .modal-body-anac').css('min-height', $(window).height() * 0.7);
            var array = $(this).attr('data');
            var indice = array.split("&")[1];
            var cpf = indice.replace(/[^a-zA-Z 0-9]/g, '');
            var canac = array.split("&")[0];
            var url = 'http://www2.anac.gov.br/consultasdelicencas/imp_licencas.asp?nf=' + canac + '&cpf=' + cpf;
            $(".modal-body-anac").html('<iframe width="900em;" height="800em;" frameborder="0" scrolling="yes" allowtransparency="true" src="' + url + '"></iframe>');
        });

        $('#saveLogin').click(function(e) {
            var data = $('#formCriaLogin').serialize();
            var cod_pessoafisica = $('#formCriaLogin').attr('data-transfer-cod-pessoaf');
            var codaes_login = $('#formCriaLogin').attr('data-transfer-codaes-login');
            var data = data + "&cod_pessoafisica=" + cod_pessoafisica + "&codaes_login=" + codaes_login;

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>pessoafisica/inserirLogin',
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {
                    e.preventDefault();
                    if (response.success) {
                        if (response.type == 'add') {
                            $('#dadosLogin').modal('hide');
                            $('#formCriaLogin')[0].reset();
                            $('.alert-success').html('Login gerado com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                            getitens();
                        } else if (response.type == 'break') {
                            $('#avisoDuplicidade').modal('show');
                            $('#formMatricula')[0].reset();
                        }
                    }
                },
                error: function() {
                    alert('Could not add data');
                }
            });
        });

        $('#showdata').on('click', '.item-login', function() {


            var array = $(this).attr('data');
            var dadoconsulta = array.split("&")[0];
            var codaes_login = array.split("&")[1];
            var cod_pessoafisica = array.split("&")[2];
            $('#formCriaLogin').attr('data-transfer-codaes-login', codaes_login);
            $('#formCriaLogin').attr('data-transfer-cod-pessoaf', cod_pessoafisica);

            $('#codaes_matricula').val(codaes_login);

            $.ajax({
                type: 'ajax',
                method: 'post',
                async: false,
                url: '<?php echo base_url() ?>matricula/consultaMtrVigente',
                data: {dadoconsulta: dadoconsulta},
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        if (response.type == 'add') {
                            $('#dadosLogin').modal('show');

                            carregaNivelAcesso();
                        } else if (response.type == 'break') {
                            document.getElementById("inner-html-st").innerHTML = "O usuário já possui login e senha cadastrados!";
                            $('#avisoMatricula').modal('show');
                        } else if (response.type == 'break_2') {
                            document.getElementById("inner-html-st").innerHTML = "O usuário não possui matrícula ativa no sistema!";
                            $('#avisoMatricula').modal('show');
                        }

                    } else {
                        alert('FUNCTION ERROR.');
                    }
                },
                error: function() {
                    alert('ERROR: A aplicação não pode executar o método. Entre em contato com o administrador!');
                }
            });


        });


        //showdata-matricula
        $('#showdata').on('click', '.item-matricula', function() {

            $('#matricula').modal('show');
            $('#matricula').find('.item-matricula').text('Matrícula de Aluno');
            $('#formMatricula').attr('action', '<?php echo base_url() ?>matricula/verificaMatricula');
            var array = $(this).attr('data');
            var cpf = array.split("&")[1];
            var codcurso = array.split("&")[2];
            var tipocurso = array.split("&")[3];
            var codaes = array.split("&")[4];
            var nomeguerra = array.split("&")[5];
            $('#formMatricula').attr('data-transfer1', cpf);
            $('#formMatricula').attr('data-transfer-codcurso', codcurso);
            $('#formMatricula').attr('data-transfer-tipocurso', tipocurso);
            $('#formMatricula').attr('data-transfer-codaes', codaes);

            if (codaes && nomeguerra) {
                // SETAR VISIBLE FALSE NOS CAMPOS CODAES_MATRICULA E NOMEGUERRA_MATRICULA

                $('input[name=codaes_matricula]').val(codaes);
                $('input[name=nomeguerra_matricula]').val(nomeguerra);

            }

            carregaCursos();

        });

        $('#btnSaveMatr').click(function() {
            var url = $('#formMatricula').attr('action');
            var cpf_matricula = $('#formMatricula').attr('data-transfer1');
            var cod_cursomatricula = document.getElementById("cod_cursomatricula").value;
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: {cpf_matricula: cpf_matricula, cod_cursomatricula: cod_cursomatricula},
                async: false,
                dataType: 'json',
                success: function(response) {

                    if (response.success) {
                        if (response.type == 'add') {
                            inserirMatricula();
                            $('#formMatricula')[0].reset();
                            $('#matricula').modal('hide');
                            $('.alert-success').html('Matrícula inserida com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                            getitens();
                        } else if (response.type == 'break') {
                            $('#avisoDuplicidade').modal('show');
                            $('#formMatricula')[0].reset();
                        }
                    }
                },
                error: function() {
                    alert('Could not add data');
                }
            });
        });













        function buscaInvas() {

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>instrutores/buscaInvas',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html +=
                                '<tr>' +
                                '<td style="vertical-align: middle; text-align: center;">' + data[i].cod_pessoafisica + '</td>' +
                                '<td style="vertical-align: middle;">' + data[i].nomeguerra_pessoafisica + '</td>' +
                                '<td>' +
                                '<td class="col-sm-2">' +
                                
                                '<div class="col-sm-12" style="text-align: center; font-size: 10px;"><b>PAULISTINHA</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA:' + data[i].ne56_area + ' </div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.: ' + data[i].ne56_nav + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">TGL:' + data[i].ne56_tgl + ' </div>' +
                                '</div>' +
                                
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>AEROBOERO</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].ab11_area + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].ab11_nav + ' </div>' +
                                '<div style="font-size: 12px; text-align: center;">TGL:' + data[i].ab11_tgl + ' </div>' +
                                '</td>' +
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>CHEROKEE</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].pa140_area + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].pa140_nav + ' </div>' +
                                '<div style="font-size: 12px; text-align: center;">TGL:' + data[i].pa140_tgl + ' </div>' +
                                '</td>' +
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>TUPI</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].emb712_area + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].emb712_nav + ' </div>' +
                                '<div style="font-size: 12px; text-align: center;">TGL:' + data[i].emb712_tgl + ' </div>' +
                                '</td>' +
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>ARROW</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].p28r_area + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].p28r_nav + ' </div>' +
                                '</td>' +
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>SEN.I</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].pa34_area + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].pa34_nav + ' </div>' +
                                '</td>' +
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>SEN.III</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].emb810d_area + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].emb810d_nav + ' </div>' +
                                '</td>' +
                                '<td class="col-sm-2" style="text-align: center; font-size: 10px;"> ' +
                                '<div class="col-sm-12" style="font-size: 10px; text-align: center;"><b>INVA</b></div>' +
                                '<div style="font-size: 12px; text-align: center;">ÁREA.:' + data[i].invapi + '</div>' +
                                '<div style="font-size: 12px; text-align: center;">NAV.:' + data[i].invanav + ' </div>' +
                                '</td>' +
                                /*'<td  class="col-sm-3" style="text-align: center; font-size: 10px;">' +
                                '<div class="col-sm-12" style="font-size: 10px;"><b>IFR</b></div>' +
                                '<div class="col-sm-3" style="font-size: 12px;">Arrow:<br>' + data[i].arrow + '</div>' +
                                '<div class="col-sm-3" style="font-size: 12px;">Sen.I:<br>' + data[i].ifraseni + '</div>' +
                                '<div class="col-sm-5" style="font-size: 12px;">Sen.III:<br>' + data[i].ifraseniii + '</div>' +
                                '</td>' +*/
                                '</td>' +
                                '<td style="vertical-align: middle;" >' +
                                '<a href="javascript:;" class="btn btn-xs btn-info glyphicon glyphicon-pencil item-edit-perminva" data="' + data[i].cod_pessoafisica + '"></a>' +
                                '<a href="javascript:;" class="btn btn-xs btn-danger glyphicon glyphicon-trash item-delete-inva" data="' + data[i].cod_pessoafisica + '"></a>' +
                                '</td>' +
                                '</tr>';
                    }
                    $('#showdataInvas').html(html);

                },
                error: function() {
                    alert('Could not get Data from Database');
                }
            });
        }




















        //function
        function showAllEmployee() {

            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>pessoafisica/buscaPessoa',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                                '<td hidden>' + data[i].cod_pessoafisica + '</td>' +
                                '<td style="text-align: center;">' + data[i].codaes_matricula + '</td>' +
                                '<td>' + data[i].nome_pessoafisica + '</td>' +
                                '<td style="text-align: center;">' + data[i].anac_pessoafisica + '</td>' +
                                '<td style="text-align: center;">' + data[i].telefone_pessoafisica + '</td>' +
                                '<td>' + data[i].email_pessoafisica + '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="btn btn-xs btn-info item-edit" data="' + data[i].cod_pessoafisica + '"><span class="glyphicon glyphicon-pencil"></span></a>' +
                                '<a href="javascript:;" class="btn btn-xs btn-danger item-delete" data="' + data[i].cod_pessoafisica + '"><span class="glyphicon glyphicon-trash"></span></a>' +
                                '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="glyphicon glyphicon-info-sign item-popup" data="' + data[i].anac_pessoafisica + '&' + data[i].cpf_pessoafisica + '"></a>' +
                                '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="glyphicon glyphicon glyphicon-list-alt item-matricula" data="' + data[i].cod_pessoafisica + '&' + data[i].cpf_pessoafisica + '&' + data[i].cod_cursomatricula + '&' + data[i].tipo_curso + '&' + data[i].codaes_pessoafisica + '&' + data[i].nomeguerra_pessoafisica + '"></a>' +
                                '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="glyphicon glyphicon glyphicon glyphicon-user item-login" data="' + data[i].cpf_pessoafisica + '&' + data[i].cod_pessoafisica + '"></a>' +
                                '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="glyphicon glyphicon-envelope item-email" data="' + data[i].cpf_pessoafisica + '&' + data[i].codaes_pessoafisica + '"></a>' +
                                '</td>' +
                                '</tr>';

                    }
                    $('#showdata').html(html);
                },
                error: function() {
                    alert('Could not get Data from Database');
                }
            });
        }
    });



    function buscaPFInva() {

        var cod_pessoafisica = document.getElementById("codaes_matriculainva").value;
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: '<?php echo base_url() ?>pessoafisica/buscaPessoaAddINVA',
            data: {cod_pessoafisica: cod_pessoafisica},
            async: false,
            dataType: 'json',
            success: function(response) {
                var i;
                var ur = '<?php echo site_url('img/users/'); ?>';
                var html = '';


                for (i = 0; i < response.length; i++) {
                    $('#nomeguerra_matriculainva').val(response[i].nomeguerra_pessoafisica);


                    if (!response) {
                        html += '<img id="foto_perfil" class="media-object" src="' + ur + '/default.png" alt="..." style="width: 96px; height: 96px;  border-radius:10px;">';

                    } else {
                        if (!response[i].foto_pessoafisica) {
                            html += '<img id="foto_perfil" class="media-object" src="' + ur + '/default.png" alt="..." style="width: 96px; height: 96px;  border-radius:10px;">';

                        } else {
                            html += '<img id="foto_perfil" class="media-object" src="' + ur + '/' + response[i].foto_pessoafisica + '" alt="..." style="width: 96px; height: 96px;  border-radius:10px;">';
                        }
                    }

                    $('#foto_perfil').html(html);

                }
            },
            error: function() {
                alert('Could not get Data from Database');
            }
        });
    }




    function inserirMatricula() {

        var cpf_matricula = $('#formMatricula').attr('data-transfer1');
        var data = $('#formMatricula').serialize();
        var data = data + "&cpf_matricula=" + cpf_matricula;


        $.ajax({
            type: 'ajax',
            method: 'post',
            url: '<?php echo base_url() ?>matricula/adicionaMatricula',
            data: data,
            async: false,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#myModal').modal('hide');
                    $('#myForm')[0].reset();
                    if (response.type == 'add') {
                        var type = 'inseridos'
                    } else if (response.type == 'update') {
                        var type = "alterados"
                    }

                    getitens();
                } else {

                }
            },
            error: function() {
                alert('Could not add data');
            }
        });

    }


    function search() {
        var nome_pessoafisica = document.getElementById("filtro").value;
        var filter = document.getElementById("filtro_pf").value;

        $.ajax({
            type: 'ajax',
            data: {nome_pessoafisica: nome_pessoafisica, filter: filter},
            url: '<?php echo base_url() ?>pessoafisica/buscaFiltro',
            async: false,
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                            '<td hidden>' + data[i].cod_pessoafisica + '</td>' +
                            '<td style="text-align: center;">' + data[i].codaes_matricula + '</td>' +
                            '<td>' + data[i].nome_pessoafisica + '</td>' +
                            '<td style="text-align: center;">' + data[i].anac_pessoafisica + '</td>' +
                            '<td style="text-align: center;">' + data[i].telefone_pessoafisica + '</td>' +
                            '<td>' + data[i].email_pessoafisica + '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="btn btn-xs btn-info item-edit" data="' + data[i].cod_pessoafisica + '"><span class="glyphicon glyphicon-pencil"></span></a>' +
                            '<a href="javascript:;" class="btn btn-xs btn-danger item-delete" data="' + data[i].cod_pessoafisica + '"><span class="glyphicon glyphicon-trash"></span></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon-info-sign item-popup" data="' + data[i].anac_pessoafisica + '&' + data[i].cpf_pessoafisica + '"></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon glyphicon-list-alt item-matricula" data="' + data[i].cod_pessoafisica + '&' + data[i].cpf_pessoafisica + '&' + data[i].cod_cursomatricula + '&' + data[i].tipo_curso + '&' + data[i].cod_pessoafisica + '&' + data[i].nomeguerra_pessoafisica + '"></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon glyphicon glyphicon-user item-login" data="' + data[i].cod_pessoafisica + '&' + data[i].codaes_matricula + '&' + data[i].cod_pessoafisica + '"></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon-envelope item-email" data="' + data[i].cpf_pessoafisica + '&' + data[i].cod_pessoafisica + '"></a>' +
                            '</td>' +
                            '</tr>';
                }
                $('#showdata').html(html);
                contador();
            },
            error: function() {
                alert('Could not get Data from Database');
            }
        });
    }

    function carregaCursos() {

        var tipo_curso = $('#formMatricula').attr('data-transfer-tipocurso');
        var cod_cursomatricula = $('#formMatricula').attr('data-transfer-codcurso');

        $.ajax({
            type: 'ajax',
            data: {tipo_curso: tipo_curso, cod_cursomatricula: cod_cursomatricula},
            url: '<?php echo base_url() ?>matricula/listCursos',
            async: false,
            method: 'POST',
            dataType: 'json',
            beforeSend: function() {
                $("#cod_cursomatricula").html('<option value="">Carregando informações...</option>')
            },
            success: function(data) {
                var option = '';
                $.each(data, function(key, value) {
                    option += '<option value="' + key + '">' + value + '</option>';
                });

                $("#cod_cursomatricula").html('<option value="">Selecione uma opção...</option>' + option);
            },
            error: function() {
                alert('Erro ao carregar dados.');
            }
        });
    }


    function carregaNivelAcesso() {


        $.ajax({
            type: 'ajax',
            data: '',
            url: '<?php echo base_url() ?>nivelacesso/carregaNivelAcesso',
            async: false,
            method: 'POST',
            dataType: 'json',
            beforeSend: function() {
                $("#cod_nivelacesso").html('<option value="">Carregando informações...</option>')
            },
            success: function(data) {
                var option = '';
                $.each(data, function(key, value) {
                    option += '<option value="' + key + '">' + value + '</option>';
                });

                $("#cod_nivelacesso").html('<option value="">Selecione uma opção...</option>' + option);
            },
            error: function() {
                alert('Erro ao carregar dados.');
            }
        });
    }

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
            url: '<?php echo base_url() ?>pessoafisica/buscaPessoas',
            success: function(data) {
                var retorno = JSON.parse(data);
                var html = '';
                var i;
                for (i = 0; i < retorno.length; i++) {




                    html += '<tr>' +
                            '<td hidden>' + retorno[i].cod_pessoafisica + '</td>' +
                            '<td style="text-align: center;">' + retorno[i].cod_pessoafisica + '</td>' +
                            '<td>' + retorno[i].nome_pessoafisica + '</td>' +
                            '<td style="text-align: center;">' + retorno[i].anac_pessoafisica + '</td>' +
                            '<td style="text-align: center;">' + retorno[i].telefone_pessoafisica + '</td>' +
                            '<td>' + retorno[i].email_pessoafisica + '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="btn btn-xs btn-info item-edit" data="' + retorno[i].cod_pessoafisica + '"><span class="glyphicon glyphicon-pencil"></span></a>' +
                            '<a href="javascript:;" class="btn btn-xs btn-danger item-delete" data="' + retorno[i].cod_pessoafisica + '"><span class="glyphicon glyphicon-trash"></span></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon-info-sign item-popup" data="' + retorno[i].anac_pessoafisica + '&' + retorno[i].cpf_pessoafisica + '"></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon glyphicon-list-alt item-matricula" data="' + retorno[i].cod_pessoafisica + '&' + retorno[i].cpf_pessoafisica + '&' + retorno[i].cod_cursomatricula + '&' + retorno[i].tipo_curso + '&' + retorno[i].cod_pessoafisica + '&' + retorno[i].nomeguerra_pessoafisica + '"></a>' +
                            '</td>' +
                            '<td>' +
                            '<a href="javascript:;" class="glyphicon glyphicon glyphicon glyphicon-user item-login" data="' + retorno[i].cpf_pessoafisica + '&' + retorno[i].codaes_matricula + '&' + retorno[i].cod_pessoafisica + '&' + retorno[i].cod_pessoafisica + '"></a>' +
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