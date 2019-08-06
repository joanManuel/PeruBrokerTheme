
<?php get_header(); ?>
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
<?php get_template_part('template-parts/nosotros');?>
<?php get_template_part('template-parts/staff');?>
<?php get_template_part('template-parts/servicios');?>
<?php get_template_part('template-parts/clientes');?>

<?php get_footer();?>