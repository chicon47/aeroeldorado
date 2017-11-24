<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aeroclube de Eldorado do Sul</title>
        <link rel="shortcut icon" href="<?php echo site_url('favicon.ico'); ?>">
        <script src="<?php echo site_url('estilos/newmenu/js/modernizr-custom.js'); ?>"></script>
        <script src="<?php echo site_url('estilos/js/jquery-3.2.1.min.js'); ?>"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('estilos/newmenu/css/organicfoodicons.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('estilos/newmenu/css/component.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('estilos/newmenu/css/demo.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="javascript" type="text/javascript"  href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.js'); ?>">
        <link rel="javascript" type="text/javascript" href="<?php echo site_url('bootstrap/bootstrap/js/bootstrap.min.js'); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    </head>




    <body>
        <!-- Main container -->
        <div class="container">
            <!-- Blueprint header -->
            <header class="bp-header cf">
                <div class="dummy-logo">
                    
                   
                    
                    <div class="dummy-icon foodicon"><img src="<?php 
                    
                    if(!$this->session->userdata('foto_pessoafisica')){
                       $fotoperfil = 'default.png';
                    }else {
                        $fotoperfil = $this->session->userdata('foto_pessoafisica');
                    }
                    
                    echo site_url('img/users/' . $fotoperfil); 
                    ?>" alt="" style="max-height: 62px; max-width: px; border-radius:10px;"/></div>
                    <h2 class="dummy-heading"><?php echo $this->session->userdata('nome_pessoafisica'); ?></h2>
                </div>
                <!--<div class="bp-header__main" style="min-width: 40%;" >
                    <img src="" alt="logo" style="max-height: 80px; max-width: 80px;  padding: 5px; margin: -15px 0px 10px; position: relative;" >
                    <h1 class="bp-header__title">Aeroclube de Eldorado do Sul</h1>
                    <span class="bp-header__present">Centro de Ensino Aeronáutico </span>
                </div>-->
            </header>
            <button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
            <nav id="ml-menu" class="menu">
                <button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
                <?php
                $nivelacesso = $this->session->userdata('cod_nivelacesso');

                if ($nivelacesso == 5) {

                    echo '<div class="menu__wrap">
                    <ul data-menu="main" class="menu__level">';
                    echo "<li class='menu__item'><a class='menu__link' href='" . base_url('home/inicio') . "'>Início</a></li>";

                    foreach ($submenu as $sub) {


                        if ($sub->cod_menu == 15 || $sub->cod_menu == 16 || $sub->cod_menu == 17) {
                            echo "<li class='menu__item'><a class='menu__link' href='" . base_url($sub->caminho_menu) . "'>" . $sub->desc_menu . "</a></li>";
                        } else if ($sub->cod_menu != 18) {
                            echo "<li class='menu__item'><a class='menu__link' data-submenu='submenu-" . $sub->ordem . "'>" . $sub->caminho_menu, $sub->desc_menu . "</a></li>";
                        }
                        if ($sub->cod_menu == 18) {
                            echo "<li class='menu__item'><a class='menu__link' href='" . base_url($sub->caminho_menu) . "'>" . $sub->desc_menu . "</a></li>";
                        }
                    }

                    echo '</ul>';

                    echo '<ul data-menu="submenu-1" class="menu__level">';


                    foreach ($menu as $men) {
                        if ($men->ordem == 1) {
                            echo "
                                    <li class='menu__item'><a class='menu__link' href='" . base_url($men->caminho_menu) . "' >" . $men->desc_menu . "</a></li>";
                        }
                    }
                    echo'</ul>';

                    echo '<ul data-menu="submenu-2" class="menu__level">';
                    foreach ($menu as $men) {
                        if ($men->ordem == 2) {
                            echo "
                                    <li class='menu__item'><a class='menu__link' href='" . base_url($men->caminho_menu) . "' >" . $men->desc_menu . "</a></li>";
                        }
                    }
                    echo'</ul>';

                    echo '<ul data-menu="submenu-3" class="menu__level">';
                    foreach ($menu as $men) {
                        if ($men->ordem == 3) {
                            echo "
                                    <li class='menu__item'><a class='menu__link' href='" . base_url($men->caminho_menu) . "' >" . $men->desc_menu . "</a></li>";
                        }
                    }
                    echo'</ul>';

                    echo '<ul data-menu="submenu-4" class="menu__level">';
                    foreach ($menu as $men) {
                        if ($men->ordem == 4) {
                            echo "
                                    <li class='menu__item'><a class='menu__link' href='" . base_url($men->caminho_menu) . "' >" . $men->desc_menu . "</a></li>";
                        }
                    }
                    echo'</ul>
                    </div>';
                } else if ($nivelacesso == 1) {

                    echo '<div class="menu__wrap">
                    <ul data-menu="main" class="menu__level">';
                    echo "<li class='menu__item'><a class='menu__link' href='" . base_url('home/inicio') . "'>Início</a></li>";
                    foreach ($menu as $sub) {

                        echo "<li class='menu__item'><a class='menu__link' href='" . base_url($sub->caminho_menu) . "'>" . $sub->desc_menu . "</a></li>";
                    }
                    echo'</ul>
                    </div>';
                }

                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><li class='menu__item'><a class='menu__link' href='" . base_url('home/do_logout') . "'>Sair</a></li>";
                ?>
            </nav>
            <div id="carrega" class="content" style=" text-align: justify; ">
                <div class="page-header">
                    <h1><img src="<?php echo site_url('img/alogo2.png'); ?>" style="max-height: 60px; max-width: px;"> Aeroclube de Eldorado do Sul | <small>Bem-vindo!</small></h1>      
                </div>
                <div id="third-block" >

                    <p class="subtitile"><h3>Caro aluno...</h3><br> Foi pensando em você que o Aeroclube desenvolveu um portal completamente novo, com novas funcionalidade e mais dinamicidade para aprimorar sua experiência conosco.  
                    </p>
                    <div class="margin" style=" width: 25em; background-color: #f1f1f1; text-align: center; padding: 1em; border-radius: 10px;">
                        <div class="s-12 m-6 l-3">
                            <h3 >QUADRO DE AVISO</h3>
                            <?php
                            foreach ($quadroaviso as $quadro) {

                                echo '<p class="subtitile_company" style="font-size: 12px;"><i>Responsável pela informação: ' . $quadro->nomeguerra_pessoafisica . '</i> </p>';
                                echo '<p class="subtitile_title">';

                                echo $quadro->desc_quadroaviso . '';
                                echo '<p style="font-weight: bold; font-size: 12px;">Atualizado em: ' . $quadro->data_quadroaviso . ' </p>';
                            }
                            ?>
                        </div>
                        </p> 
                    </div>
                </div>
            </div>
        </div>     


    </div>


</div>
<!-- /view -->

<script src="<?php echo site_url('estilos/newmenu/js/classie.js'); ?>"></script>
<script src="<?php echo site_url('estilos/newmenu/js/dummydata.js'); ?>"></script>
<script src="<?php echo site_url('estilos/newmenu/js/main.js'); ?>"></script>
<script src="<?php echo site_url('estilos/newmenu/js/jquery-3.0.0.js'); ?>"></script>


<script>
        (function() {

            var menuEl = document.getElementById('ml-menu'),
                    mlmenu = new MLMenu(menuEl, {
                        // breadcrumbsCtrl : true, // show breadcrumbs
                        // initialBreadcrumb : 'all', // initial breadcrumb text
                        backCtrl: true, // show back button
                        // itemsDelayInterval : 60, // delay between each menu item sliding animation


                        onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
                    });

            // mobile menu toggle
            var openMenuCtrl = document.querySelector('.action--open'),
                    closeMenuCtrl = document.querySelector('.action--close');

            openMenuCtrl.addEventListener('click', openMenu);
            closeMenuCtrl.addEventListener('click', closeMenu);

            function openMenu() {
                classie.add(menuEl, 'menu--open');
            }

            function closeMenu() {
                classie.remove(menuEl, 'menu--open');
            }

            // simulate grid content loading
            var gridWrapper = document.querySelector('.content');



            function loadDummyData(ev, itemName) {
                ev.preventDefault();

                closeMenu();
                gridWrapper.innerHTML = '';
                classie.add(gridWrapper, 'content--loading');
                setTimeout(function() {


                    classie.remove(gridWrapper, 'content--loading');
                    if (itemName == 'Pessoa Física') {
                        $("#carrega").load("d77c0ae076adaeb3d214ed44ae3f49ea");
                    } else if (itemName == 'Início') {
                        $("#carrega").load("893ce80729195afed54dd71286ef15bc");
                    } else if (itemName == 'Matrícula') {
                        $("#carrega").load("6183b37347b357daa37d3a5d6404f519");
                    } else if (itemName == 'Agenda') {
                        $("#carrega").load("d0dbdfd8edf8dd1608405055c26adc94");
                    } else if (itemName == 'Quadro de Aviso') {
                        $("#carrega").load("d52483908d02d1f417914982340702b2");
                    } else if (itemName == 'Biblioteca') {
                        $("#carrega").load("686d4ba6996ab7e2bd626c9a3cc965c6");
                    } else if (itemName == 'Meus Dados') {
                        $("#carrega").load("eab9e0b513487b2d4249bcdb356b7b04");
                    } else if (itemName == 'Login') {
                        $("#carrega").load("502d3f1c9100e0a1885b313db326f8be");
                    } else if (itemName == 'Nova Semana') {
                        $("#carrega").load("2e9c80ed9c52ddaaadd8448612e81a6f");
                    } else if (itemName == 'Restrições') {
                        $("#carrega").load("13360ec8b88491302a9a77858058b398");
                    } else if (itemName == 'Instrutores') {
                        $("#carrega").load("6cdcf6057f3a901d67ee966e3c4d8cb1");
                    } else if (itemName == 'Aeronaves') {
                        $("#carrega").load("1e34b7f181eec0093a8f7eda4d464d70");
                    } else if (itemName == 'Níveis de Acesso') {
                        $("#carrega").load("f6930a77eef8db4493e7ca8d5b2c6a02");
                    } else if (itemName == 'Menus') {
                        $("#carrega").load("8d6ab84ca2af9fccd4e4048694176ebf");
                    } else if (itemName == 'Cursos') {
                        $("#carrega").load("cadcurso");
                    } else if (itemName == 'Notícias') {
                        $("#carrega").load("6b7efc47e7c76c3912203106eca72c56");
                    } else if (itemName == 'Banco de Imagens') {
                        $("#carrega").load("27fcbab1da917bc875c8ac791a705b63");
                    }


                }, 700);
            }
        })();
</script>
</body>

</html>