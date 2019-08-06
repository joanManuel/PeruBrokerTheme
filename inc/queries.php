<?php /***   SECCION DE NOSOTROS   ***/ ?>
<?php
function broker_lista_titulos_secciones(){ ?>
        <?php 
            $args = array(
                    'post_type' => 'broker_seccion',
                    'posts_per_page' => -1,   //-1 te trae todos
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
            $contador =0;
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            $contador +=1;
            ?>
            
            <li class="swiper-slide">
                <a href="#item<?php echo $contador;?>" >
                <?php the_title(); ?>
                </a>   
            </li>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
}
?>

<?php 
function broker_lista_contenido_secciones(){ ?>
    <?php 
            $args = array(
                    'post_type' => 'broker_seccion',
                    'posts_per_page' => -1,   //-1 te trae todos
                     'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
            $contador =0;
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            $contador +=1;
            ?>
            <div id="item<?php echo $contador;?>" class="item ocultar">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <?php the_content();?>  
                                     </div>
                                     <div class="col">
                                            <figure>
                                                <?php the_post_thumbnail('full'); ?>
                                            </figure>
                                        </div>
                                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
    }
?>

<?php
function mostrar_staff(){ ?>
        <?php 
            $args = array(
                    'post_type' => 'broker_Staff',
                    'posts_per_page' => -1,   //-1 te trae todos
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
            
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
           
            ?>
            
            <div class="item-staff swiper-slide">
                <figure class="img-staff">
                    <?php the_post_thumbnail('full'); ?>
                </figure>
                <p><?php the_field('nombre') ?></p>
                <span><?php the_field('puesto') ?></span>
            </div>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
}
?>

<?php /***   SECCION DE SERVICIOS   ***/ ?>


<?php 
function mostrar_servicios(){ ?>
    <?php 
            $args = array(
                    'post_type' => 'broker_servicios',
                    'posts_per_page' => -1,   //-1 te trae todos
                     'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
           
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            
            ?>
            <div class="row" data-aos="zoom-in-left" data-aos-duration="1000">
                <div class="col-sm-12">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content();?>  </p>
                            
                    <figure class="productos">       
                    <img src="<?php the_field('imagen_1'); ?>" alt="">
                    <img src="<?php the_field('imagen_2'); ?>" alt="">
                    <img src="<?php the_field('imagen_3'); ?>" alt="">
                        
                    </figure>    
                </div>
            </div>     
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
    }
?>

<?php 
function mostrar_clientes(){ ?>
<?php 

    }
?>

<!-- <div class="item-clientes swiper-slide">
    <figure class="img-staff">
        <img src="img/staff.png" alt="">
    </figure>
    
    <p>Nombre del cliente</p>
</div> -->