<!DOCTYPE html>
<html lang="en-US">
    <?php include_once 'header.php'; ?>
    <body class="size-1140 simulador">
        <!-- TOP NAV WITH LOGO -->  
        <?php include_once 'menu.php'; ?>;
        <section>
            <div id="head" style="padding-top: 25%;">
                <div class="item">
                </div>
            </div>
            <div id="third-block">
                <div class="line" >
                    <h2 style="font-size: 3em;">SIMULADOR AATD</h2><br>
                </div>

                <div class="line">
                    <div class="margin">
                        <p class="s-12 m-12 l-8 center" style="text-align: justify;">Visando o aperfeiçoamento no treinamento do piloto-aluno e instrutor, o Aeroclube de Eldorado do Sul possui Simulador de Voo AATD (Advanced Aviation Training Device) composto por uma cabine bi-plane em fiberglass com sistema de visualização de painel de instrumentos em escala aproximada. Utilizado para realizar treinamento IFR, o simulador incorpora as performances em todas as fases do voo das aeronaves: Cessna Skyhawk 172R, Piper Arrow IV, Seneca V e Beech King Air.</p>
                        <!--<h2>Some subtitle</h2>-->
                        <br><p class="s-12 m-12 l-8 center" style="text-align: justify;">Homologado pela ANAC - Agência Nacional de Aviação Civil, o simulador ainda conta com instrumentos que equipam as aeronaves citadas, complementados por uma painel de comunicações de rádio VHF e auxílios à navegação de não precisão (NDB, VOR-DME), precisão (ILS) e RNAV (GNSS), incluindo sistema diretor de voo e piloto automatico.</p>


                        <br>
                        
                        <div class="s-7" >
                            
                            <img style="margin-left: 35%;" src="<?php echo base_url('img/simulador1.jpg'); ?>" alt="alternative text"> <br>     
                            
                        </div>
                        
                        <br>
                    </div>
                </div>
            </div>
            <!-- GALLERY -->	


        </section>
        <!-- FOOTER -->   
        <?php
        include_once 'footer.php';
        ?>
        <script type="text/javascript" src="<?php echo base_url('estilos/js/responsee.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('estilos/owl-carousel/owl.carousel.js'); ?>"></script>   
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $("#owl-demo2").owlCarousel({
                    slideSpeed: 300,
                    autoPlay: true,
                    navigation: false,
                    pagination: true,
                    singleItem: true
                });
            });

        </script>  
    </body>
</html>


