<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Login - Aeroclube de Eldorado do Sul</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <link rel="stylesheet" href="<?php echo site_url('estilos/css/ckb.css'); ?>"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body style="background-image: url(<?php echo site_url('img/manut/fundo.jpg'); ?>); background-size: cover; background-attachment: fixed; ">

        <div class="alert alert-info" style="display: none;">

        </div>

        <div id="resetPass" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Redefinição de Senha</h4>
                    </div>
                    <div class="modal-body">
                        <b style="color: red;">Preencha os seguintes dados. Se os dados corresponderem, será enviada uma nova senha no seu endereço de e-mail.</b>
                        <br>
                        <form id="formResetPass" action="" method="post">
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

                                            <?php
                                            $codaes = array(
                                                'name' => 'codaes',
                                                'id' => 'codaes',
                                                'placeholder' => 'CÓD. AES',
                                                'type' => 'text',
                                                'required' => 'true',
                                                'class' => 'form-control',
                                                'maxlength' => 4
                                            );
                                            ?>

                                            <div class="form-group col-md-6">
                                                <label for="codaes">CÓD. AES:</label>
                                                <?php
                                                echo form_input($codaes);
                                                ?>
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="cpf">CPF:</label>
                                                <?php
                                                $cpf_pessoafisica = array(
                                                    'name' => 'cpf',
                                                    'id' => 'cpf',
                                                    'type' => 'text',
                                                    'placeholder' => 'CPF',
                                                    'class' => 'form-control',
                                                    'required' => 'true',
                                                );

                                                echo form_input($cpf_pessoafisica);
                                                ?>

                                            </div>

                                            <div class="form-group col-md-4">

                                                <?php
                                                $anac_pessoafisica = array(
                                                    'name' => 'canac',
                                                    'id' => 'canac',
                                                    'type' => 'text',
                                                    'placeholder' => 'CÓD. ANAC',
                                                    'class' => 'form-control',
                                                    'text-align' => 'center',
                                                    'required' => 'true',
                                                    'maxlength' => 6
                                                );
                                                ?>
                                                <label for="canac">CÓD. ANAC:</label>
                                                <?php
                                                echo form_input($anac_pessoafisica);
                                                ?>
                                            </div>
                                            <div class="form-group col-md-8 ">
                                                <label for="email">EMAIL:</label>
                                                <?php
                                                $email_pessoafisica = array(
                                                    'name' => 'email',
                                                    'id' => 'email',
                                                    'type' => 'email',
                                                    'placeholder' => 'EMAIL',
                                                    'class' => 'form-control',
                                                    'required' => 'true',
                                                );

                                                echo form_input($email_pessoafisica);
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
                        <button type="button" id="btnResetPass" class="btn btn-danger">Enviar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <div id="login-overlay" class="modal-dialog" style="padding-top: 5%;">
            <div class="modal-content" >
                <div class="modal-header" style="text-align: center;">
                    <h4 class="modal-title" id="myModalLabel"><img src="<?php echo site_url('img/logo.png'); ?>" alt="logo" ></h4>
                </div>
                
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="col-xs-6">


                                <div class="form-group">

                                    <?php
                                    echo validation_errors();
                                    echo form_open('login/autenticar');
                                    ?>
                                    <br>
                                    <label for="codaes_matricula" class="control-label">Usuário</label>
                                    <?php
                                    $username = array(
                                        'name' => 'codaes_matricula',
                                        'id' => 'codaes_matricula',
                                        'placeholder' => 'Usuário',
                                        'maxlength' => '15',
                                        'class' => 'form-control',
                                        'maxlength' => 4
                                    );

                                    echo form_input($username);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Senha</label>
                                    <?php
                                    $password = array(
                                        'name' => 'senha',
                                        'id' => 'senha',
                                        'placeholder' => 'Senha',
                                        'maxlength' => '15',
                                        'class' => 'form-control',
                                        'type' => 'password'
                                    );
                                    echo form_password($password);
                                    ?>


                                </div>
                                <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                <?php
                                $sub = array(
                                    'name' => 'submit',
                                    'id' => 'submit',
                                    'class' => 'btn btn-primary btn-sm',
                                );

                                $fgt_pass = array(
                                    'name' => 'fgt_pass',
                                    'id' => 'fgt_pass',
                                    'class' => 'btn btn-warning btn-sm',
                                );
                                ?>
                                <br>    
                                <?php
                                echo form_submit($sub, 'ENTRAR');
                                echo form_button($fgt_pass, '  Esqueci minha senha!');
                                ?>



                            </div>
                            <div class="col-md-6">
                                <br>
                                <div class="" style=" text-align: center; vertical-align: middle;">
                                    <div class="col-md-12">
                                        <h4>QUADRO DE AVISO</h4>
                                        <?php
                                        foreach ($quadroaviso as $quadro) {

                                            echo '<p class="subtitile_company" style="font-size: 12px;"><i>Responsável pela informação: ' . $quadro->nomeguerra_pessoafisica . '</i> </p>';
                                            echo '<p class="subtitile_title">';

                                            echo 'OPERAÇÕES: ' . $quadro->desc_quadroaviso . '';
                                            echo '<p style="font-weight: bold; font-size: 12px;">Atualizado em: ' . $quadro->data_quadroaviso . ' </p>';
                                        }
                                        ?>
                                    </div>
                                    </p> 
                                </div>
                            </div>
                        </div>

                    
                </div>
                <div class="modal-footer">
                        http://www.aisweb.aer.mil.br/api/?apiKey=1949045506&apiPass=50449c6f-9dfb-11e7-a836-00505680c1b4&area=sol&icaoCode=SBPA&dt_i=2017-11-21&dt_f=2017-11-21
                    </div>
            </div>
        </div>
        <!--<div id="login_form">
            <h1><img src="<?php echo site_url('img/logo.png'); ?>" alt="logo" style="padding-left: 1.3em;"></h1>
        



        



        </div>-->


        <script>

            $("#cpf").mask("999.999.999-99");


            $('#fgt_pass').click(function() {
                $('#resetPass').modal('show');
            });
            
            $('#btnResetPass').click(function() {
                var data = $('#formResetPass').serialize();
                console.log(data);
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?php echo base_url() ?>login/resetPassword',
                        data: data,
                        async: false,
                        dataType: 'json',
                        success: function(response) {

                            if (response.success) {
                                if (response.type == 'add') {

                                  
                                } else if (response.type == 'break') {
                                    
                                }
                            }
                        },
                        error: function() {
                            alert('Could not add data');
                        }
                    });
                
            });


            $('#submit').click(function() {



                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>login/autenticar',
                    dataType: 'json',
                    success: function(response) {
                        if (!response.success) {
                            $('.alert-info').html('Usuário ou senha incorretos!').fadeIn().delay(4000).fadeOut('slow');

                        } else {
                            alert('Error');
                        }
                    },
                    error: function() {

                    }
                });
            });

        </script>




    </body>
</html>
