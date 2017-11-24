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
        <title>NOVA SEMANA - AEROCLUBE DE ELDORADO DO SUL</title>
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
            <div class="page-header">
                <h1>Nova Semana</h1>      
            </div>

            <div class="alert alert-success" style="display: none;">
            </div>
            <br>
            <div class="panel panel-default">
                
                        <?php
                        $this->load->library('form_validation');
                        $this->load->helper('form');
                        echo validation_errors();
                        $attr = array(
                            'method' => 'POST',
                            'id' => 'formNovaSemana',
                            
                            'class' => 'container-fluid page'
                        );
                        echo form_open('', $attr);
                        ?>
                <br>
                <fieldset class="col-md-12">
                    <legend>Horários de Voos</legend>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h0700 = array(
                                    'name' => '0700',
                                    'id' => '0700',
                                    'value' => 1
                                );

                                echo form_checkbox($h0700, FALSE)
                                ?>

                                <label for="0700"> 07:00 </label>
                            </div>


                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h0730 = array(
                                    'name' => '0730',
                                    'id' => '0730',
                                    'value' => 1
                                );

                                echo form_checkbox($h0730, FALSE)
                                ?>
                                <label for="0730"> 07:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h0800 = array(
                                    'name' => '0800',
                                    'id' => '0800',
                                    'value' => 1
                                );

                                echo form_checkbox($h0800)
                                ?>
                                <label for="0800"> 08:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h0830 = array(
                                    'name' => '0830',
                                    'id' => '0830',
                                    'value' => 1
                                );

                                echo form_checkbox($h0830)
                                ?>
                                <label for="0830"> 08:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h0900 = array(
                                    'name' => '0900',
                                    'id' => '0900',
                                    'value' => 1
                                );

                                echo form_checkbox($h0900)
                                ?>
                                <label for="0900"> 09:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h0930 = array(
                                    'name' => '0930',
                                    'id' => '0930',
                                    'value' => 1
                                );

                                echo form_checkbox($h0930)
                                ?>
                                <label for="0930"> 09:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1000 = array(
                                    'name' => '1000',
                                    'id' => '1000',
                                    'value' => 1
                                );

                                echo form_checkbox($h1000)
                                ?>
                                <label for="1000"> 10:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1030 = array(
                                    'name' => '1030',
                                    'id' => '1030',
                                    'value' => 1
                                );

                                echo form_checkbox($h1030)
                                ?>
                                <label for="1030"> 10:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1100 = array(
                                    'name' => '1100',
                                    'id' => '1100',
                                    'value' => 1
                                );

                                echo form_checkbox($h1100)
                                ?>
                                <label for="1100"> 11:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1130 = array(
                                    'name' => '1130',
                                    'id' => '1130',
                                    'value' => 1
                                );

                                echo form_checkbox($h1130)
                                ?>
                                <label for="1130"> 11:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1200 = array(
                                    'name' => '1200',
                                    'id' => '1200',
                                    'value' => 1
                                );

                                echo form_checkbox($h1200)
                                ?>
                                <label for="1200"> 12:00 </label>
                            </div>
                            <br>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1300 = array(
                                    'name' => '1300',
                                    'id' => '1300',
                                    'value' => 1
                                );

                                echo form_checkbox($h1300)
                                ?>
                                <label for="1300"> 13:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1330 = array(
                                    'name' => '1330',
                                    'id' => '1330',
                                    'value' => 1
                                );

                                echo form_checkbox($h1330)
                                ?>
                                <label for="1330"> 13:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1400 = array(
                                    'name' => '1400',
                                    'id' => '1400',
                                    'value' => 1
                                );

                                echo form_checkbox($h1400)
                                ?>
                                <label for="1400"> 14:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1430 = array(
                                    'name' => '1430',
                                    'id' => '1430',
                                    'value' => 1
                                );

                                echo form_checkbox($h1430)
                                ?>
                                <label for="1430"> 14:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1500 = array(
                                    'name' => '1500',
                                    'id' => '1500',
                                    'value' => 1
                                );

                                echo form_checkbox($h1500)
                                ?>
                                <label for="1500"> 15:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1530 = array(
                                    'name' => '1530',
                                    'id' => '1530',
                                    'value' => 1
                                );

                                echo form_checkbox($h1530)
                                ?>
                                <label for="1530"> 15:30 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1600 = array(
                                    'name' => '1600',
                                    'id' => '1600',
                                    'value' => 1
                                );

                                echo form_checkbox($h1600)
                                ?>
                                <label for="1600"> 16:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1630 = array(
                                    'name' => '1630',
                                    'id' => '1630',
                                    'value' => 1
                                );

                                echo form_checkbox($h1630)
                                ?>
                                <label for="1630"> 16:30 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1700 = array(
                                    'name' => '1700',
                                    'id' => '1700',
                                    'value' => 1
                                );

                                echo form_checkbox($h1700)
                                ?>
                                <label for="1700"> 17:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1730 = array(
                                    'name' => '1730',
                                    'id' => '1730',
                                    'value' => 1
                                );

                                echo form_checkbox($h1730)
                                ?>
                                <label for="1730"> 17:30 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $h1800 = array(
                                    'name' => '1800',
                                    'id' => '1800',
                                    'value' => 1
                                );

                                echo form_checkbox($h1800)
                                ?>
                                <label for="1800"> 18:00 </label>
                            </div>

                        </div>
                    </div>

                </fieldset>
                <br>
                <fieldset class="col-md-12">
                    <legend>Horários Simulador de Voo</legend>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s0700 = array(
                                    'name' => 's0700',
                                    'id' => 's0700',
                                    'value' => 1
                                );

                                echo form_checkbox($s0700, FALSE)
                                ?>

                                <label for="s0700"> 07:00 </label>
                            </div>


                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s0730 = array(
                                    'name' => 's0730',
                                    'id' => 's0730',
                                    'value' => 1
                                );

                                echo form_checkbox($s0730, FALSE)
                                ?>
                                <label for="s0730"> 07:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s0800 = array(
                                    'name' => 's0800',
                                    'id' => 's0800',
                                    'value' => 1
                                );

                                echo form_checkbox($s0800)
                                ?>
                                <label for="s0800"> 08:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s0830 = array(
                                    'name' => 's0830',
                                    'id' => 's0830',
                                    'value' => 1
                                );

                                echo form_checkbox($s0830)
                                ?>
                                <label for="s0830"> 08:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s0900 = array(
                                    'name' => 's0900',
                                    'id' => 's0900',
                                    'value' => 1
                                );

                                echo form_checkbox($s0900)
                                ?>
                                <label for="s0900"> 09:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s0930 = array(
                                    'name' => 's0930',
                                    'id' => 's0930',
                                    'value' => 1
                                );

                                echo form_checkbox($s0930)
                                ?>
                                <label for="s0930"> 09:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1000 = array(
                                    'name' => 's1000',
                                    'id' => 's1000',
                                    'value' => 1
                                );

                                echo form_checkbox($s1000)
                                ?>
                                <label for="s1000"> 10:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1030 = array(
                                    'name' => 's1030',
                                    'id' => 's1030',
                                    'value' => 1
                                );

                                echo form_checkbox($s1030)
                                ?>
                                <label for="s1030"> 10:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1100 = array(
                                    'name' => 's1100',
                                    'id' => 's1100',
                                    'value' => 1
                                );

                                echo form_checkbox($s1100)
                                ?>
                                <label for="s1100"> 11:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1130 = array(
                                    'name' => 's1130',
                                    'id' => 's1130',
                                    'value' => 1
                                );

                                echo form_checkbox($s1130)
                                ?>
                                <label for="s1130"> 11:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1200 = array(
                                    'name' => 's1200',
                                    'id' => 's1200',
                                    'value' => 1
                                );

                                echo form_checkbox($s1200)
                                ?>
                                <label for="s1200"> 12:00 </label>
                            </div>
                            <br>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1300 = array(
                                    'name' => 's1300',
                                    'id' => 's1300',
                                    'value' => 1
                                );

                                echo form_checkbox($s1300)
                                ?>
                                <label for="s1300"> 13:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1330 = array(
                                    'name' => 's1330',
                                    'id' => 's1330',
                                    'value' => 1
                                );

                                echo form_checkbox($s1330)
                                ?>
                                <label for="s1330"> 13:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1400 = array(
                                    'name' => 's1400',
                                    'id' => 's1400',
                                    'value' => 1
                                );

                                echo form_checkbox($s1400)
                                ?>
                                <label for="s1400"> 14:00 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1430 = array(
                                    'name' => 's1430',
                                    'id' => 's1430',
                                    'value' => 1
                                );

                                echo form_checkbox($s1430)
                                ?>
                                <label for="s1430"> 14:30 </label>
                            </div>

                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1500 = array(
                                    'name' => 's1500',
                                    'id' => 's1500',
                                    'value' => 1
                                );

                                echo form_checkbox($s1500)
                                ?>
                                <label for="s1500"> 15:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1530 = array(
                                    'name' => 's1530',
                                    'id' => 's1530',
                                    'value' => 1
                                );

                                echo form_checkbox($s1530)
                                ?>
                                <label for="s1530"> 15:30 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1600 = array(
                                    'name' => 's1600',
                                    'id' => 's1600',
                                    'value' => 1
                                );

                                echo form_checkbox($s1600)
                                ?>
                                <label for="s1600"> 16:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1630 = array(
                                    'name' => 's1630',
                                    'id' => 's1630',
                                    'value' => 1
                                );

                                echo form_checkbox($s1630)
                                ?>
                                <label for="s1630"> 16:30 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1700 = array(
                                    'name' => 's1700',
                                    'id' => 's1700',
                                    'value' => 1
                                );

                                echo form_checkbox($s1700)
                                ?>
                                <label for="s1700"> 17:00 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1730 = array(
                                    'name' => 's1730',
                                    'id' => 's1730',
                                    'value' => 1
                                );

                                echo form_checkbox($s1730)
                                ?>
                                <label for="s1730"> 17:30 </label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-primary">
                                <?php
                                $s1800 = array(
                                    'name' => 's1800',
                                    'id' => 's1800',
                                    'value' => 1
                                );

                                echo form_checkbox($s1800)
                                ?>
                                <label for="s1800"> 18:00 </label>
                            </div>

                        </div>
                    </div>
                    <?php
                    $submitMat = array(
                        'value' => 'Criar Semana',
                        'id' => 'btnNovaSemana',
                        'class' => 'btn btn-primary',
                    );

                    echo form_submit($submitMat);
                    form_close();
                    ?>
                </fieldset>


                <!-- Default panel contents -->

                <table class="table table-responsive" style="margin-top: 20px;">


                    <tbody id="showdata" style="overflow-x:hidden;">

                    </tbody>

                </table>
            </div>






        </div>
    </div>
</body>


<script>

    $('#btnNovaSemana').click(function(e) {
      
        var data = $('#formNovaSemana').serialize();
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: '<?php echo base_url() ?>novasemana/addSemana',
            data: data,
            async: false,
            dataType: 'json',
            success: function(response) {
                e.preventDefault();
                    if (response.type == 'add') {
                      
                        $('#formNovaSemana')[0].reset();
                        
                        $('.alert-success').html('Semana gerada com sucesso!').fadeIn().delay(4000).fadeOut('slow');
                        getitens();
                    } else if (response.type == 'not_segunda') {
                        $('.alert-success').html('É permitido gerar uma nova semana apenas nas segundas-feiras!').fadeIn().delay(8000).fadeOut('slow');
                    }
            },
            error: function() {
                e.preventDefault();
                alert('Could not add data');
            }
        });
    });

</script>
</html>