<div class="page-header">
                    <h1><img src="<?php echo site_url('img/alogo2.png'); ?>" style="max-height: 60px; max-width: px;"> Aeroclube de Eldorado do Sul | <small>Bem-vindo!</small></h1>      
                </div>
<div id="third-block" >
    <div class="line">
         <p class="subtitile"><h3>Caro aluno...</h3><br> Foi pensando em você que o Aeroclube desenvolveu um portal completamente novo, com novas funcionalidade e mais dinamicidade para aprimorar sua experiência conosco.  
                    </p>
        <div class="margin" style=" width: 25em; background-color: #f1f1f1; text-align: center; padding: 1em; border-radius: 10px;">
            <div class="s-12 m-6 l-3">
                <h3 >QUADRO DE AVISO</h3>
                <?php
                foreach ($quadroaviso as $quadro) {

                    echo '<p class="subtitile_company" style="font-size: 12px;"><i>Responsável pela informação: ' . $quadro->nomeguerra_pessoafisica . '</i> </p>';
                    echo '<p class="subtitile_title">';

                    echo 'OPERAÇÕES: '.$quadro->desc_quadroaviso .'';
                    echo '<p style="font-weight: bold; font-size: 12px;">Atualizado em: ' .$quadro->data_quadroaviso. ' </p>';
                }
                ?>
            </div>
            </p> 
        </div>
    </div>
</div>
</div>