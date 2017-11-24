<body>
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

        echo form_open('http://localhost/matricula/home/relmatr', $attr);
        ?>

        <div style="color: red;"><b>* CAMPOS DE PREENCHIMENTO OBRIGATÓRIO.</b></div>
        <br>
<?php
$denescola_matricula = array(
    'name' => 'denescola_matricula',
    'id' => 'denescola_matricula',
    'type' => 'text',
    'value' => 'AEROCLUBE DE ELDORADO DO SUL',
    'class' => 'form-control',
    'readonly' => 'true'
);


$unregional_matricula = array(
    'name' => 'unregional_matricula',
    'id' => 'unregional_matricula',
    'type' => 'text',
    'value' => 'PORTO ALEGRE',
    'class' => 'form-control',
    'text-align' => 'center',
    'readonly' => 'true'
);
?>

        
            <div class="form-group col-md-offset-8">
                <label for="codanac_matricula">*CÓD. ANAC:</label>
<?php
$codanac_matricula = array(
    'name' => 'codanac_matricula',
    'id' => 'codanac_matricula',
    'type' => 'text',
    'placeholder' => 'CÓDIGO ANAC',
    'class' => 'form-control',
    'maxlength' => '6',
    'required' => 'true',
);

echo form_input($codanac_matricula);
?>


            </div>
            <div class="form-group col-md-8">
                <label for="nomealuno">*NOME:</label>
                    <?php
                    $nome_matricula = array(
                        'name' => 'nomealuno_matricula',
                        'id' => 'nomealuno_matricula',
                        'type' => 'text',
                        'placeholder' => 'NOME COMPLETO',
                        'class' => 'form-control',
                        'required' => 'true',
                        'text-transform' => 'uppercase',
                    );

                    echo form_input($nome_matricula);
                    ?>

            </div>

            <div class="form-group col-md-offset-8">
                <label for="sexo">*SEXO:</label>

<?php
$sexo_matricula = array(
    'null' => 'Escolha uma opção...',
    'MASCULINO' => 'MASCULINO',
    'FEMININO' => 'FEMININO',
);

$js = array(
    'class' => 'form-control',
    'id' => 'sexo_matricula',
    'name' => 'sexo_matricula',
    'required' => 'true',
    'type' => ''
);

$shirts_on_sale = array('small', 'large');
echo form_dropdown('', $sexo_matricula, '', $js);
?>
                </select>


            </div>

        </div>





        <h1 class="page-header">1 - DADOS PESSOAIS</h1>

        <div class="row">
            <div class="form-group col-md-3">
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
            <div class="form-group col-md-offset-3">
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

        </div>

        <div class="row">
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
            <div class="form-group col-lg-offset-9">
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
            <div class="form-group col-md-3">
                <label for="telefone">*TELEFONE:</label>
                        <?php
                        $telefonealuno_matricula = array(
                            'name' => 'telefonealuno_matricula',
                            'id' => 'telefonealuno_matricula',
                            'type' => 'tel',
                            'placeholder' => 'xx 0000-0000',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($telefonealuno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-3 ">
                <label for="exampleInputEmail1">*DATA NASCTO.:</label>
                        <?php
                        $nasctoaluno_matricula = array(
                            'name' => 'nasctoaluno_matricula',
                            'id' => 'nasctoaluno_matricula',
                            'type' => 'text',
                            'placeholder' => '01/01/2001',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($nasctoaluno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-6">
                <label for="sel1">*ESTADO CIVIL:</label>

                        <?php
                        $codestado_matricula = array(
                            'null' => 'Escolha uma opção...',
                            '1' => 'SOLTEIRO(A)',
                            '2' => 'CASADO(A)',
                            '3' => 'DIVORCIADO(A)',
                            '4' => 'VIÚVO(A)',
                            '5' => 'SEPARADO(A)',
                        );

                        $js = array(
                            'class' => 'form-control',
                            'id' => 'codestado_matricula',
                            'required' => 'true',
                            'type' => 'number',
                            'name' => 'codestado_matricula',
                        );

                        $shirts_on_sale = array('small', 'large');
                        echo form_dropdown('', $codestado_matricula, '', $js);
                        ?>

            </div>
            <div class="form-group col-md-6 ">
                <label for="naturalidade">*NATURALIDADE:</label>
                        <?php
                        $naturalidadealuno_matricula = array(
                            'name' => 'naturalidadealuno_matricula',
                            'id' => 'naturalidadealuno_matricula',
                            'type' => 'text',
                            'placeholder' => 'NATURALIDADE',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($naturalidadealuno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-6 ">
                <label for="nacionalidade">*NACIONALIDADE:</label>
                        <?php
                        $nacionalidadealuno_matricula = array(
                            'name' => 'nacionalidadealuno_matricula',
                            'id' => 'nacionalidadealuno_matricula',
                            'type' => 'text',
                            'placeholder' => 'NACIONALIDADE',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($nacionalidadealuno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-6 ">
                <label for="nomepai">*FILIAÇÃO PAI:</label>
                        <?php
                        $filiacaopaialuno_matricula = array(
                            'name' => 'filiacaopaialuno_matricula',
                            'id' => 'filiacaopaialuno_matricula',
                            'type' => 'text',
                            'placeholder' => 'NOME COMPLETO DO PAI',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($filiacaopaialuno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-6 ">
                <label for="nomemae">*FILIAÇÃO MÃE:</label>
                        <?php
                        $filiacaomaealuno_matricula = array(
                            'name' => 'filiacaomaealuno_matricula',
                            'id' => 'filiacaomaealuno_matricula',
                            'type' => 'text',
                            'placeholder' => 'NOME COMPLETO DA MÃE',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($filiacaomaealuno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-12 ">
                <label for="nomemae">*EMAIL:</label>
                        <?php
                        $emailaluno_matricula = array(
                            'name' => 'emailaluno_matricula',
                            'id' => 'emailaluno_matricula',
                            'type' => 'email',
                            'placeholder' => 'EMAIL',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($emailaluno_matricula);
                        ?>
            </div>
        </div>

        <h1 class="page-header">2 - DOCUMENTAÇÃO</h1>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="rg">*IDENTIDADE Nº:</label>
                        <?php
                        $identidadealuno_matricula = array(
                            'name' => 'identidadealuno_matricula',
                            'id' => 'identidadealuno_matricula',
                            'type' => 'number',
                            'placeholder' => 'IDENTIDADE',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($identidadealuno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-2">
                <label for="orgaoexpedicaorg">*ÓRGÃO EXP.:</label>
                        <?php
                        $orgaoidadentidadealuno_matricula = array(
                            'name' => 'orgaoidadentidadealuno_matricula',
                            'id' => 'orgaoidadentidadealuno_matricula',
                            'type' => 'text',
                            'placeholder' => 'O.E.',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($orgaoidadentidadealuno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-3 ">
                <label for="dataemissaorg">*DATA EMISSÃO:</label>
                        <?php
                        $dataemissaoidentidadealuno_matricula = array(
                            'name' => 'dataemissaoidentidadealuno_matricula',
                            'id' => 'dataemissaoidentidadealuno_matricula',
                            'type' => 'text',
                            'placeholder' => 'DATA EMISSÃO',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($dataemissaoidentidadealuno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-offset-8 ">
                <label for="cpf">*CPF:</label>
                        <?php
                        $cpfaluno_matricula = array(
                            'name' => 'cpfaluno_matricula',
                            'id' => 'cpfaluno_matricula',
                            'type' => 'text',
                            'placeholder' => 'CPF',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($cpfaluno_matricula);
                        ?>

            </div>
            <div class="form-group col-md-4">
                <label for="cpf">CERTIFICADO RESERVISTA Nº:</label>
                        <?php
                        $reservistaaluno_matricula = array(
                            'name' => 'reservistaaluno_matricula',
                            'id' => 'reservistaaluno_matricula',
                            'type' => 'text',
                            'placeholder' => 'CERT. RESERVISTA',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($reservistaaluno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">CATEGORIA:</label>
                        <?php
                        $catreservistaaluno_matricula = array(
                            'name' => 'catreservistaaluno_matricula',
                            'id' => 'catreservistaaluno_matricula',
                            'type' => 'text',
                            'placeholder' => 'CATEGORIA',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($catreservistaaluno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-offset-7">
                <label for="cpf">*TÍTULO DE ELEITOR:</label>
                        <?php
                        $tituloeleitoraluno_matricula = array(
                            'name' => 'tituloeleitoraluno_matricula',
                            'id' => 'tituloeleitoraluno_matricula',
                            'type' => 'text',
                            'placeholder' => 'TÍTULO DE ELEITOR',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($tituloeleitoraluno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">*ZONA:</label>
                        <?php
                        $zonatituloaluno_matricula = array(
                            'name' => 'zonatituloaluno_matricula',
                            'id' => 'zonatituloaluno_matricula',
                            'type' => 'text',
                            'placeholder' => 'ZONA',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($zonatituloaluno_matricula);
                        ?>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">*SEÇÃO:</label>
                        <?php
                        $secaotituloaluno_matricula = array(
                            'name' => 'secaotituloaluno_matricula',
                            'id' => 'secaotituloaluno_matricula',
                            'type' => 'text',
                            'placeholder' => 'SEÇÃO',
                            'class' => 'form-control',
                            'required' => 'true',
                        );

                        echo form_input($secaotituloaluno_matricula);
                        ?>
            </div>


        </div>
        <h1 class="page-header">* 3 - NÍVEL DE INSTRUÇÃO</h1>

        <div class="form-group col-md-12">


                        <?php
                        $nivelinstrucao = array(
                            'null' => 'Escolha uma opção...',
                            '1' => 'FUNDAMENTAL INCOMPLETO',
                            '2' => 'FUNDAMENTAL COMPLETO',
                            '3' => 'MEDIO INCOMPLETO',
                            '4' => 'MEDIO COMPLETO',
                            '5' => 'SUPERIOR INCOMPLETO',
                            '6' => 'SUPERIOR COMPLETO',
                            '7' => 'MESTRADO',
                            '8' => 'DOUTORADO',
                        );

                        $js = array(
                            'class' => 'form-control',
                            'id' => 'nivelinstrucaoaluno_matricula',
                            'required' => 'true',
                            'type' => 'number',
                            'name' => 'nivelinstrucaoaluno_matricula',
                        );


                        echo form_dropdown('', $nivelinstrucao, '', $js);
                        ?>

        </div>



        <div class="form-group col-md-5">
            <label for="cpf">SÉRIE/PERÍODO (SE INCOMPLETO):</label>
            <input type="text" class="form-control" id="serieperiodoincompleto" placeholder="SÉRIE/PERÍODO" >
        </div>
        <div class="form-group col-md-offset-5">
            <label for="cpf">CURSO:</label>
            <input type="text" class="form-control" id="cursoincompleto"  placeholder="CURSO">
        </div>

        <hr />


        <!--<h1 class="page-header">4 - CURSOS DE APERFEIÇOAMENTO</h1>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="cpf">CURSO DE:</label>
                        <?php
                        $nomecurso_cursoap1 = array(
                            'name' => 'nomecurso_cursoap1',
                            'id' => 'nomecurso_cursoap1',
                            'type' => 'text',
                            'placeholder' => 'CURSO',
                            'class' => 'form-control',
                        );

                        echo form_input($nomecurso_cursoap1);
                        ?>

            </div>
            <div class="form-group col-md-5">
                <label for="cpf">ENTIDADE:</label>
                        <?php
                        $entidade_cursoap1 = array(
                            'name' => 'entidade_cursoap1',
                            'id' => 'entidade_cursoap1',
                            'type' => 'text',
                            'placeholder' => 'ENTIDADE',
                            'class' => 'form-control',
                        );

                        echo form_input($entidade_cursoap1);
                        ?>
            </div>
            <div class="form-group col-md-2">
                <label for="cpf">UF:</label>
<?php
$ufcurso_cursoap1 = array(
    'name' => 'ufcurso_cursoap1',
    'id' => 'ufcurso_cursoap1',
    'type' => 'text',
    'placeholder' => 'UF',
    'class' => 'form-control',
);

echo form_input($ufcurso_cursoap1);
?>
            </div>
            <div class="form-group col-md-5">
                <label for="cpf">PERÍODO:</label>
<?php
$periodo_cursoap1 = array(
    'name' => 'periodo_cursoap1',
    'id' => 'periodo_cursoap1',
    'type' => 'text',
    'placeholder' => 'PERÍODO',
    'class' => 'form-control',
);

echo form_input($periodo_cursoap1);
?>
               
            </div>
        </div>




           <div class="row">
            <div class="form-group col-md-12">
                <label for="cpf">CURSO DE:</label>
<?php
$nomecurso_cursoap2 = array(
    'name' => 'nomecurso_cursoap2',
    'id' => 'nomecurso_cursoap2',
    'type' => 'text',
    'placeholder' => 'CURSO',
    'class' => 'form-control',
);

echo form_input($nomecurso_cursoap2);
?>
                
            </div>
            <div class="form-group col-md-5">
                <label for="cpf">ENTIDADE:</label>
<?php
$entidade_cursoap2 = array(
    'name' => 'entidade_cursoap2',
    'id' => 'entidade_cursoap2',
    'type' => 'text',
    'placeholder' => 'ENTIDADE',
    'class' => 'form-control',
);

echo form_input($entidade_cursoap2);
?>
            </div>
            <div class="form-group col-md-2">
                <label for="cpf">UF:</label>
<?php
$ufcurso_cursoap2 = array(
    'name' => 'ufcurso_cursoap2',
    'id' => 'ufcurso_cursoap2',
    'type' => 'text',
    'placeholder' => 'UF',
    'class' => 'form-control',
);

echo form_input($ufcurso_cursoap2);
?>
            </div>
            <div class="form-group col-md-5">
                <label for="cpf">PERÍODO:</label>
<?php
$periodo_cursoap2 = array(
    'name' => 'periodo_cursoap2',
    'id' => 'periodo_cursoap2',
    'type' => 'text',
    'placeholder' => 'PERÍODO',
    'class' => 'form-control',
);

echo form_input($periodo_cursoap2);
?>
               
            </div>

           </div>
            
               
               </div>

        <h1 class="page-header">5 - IDIOMAS ESTRANGEIROS</h1>
               
               
        -->







        <h1 class="page-header">6 - PARA PORTADORES DE LICENÇAS DA ANAC</h1>

        <!--
            <div class="form-group col-md-5">
                <label for="cpf">TIPO DE LICENÇA:</label>
                <input type="text" class="form-control" id="tipolicenca" placeholder="EX.: PCA, PPA, PLA">
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">Nº LICENÇA:</label>
                <input type="text" class="form-control" id="nrlicenca"  placeholder="EX.: 86757">
            </div>
            <div class="form-group col-md-4">
                <label for="cpf">HABILITAÇÕES:</label>
                <input type="text" class="form-control" id="hablicenca" placeholder="EX.: MNTE, MLTE, IFRA" >
            </div>

            <div class="form-group col-md-5">
                <label for="cpf">TIPO DE LICENÇA:</label>
                <input type="text" class="form-control" id="tipolicenca1" placeholder="EX.: PCA, PPA, PLA">
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">Nº LICENÇA:</label>
                <input type="text" class="form-control" id="nrlicenca1"  placeholder="EX.: 86757">
            </div>
            <div class="form-group col-md-4">
                <label for="cpf">HABILITAÇÕES:</label>
                <input type="text" class="form-control" id="hablicenca1" placeholder="EX.: MNTE, MLTE, IFRA" >
            </div>


            <div class="form-group col-md-5">
                <label for="cpf">TIPO DE LICENÇA:</label>
                <input type="text" class="form-control" id="tipolicenca2" placeholder="EX.: PCA, PPA, PLA">
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">Nº LICENÇA:</label>
                <input type="text" class="form-control" id="nrlicenca2"  placeholder="EX.: 86757">
            </div>
            <div class="form-group col-md-4">
                <label for="cpf">HABILITAÇÕES:</label>
                <input type="text" class="form-control" id="hablicenca2" placeholder="EX.: MNTE, MLTE, IFRA" >
            </div>
        --><div class="row">

            <div class="form-group col-md-6">
                <label for="cpf">CLASSE DO CERTIFICADO MÉDICO AERONÁUTICO:</label>
<?php
$classecma_matricula = array(
    'name' => 'classecma_matricula',
    'id' => 'classecma_matricula',
    'type' => 'text',
    'placeholder' => 'EX.: PRIMEIRA, SEGUNDA, QUARTA...',
    'class' => 'form-control',
);

echo form_input($classecma_matricula);
?>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">VALIDADE:</label>
<?php
$validadecma_matricula = array(
    'name' => 'validadecma_matricula',
    'id' => 'validadecma_matricula',
    'type' => 'text',
    'placeholder' => 'VALIDADE DO CMA',
    'class' => 'form-control'
);

echo form_input($validadecma_matricula);
?>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">ÓRGÃO EXPEDIDOR:</label>
<?php
$orgaocma_matricula = array(
    'name' => 'orgaocma_matricula',
    'id' => 'orgaocma_matricula',
    'type' => 'text',
    'placeholder' => 'EX.: HACO, CLC009',
    'class' => 'form-control'
);

echo form_input($orgaocma_matricula);
?>
            </div>
        </div>


        <h1 class="page-header">7 - INFORMAÇÕES ADICIONAIS</h1>
        <div class="form-group col-md-3">
            <label for="cpf">TIPO SANGUÍNEO:</label>
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
        <div class="form-group col-md-3">
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
    'name' => 'nomeparenteacidente_matricula',
    'id' => 'nomeparenteacidente_matricula',
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
    'name' => 'grauparenteacidente_matricula',
    'id' => 'grauparenteacidente_matricula',
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
    'name' => 'enderecoparente_matricula',
    'id' => 'enderecoparente_matricula',
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
    'name' => 'telefoneparente_matricula',
    'id' => 'telefoneparente_matricula',
    'type' => 'text',
    'placeholder' => 'xx 0000-0000',
    'class' => 'form-control',
    'required' => 'true',
);

echo form_input($telefoneparente_matricula);
?>
        </div>
        <div class="row">

        </div>


        <br>
        <div class="row">
            <div class="col-md-12">


<?php
$submit = array(
    'value' => 'GERAR MATRÍCULA',
    'id' => 'seguinte',
    'class' => 'btn btn-primary',
    'onclick' => 'enviajson()'
);

echo form_submit($submit);
form_close();
?>



            </div>

        </div>



    </form>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Confirme seus dados:</h2>
            </div>
            <div class="modal-body">
                <script>

                </script>


            </div>
            <div class="modal-footer">
                <h3>Aeroclube de Eldorado do Sul </h3>
            </div>
        </div>

    </div>

</body>