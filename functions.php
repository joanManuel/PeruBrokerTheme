<?php
/** Consultas reutilizables  **/
//require get_template_directory().'/inc/queries.php';
function perubroker_setup(){
    //Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //Agregar imagenes de tamaño personalizado
    add_image_size('square',350,350,true);
    add_image_size('portrait',350,724,true);
    add_image_size('cajas',400,375,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',966,644,true);
}
add_action('after_setup_theme','perubroker_setup');

// Menus de navegación, agregar más utilizando el arreglo
function perubroker_menus(){
    register_nav_menus(array(
        'menu-principal'=>__('Menu Principal','perubroker')
    ));
}
add_action('init','perubroker_menus');

function perubroker_scripts_styles(){
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(),'8.0.1');
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.css', array(),'8.0.1');
    //wp_enqueue_style('slicknavCSS',get_template_directory_uri().'/css/slicknav.min.css',array(),'1.0.0');
    wp_enqueue_style('googleFont', "http://allfont.es/allfont.css?fonts=bookman-old-style",array(),'1.0.0');
    wp_enqueue_style('googleFont2', "https://fonts.googleapis.com/css?family=Roboto&display=swap",array(),'1.0.0');

    wp_enqueue_style('swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css',array(),'3.3.1');

    wp_enqueue_style('leaflet','https://unpkg.com/leaflet@1.5.1/dist/leaflet.css',array(),'1.5.1');

    wp_enqueue_style('aos','https://unpkg.com/aos@2.3.1/dist/aos.css',array(),'2.3.1');

    //La hoja de estilos principal, cambiar versión para que refresque el cache.
    wp_enqueue_style('style', get_stylesheet_uri(),array('bootstrap-grid','normalize','googleFont','googleFont2','swiper','leaflet','aos'), '1.0.0');

    //wp_enqueue_script('slicknavJS',get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'1.0.0',true);

    wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',array('jquery'),'1.0.0',true);
    //wp_enqueue_script('jquery-3.4.1',get_template_directory_uri().'/js/jquery-3.4.1.js',array('jquery-3.4.1'),'3.4.1',true);
}
add_action('wp_enqueue_scripts','perubroker_scripts_styles');

?>