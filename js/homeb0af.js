
jQuery(document).ready(function(){

    $('.aqui').click(function(event) {
        event.preventDefault();
        $('.mod2').show();
        $('.mod1').hide();
    });
    $('.cerrar').click(function(event) {
        event.preventDefault();
        $('.mod2').hide();
        $('.mod1').show();
    });
    $('.elements-gride').masonry({
        itemSelector: '.element-item',
        columnWidth:330,
        //isFitWidth: true,
        gutter: 30

    });
    $(".carousel_educacion").owlCarousel({
    mouseDrag: false,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        500:{
            items:2,

        },
        800:{
            items:3,


        },
        1250:{
            items:4,


        }
    }
    });


    $(".carousel_noticia").owlCarousel({
    items:1,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplay:true,
    autoplayTimeout:8000,
    loop:true,
    mouseDrag: false,
    });

    $(".carousel_articulo").owlCarousel({
    items:1,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplay:true,
    autoplayTimeout:10000,
    loop:true,
    mouseDrag: false,
    });

    var owlcar = jQuery('.slider');
    owlcar.owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    items:1,
    mouseDrag: false,
    animateOut: 'slideOutDown',
    animateIn: 'fadeInDown',
    autoplay:true,
    autoplayTimeout:6000

    });
    owlcar.on('changed.owl.carousel', function(event) {
    var item = event.item.index - 2;     // Position of the current item
    $('h2').removeClass('animated fadeInDownBig');
    $('a').removeClass('animated fadeInUp');
    $('.owl-item').not('.cloned').eq(item).find('h2').addClass('animated fadeInDownBig');
    $('.owl-item').not('.cloned').eq(item).find('a').addClass('animated fadeInUp');
    });
    //$('.owl-dots').appendTo('.caja_noticia');
    $(".carousel_educacion .owl-item").hover(function(){
    $(this).css('z-index','1000')
    }, function(){
    $(this).css('z-index','0')
    });


    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,

    });
    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

});
