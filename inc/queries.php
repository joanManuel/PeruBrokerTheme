
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