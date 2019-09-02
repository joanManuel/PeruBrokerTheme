<!-- SECCION DE REPORTES -->
<section class=" reportes tables-page-section" ="service" id="reportes" >
                    <div class="content content-reportes"><!-- INICIO-CONTENT -->

                    
                        <div class="section_title text-center">
                            <?php
                                $nav_menu_locations = get_nav_menu_locations();
                                $menu_id = absint($nav_menu_locations["menu-principal"]);
                                $menu_items = wp_get_nav_menu_items($menu_id);
                                if (!empty($menu_items)) {
                                    echo "<h2>".$menu_items[4]->title."</h2>";
                                }
                            ?>

                        

                                <div class="mensaje-reportes">
                                    <?php mostrar_mensaje_reportes(); ?>
                                </div>

                            
                          
                        </div>

                       <div class="formulario-reportes">
                         <?php mostrar_formulario_reportes(); ?>       
                       </div>

                    <div class="row" data-aos="flip-right" data-aos-duration="1000">

                        <div class="col-md-8 col-lg-7">
                
                            <?php $id_year = get_term_by( 'name', date('Y'), 'year');?>
                        <!-- Inicio Formulario -->
                        <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ).'#reportes' ); ?>" method="get">
                        <div class="select">
                        
                            <?php
                                // echo date('Y');
                                // echo isset($_GET['years'])?$_GET['years']:'';
                                $args = array(
                                    //'show_option_none' => __( 'Select category' ),
                                    'taxonomy'=>'year',
                                    'name' => 'years',
                                    'value_field'=>'term_id',
                                    'order' => 'DESC',
                                    //'class' => 'select',
                                    //'exclude' => 1,
                                    //'value_field'=>'term_id',
                                    'selected'           => isset($_GET['years'])?$_GET['years']:$id_year->term_id ,
                                // 'hierarchical'       => 0,
                                    'echo'             => 0,
                                );
                                ?>
                                <?php $select  = wp_dropdown_categories( $args ); ?>
                                <?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
                                <?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>
                                <?php echo $select; ?>
                                <noscript>
                                    <input type="submit" value="view" />
                                </noscript>


                        </div><!--Fin select -->
                    </form><!--Fin formulario -->
                           
                           
                           
                <!-- tabla estadistica -->
                
                        
                            <h3>Estadísticas</h3>
                            <div class="table-responsive estadistica">
                                <table class="table">
                                    <thead>
                                        <th>Frecuencia</th>
                                        <th>Archivo</th>
                                    </thead>
​
                            
                            <?php //inicio
                           
                                $wp_query = new WP_Query( array(
                                'post_type' => 'estadisticas',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'year',
                                        'field'    => 'id',
                                        'terms' => isset($_GET['years'])?$_GET['years']:$id_year->term_id
                                    )),
                                'post_status'   => 'publish',
                                ));
                           // Loop WordPress
                           while ($wp_query->have_posts()) : $wp_query->the_post();
                           ?>
                            <tr>
                            
                                <td>
                                       <?php echo strip_tags(get_the_term_list( get_the_ID(), 'frecuencia')); ?>
                                </td>
                                <td>
                                    <?php    $file = get_field('adj_estadistica');
                                        if( $file ): ?>

                                        <a id="btn-AddDate" class="btn-descarga" href="#<?php // echo $file['url']; ?>" target="_blank" >Descargar</a> 
                                    
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endwhile;  wp_reset_postdata(); 
                            //FIN?>
                                                                          
                                </table>
                            </div>
                         
​
                          
                <!-- fin tabla estadistica -->
​
                <!-- tabla fishing report -->
                    
                        
                            <h3>Fishing Report</h3>
                            <div class="table-responsive fishing-report">
                                <table class="table">
                                    <thead>
                                        <th>Temporada</th>
                                        <th>Regiones</th>
                                        <th>Frecuencia</th>
                                        <th>Archivo</th>
                                    </thead>
                                    <?php //inicio
                                            $wp_query = new WP_Query( array(
                                            'post_type' => 'fishing_report',
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'year',
                                                    'field'    => 'id',
                                                    'terms' => isset($_GET['years'])?$_GET['years']:$id_year->term_id
                                                )),
                                            'orderby' => 'ID',
                                            'order' => 'ASC'
                                            ));
                                    // Loop WordPress
                                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                        <tr>
                                            <td>
                                                <?php echo strip_tags(get_the_term_list( get_the_ID(), 'temporada')); ?>
                                            </td>
                                            <td>
                                                <?php echo strip_tags(get_the_term_list( get_the_ID(), 'regiones')); ?>
                                            </td>
                                            <td>
                                                <?php echo strip_tags(get_the_term_list( get_the_ID(), 'frecuencia')); ?>
                                            </td>
                                            <td>
                                                    <?php    $file = get_field('adj_reporte_pesca');
                                                    if( $file ): ?>
                                                    <a id="btn-AddDate" class="fancy-btn" href="<?php echo $file['url']; ?>" target="_blank" >Descargar</a> 
                                            
                                                    <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endwhile;  wp_reset_postdata(); 
                                        //FIN?> 
                                    
                                    
                                </table>
                            </div>
                        
                    
                <!-- fin tabla estadistica -->
        
                <!-- tabla fishing reportes -->
                
                   
                            <h3>Reportes</h3>
                            <div class="table-responsive fishing-report">
                                <table class="table">
                                    <thead>
                                        <th>Temporada</th>
                                        <th>Regiones</th>
                                        <th>Frecuencia</th>
                                        <th>Archivo</th>
                                    </thead>
                                    <?php //inicio
                                            $wp_query = new WP_Query( array(
                                            'post_type' => 'reportes',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'year',
                                                    'field'    => 'id',
                                                    'terms' => isset($_GET['years'])?$_GET['years']:$id_year->term_id
                                                )),
                                            'posts_per_page' => -1,
                                            'orderby' => 'ID',
                                            'order' => 'ASC'
                                            ));
                                    // Loop WordPress
                                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                        <tr>
                                            <td>
                                                <?php echo strip_tags(get_the_term_list( get_the_ID(), 'temporada')); ?>
                                            </td>
                                            <td>
                                                <?php echo strip_tags(get_the_term_list( get_the_ID(), 'regiones')); ?>
                                            </td>
                                            <td>
                                                <?php echo strip_tags(get_the_term_list( get_the_ID(), 'frecuencia')); ?>
                                            </td>
                                            <td>
                                                    <?php    $file = get_field('adj_reportes');
                                                    if( $file ): ?>
                                                    <a id="btn-AddDate" class="fancy-btn" href="<?php echo $file['url']; ?>" target="_blank" >Descargar</a> 
                                            
                                                    <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endwhile;  wp_reset_postdata(); 
                                        //FIN?> 
                                </table>
                                </div>
                    </div>
        
                    <div class="col">
                        <figure>
                            <?php mostrar_imagen_reportes(); ?>
                        </figure>
                    </div>

                    
                </div> <!-- Fin row-->
                <!-- fin tabla reportes -->

                <div id="open-modal" class="modal-window">
                    <div>
                        <a href="#" title="Close" class="modal-close">Close</a>
                        <h1>Voilà!</h1>
                        <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                        <div><small>Check out</small></div>
                        <a href="https://aminoeditor.com" target="_blank">👉 Amino: Live CSS Editor for Chrome</div>
                    </div>
                </div>
                
                  </div> <!-- FIN-CONTENT -->
            </section>
        <!-- FIN REPORTES -->
