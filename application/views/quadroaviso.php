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
        <title>MATRÍCULA - AEROCLUBE DE ELDORADO DO SUL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo site_url('estilos/css/table_component.css'); ?>">

        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/js/bootstrap.min.js'); ?>">

        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

        <script type="text/javascript">

            jQuery(document).ready(function() {


                jQuery('#ajax_form').submit(function() {
                    debugger;

                    var dados = jQuery(this).serialize();

                    jQuery.ajax({
                        type: "POST",
                        url: "quadroaviso/update",
                        data: dados,
                        success: function(data)
                        {
                            $('.alert-success').html('Quadro de Aviso atualizado com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                        }
                    });

                    return false;
                });

            });
        </script>








    </head>

    <div class="container">
        <br>
        <div class="alert alert-success" style="display: none;">
        </div>
        <div class="page-header">
            <h1>Quadro de Avisos</h1>      
        </div>

        <?php
        $this->load->helper('form');
        $dataform = array(
            'id' => 'ajax_form',
            'method' => 'POST',
            'id' => 'ajax_form',
            'type' => 'submit',
        );
        echo form_open('http://localhost/aeroeldorado/portal', $dataform);


        foreach ($quadroaviso as $quadro) {
            ?>
            <br>
            <div class="panel panel-default">
                <!-- Default panel contents -->

                <div class="panel-body">


                    <?php
                    echo form_label('');
                    $titulo = array(
                        'name' => 'cod_pessoafisica',
                        'id' => 'cod_pessoafisica',
                        'readonly' => true,
                        'type' => 'hidden',
                        'style' => 'width:40%;  height: 10px;',
                        'value' => $this->session->userdata('cod_pessoafisica')
                    );
                    echo form_input($titulo);
                    ?>

                    <div class="row" style="padding: 1em;">
                        <div class="form-group col-md-2">
                            <?php
                            echo form_label('Responsável');
                            $titulo = array(
                                'name' => 'nomeguerra_pessoafisica',
                                'id' => 'nomeguerra_pessoafisica',
                                'readonly' => true,
                                'class' => 'form-control input-sm',
                                'value' => $this->session->userdata('nomeguerra_pessoafisica')
                            );
                            echo form_input($titulo);
                            ?>

                        </div>

                        <div class="form-group col-md-2">
                            <?php
                            $date = new DateTime();
                            date_default_timezone_set('America/Sao_Paulo');

                            echo form_label('Hora');
                            $dataquadro = array(
                                'name' => 'data_quadroaviso',
                                'id' => 'data_quadroaviso',
                                'class' => 'form-control input-sm',
                                'readonly' => true,
                                'value' => $date->format('d/m/Y H:i'),
                            );
                            echo form_input($dataquadro);
                            ?>
                        </div>
                    </div>


                    <?php
                    echo '<br>';
                    $aviso = array(
                        'name' => 'desc_quadroaviso',
                        'id' => 'desc_quadroaviso',
                        'value' => $quadro->desc_quadroaviso,
                        'class' => 'form-control summertext'
                    );
                    echo form_textarea($aviso);


                    echo '<br>';
                    $submit = array(
                        'value' => 'SALVAR',
                        'id' => 'submit',
                        'class' => 'btn btn-md btn-info',
                    );
                }

                $js = '';
                echo form_submit($submit, '', $js);
                form_close();
                ?>

            </div>
        </div>
    </div>

    <br><br><br>    





    <script>
        $(function() {

            $('.summertext').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]

            });
        });


    </script>

</body>



</html>

<!--

https://pt.stackoverflow.com/questions/113586/existe-plugin-para-upload-de-imagens-para-o-summernote
https://summernote.org/deep-dive/#onimageupload

-->