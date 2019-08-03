/*Efecto cuando se haga scroll */
jQuery(function() {

  /**Ancho de pantalla */
  var ancho = jQuery(window).width();    
  var point = 992;

  //Animación del navbar(menu) en pantalla movil
  if(ancho <= point){
    jQuery('nav.lista-menu').on('click', function() {
      jQuery('.bar').toggleClass('animate'),
      jQuery('header .menu').toggleClass('color-header');
    })
    // Oculta el menu
    jQuery('nav.lista-menu').on('click', function() {
      jQuery('nav.lista-menu ul').toggle();
  
    })
  }
 
  /* Pantalla de escritorio */
  if(ancho >= point){
    /* MENU FIJO */
    let menu = document.getElementById("menu");
    let sticky = menu.offsetTop;

    function checkPosition(){
      if(window.pageYOffset >= sticky){
        menu.classList.add("fixed");
      }else{
        menu.classList.remove("fixed");
      }
    }
    window.onscroll = function(){
      checkPosition();
    }
  }

  /* EFECTO PARA CUANDO SE HAGA SCROLL */
  jQuery(document).on("scroll", scroll);
    
  menu = jQuery('header ul li a');

  menu.on('click', function() {
    var to = jQuery(this).attr('href'); 

    jQuery('header ul li a').removeClass('active-menu');
    jQuery('html, body').animate({ scrollTop: (jQuery(to).offset().top)-75}, 700);
    if(ancho <= point){
        jQuery('nav.lista-menu ul').toggle();
        jQuery('.bar').toggleClass('animate'),
        jQuery('header .menu').removeClass('color-header');
    }
    jQuery(this).addClass('active-menu');
    jQuery('header ul li a:first').removeClass('active-menu');
  
    return false;
  });
});

function scroll(event){
  var scrollPos = jQuery(document).scrollTop();
  menu.each(function () {
      var currLink = jQuery(this);
      var refElement = jQuery(currLink.attr("href"));
      if ((refElement.position().top)-80 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
        
          menu.removeClass("active-menu");
          currLink.addClass("active-menu");
      }
      else{
          currLink.removeClass("active-menu");
      }
  });
}

jQuery(function () {
  /* Par alos efectos cuando se haga scroll */
  AOS.init();

  // BOTON PARA SUBIR
  jQuery('.btn-up').click(function(){
    jQuery('body, html').animate({
    scrollTop: '0px'
    }, 300);
  });
   
  jQuery(window).scroll(function(){
    if( jQuery(this).scrollTop() > 0 ){
      jQuery('.btn-up').slideDown(300);
      } else {
      jQuery('.btn-up').slideUp(300);
      }
    });
 
  //SECCION NOSOTROS - TABS
  
  var tabButtons = new Swiper('.tabs-buttons', {
    slidesPerView: 'auto',
    freeMode: true,
    mousewheelControl: true,
  });

  /* TABS */
  jQuery('.tabs-buttons ul li a:first').addClass('active-tab');
  jQuery('.contenido-item .item:first').show();

  jQuery('.tabs-buttons a').on('click',function(){
    jQuery('.tabs-buttons ul li a').removeClass('active-tab');
    jQuery('.ocultar').hide();
    jQuery(this).addClass('active-tab');

    var enlace = jQuery(this).attr('href');
      jQuery(enlace).fadeIn(500);
    return false;
  });

// STAF
  //initialize swiper when document ready
  var swiper = new Swiper('.content-item', {
     slidesPerView: 'auto',
          spaceBetween: 20,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            // disableOnInteraction: false,
            // stopOnLastSlide: true,
        },    
      breakpoints:{
       
       320: {
          // slidesPerView: 'auto',
          // spaceBetween: 30,
          // centeredSlides: true,
        }
      }
    
  });


  // CLIENTES

  //initialize swiper when document ready
  var swiper = new Swiper('.content-item-clientes', {
      loop: true,
      slidesPerView: 'auto',
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
          delay: 2500,
          // disableOnInteraction: false,
          // stopOnLastSlide: true,
      },
      breakpoints:{
          320: {

            // slidesPerView: 'auto',
            // spaceBetween: 30,
            // centeredSlides: true,
        },
      },
    
  });
  // MAPA
    var map = L.map('map').setView([-12.126303, -77.016515], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([-12.126303, -77.016515]).addTo(map)
        .bindPopup('PERU BROKER S.A.')
        .openPopup();
});/* FIN */