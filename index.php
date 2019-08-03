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
<!-- HERO -->
<div class="row">
        <div class="col">
            <section class="hero">
                <div class="img-hero">
                    <!-- <video src="img/portada 1 animación.mp4" autoplay loop type="video/mp4" poster="img/portada_1.jpg" ></video>  -->
                </div>

                <div class="degradado1"></div>
                <!-- <div class="degradado2"></div> -->
                <div class="idioma">
                    <span class="es">ES</span>
                    <span>/</span>
                    <span class="en">EN</span>
                </div>
                <div class="btn-up">
                    <img class="icon-up" src="<?php echo get_template_directory_uri(); ?>/img/up.svg">
                </div>
                
                <div class="chat">
                    <img class="icon-messenger" src="<?php echo get_template_directory_uri(); ?>/img/messenger.svg" alt="">
                </div>
            </section>
        </div>
    </div>
<!-- FIN HERO -->    

<!-- FOOTER -->

    
    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <!-- <script src='js/swiper.min.js'></script> -->
    
    <!-- <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script> -->

    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script src="js/script.js"></script> -->

<?php get_footer();?>