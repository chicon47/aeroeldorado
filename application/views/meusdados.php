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
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>



    </head>

    <body>

        <div class="container">  
            <div class="page-header">
                <h1>Meus Dados</h1>      
            </div>

            <?php
            foreach ($meusdados as $dados) {
                echo '<h4>INFORMAÇÕES DA MATRÍCULA</h4>';
                echo '<div> Matrícula AES: <b>' . $dados->codaes_matricula . '</b></div>';
                echo '<div> Nome de Guerra: <b>' . $dados->nomeguerra_pessoafisica . '</b></div>';
                echo '<div> Curso: <b>' . $dados->descricao_cursomatricula . '</b></div>';
                echo '<br><br>';
                echo '<h4>INFORMAÇÕES DE CADASTRO</h4>';
                echo '<div> Nome: <b>' . $dados->nome_pessoafisica . '</b></div>';
                echo '<div> Cód. ANAC: <b>' . $dados->anac_pessoafisica . '</b></div>';
                echo '<div> Sexo: <b>' . $dados->sexo . '</b></div>';
                echo '<div> Telefone: <b>' . $dados->telefone_pessoafisica . '</b></div>';
                echo '<div> Data de Nascimento: <b>' . $dados->datanascto_pessoafisica . '</b></div>';
                echo '<div> Estado Civil: <b>' . $dados->estadocivil_pessoafisica . '</b></div>';
                echo '<div> Naturalidade: <b>' . $dados->naturalidade_pessoafisica . '</b></div>';
                echo '<div> Nacionalidade: <b>' . $dados->nacionalidade_pessoafisica . '</b></div>';
                echo '<div> Nome do Pai: <b>' . $dados->nomepai_pessoafisica . '</b></div>';
                echo '<div> Nome da Mãe: <b>' . $dados->nomemae_pessoafisica . '</b></div>';
                echo '<div> Email: <b>' . $dados->email_pessoafisica . '</b></div>';
                echo '<div> RG: <b>' . $dados->rg_pessoafisica . ' - ' . $dados->rgorgaoexp_pessoafisica . '</b></div>';
                echo '<div> CPF: <b>' . $dados->cpf_pessoafisica . '</b></div>';
                echo '<div> Cert. Reservista: <b>' . $dados->certreservista_pessoafisica . '</b></div>';

                echo '<div> Título de Eleitor: <b>' . $dados->tituloeleitor_pessoafisica . '</b> Zona: <b>' . $dados->tituloeleitorzona_pessoafisica . '</b> Seção: <b>' . $dados->tituloeleitorsecao_pessoafisica . '</b></div>';
                echo '<br><br><br><br>';
            }
            ?>

        </div>
    </div>



</body>

</html>