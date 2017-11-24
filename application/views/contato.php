<!DOCTYPE html>
<html lang="en-US">
    <?php include_once 'header.php'; ?>
    <body class="size-1140 contato">
        <!-- TOP NAV WITH LOGO -->  
        <?php include_once 'menu.php'; ?>
        <section>
            <div id="head">
                <div class="line">
                    <h1>DÊ O PRIMEIRO PASSO DE SUA CARREIRA</h1>
                </div>
            </div>
            <div id="content" class="left-align contact-page">
                <div class="line">
                    <div class="margin">
                        <div class="s-12 l-6">
                            <h2>Envie sua mensagem para nós</h2>
                            <address>
                                <p><i class="icon-home icon"></i> BR-290, KM 123 | Eldorado do Sul</p>
                                <p><i class="icon-globe_black icon"></i> Rio Grande do Sul - Brasil</p>
                                <p><i class="icon-mail icon"></i> secretaria@aeroeldorado.com.br</p>
                                <p><i class="icon-sli-phone icon"></i> +55 51 3806 2020 | 51 3806 2019 | 51 3806 2017</p>
                                <p><i class="icon-sli-screen-smartphone icon"></i>+55 51 99581 3466</p>
                            </address>
                            <br />
                            <h2>Social</h2>
                            <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/aeroeldorado/" target="_blank">Aeroclube de Eldorado do Sul</a></p>
                        </div>
                        <div class="s-12 l-6">
                            <h2>Entre em contato conosco.</h2>
                            <form class="customform" method="POST" action="<?= base_url('enviar-email') ?>">
                                <div class="s-12 l-7"><input name="nome" placeholder="Nome" title="Nome" type="text" /></div>

                                <div class="s-12 l-7"><input name="email" placeholder="E-mail" title="E-mail" type="text" /></div>
                                <div class="s-12"><textarea placeholder="Mensagem" name="mensagem" rows="5"></textarea></div>
                                <div class="s-12 m-6 l-4"><button type="submit">Enviar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAP -->	
            <div id="map-block">  	  
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13813.903233362029!2d-51.445057000000006!3d-30.051893!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16623346ca8066eb!2sAeroclube+de+Eldorado+do+Sul!5e0!3m2!1spt-BR!2sus!4v1487822315422" width="100%" height="450" frameborder="0" style="border:0" ></iframe>
            </div>

        </section>
        <!-- FOOTER -->   
        <?php include_once 'footer.php'; ?>
        <script type="text/javascript" src="<?php echo base_url('estilos/js/responsee.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('estilos/owl-carousel/owl.carousel.js'); ?>"></script> 
        <script type="text/javascript">
            jQuery(document).ready(function($) {
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