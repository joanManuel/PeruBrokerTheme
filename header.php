<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>
</head>
<body>
<!-- TOP - BARRA DE ARRIBA -->
   <header  id="inicio">
       <div class="menu" id="menu">
           <div class="content-menu" >

                <!-- Logo -->
                <div class="logo">
                        <figure class="img-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_img_perubroker.png" alt="logo PERU BROKER">
                        </figure>
                        <div class="text-logo">
                            <h1>Peru Broker S A</h1>
                        </div>
                </div>

                <!-- MENU -->
                <nav class="lista-menu">
                    <div class="bar"></div>
                    <?php
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' =>'menu-principal'
                );
                wp_nav_menu($args);
            ?>
                        <!-- <li><a href="#inicio"class="goto active">Inicio</a></li>
                        <li><a href="#nosotros"class="goto ">Nosotros</a></li>
                        <li><a href="#servicios"class="goto ">Servicios</a></li>
                        <li><a href="#clientes"class="goto ">Clientes</a></li>
                        <li><a href="#reportes"class="goto ">Reportes</a></li>
                        <li><a href="#contacto"class="goto ">Contacto</a></li> -->
                </nav>

            </div>
        </div>
    </header>    
    <!-- FIN - BARRA DE ARRIBA -->