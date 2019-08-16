<!DOCTYPE html>
<html lang="es">
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
                'theme_location' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
                </nav>

            </div>
        </div>
    </header>    
    <!-- FIN - BARRA DE ARRIBA -->