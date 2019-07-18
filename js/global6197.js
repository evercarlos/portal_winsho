AOS.init({disable: 'mobile'});
var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
jQuery(window).scroll(function(){
  var vvv = $(window).width();
  if (vvv > 768) {
    if ($(window).scrollTop() >= 300) {
       $('header').addClass('fixed_header animated fadeInDown');
    }
    else {
       $('header').removeClass('fixed_header animated fadeInDown');
    }
  }

});
jQuery(document).ready(function(){

    function h_mm(){
        var vvv = $(window).width();
        var hhh = $('.cbp-hsmenubg').height();
        if (vvv > 824 && $('ul.cbp-hsmenu').hasClass("open")) {
            $('.cbp-hsmenubg').hide();
            $('.menu_niveles').css('background','#ffffff')
        }

    }
    //h_mm();

    function hover_m(){

        var ventana = $(window).width();
        if (ventana > 1024) {

            var h_megmenu= $('ul.menu_niveles').outerHeight(true);
            $("li.menu_max.mm").hover(function(){
                $('.cbp-hsmenubg').height(h_megmenu);
                $(this).attr("data-open", "open");
                $(this).addClass("cbp-hsitem-open animated fadeIn");
            }, function(){
                $('.cbp-hsmenubg').height("auto");
                $(this).attr("data-open", "");
                $(this).removeClass("cbp-hsitem-open animated fadeIn");
            });
            $("li.menu_max").hover(function(){

                $(this).attr("data-open", "open");
                $(this).addClass("cbp-hsitem-open animated fadeIn");
            }, function(){

                $(this).attr("data-open", "");
                $(this).removeClass("cbp-hsitem-open animated fadeIn");
            });

            if($(".playmenu li").hasClass('cbp-hsitem-open')){
                $(".playmenu li").removeClass('cbp-hsitem-open');
                $('.cbp-hsmenubg').height(0);
            }
            else{

            }
           /* if($(".menu_colap li").hasAttribute('open')){
                $(".menu_colap li").removeAttr('data-open');
                $('.cbp-hsmenubg').height("auto");
                alert('yes')
            }*/
            $(".menu_top_right .dropdown").hover(function(){
                $(".menu_top_right .dropdown .dropdown-content").attr("data-open", "open");
                $(".menu_top_right .dropdown .dropdown-content").addClass("animated fadeIn");
            }, function(){

                $(".menu_top_right .dropdown .dropdown-content").attr("data-open", "");
                $(".menu_top_right .dropdown .dropdown-content").removeClass("animated fadeIn");
            });
        }else{
            $('#playmen').addClass('playmenu');
            $("li.link_ex.menu_max").hover(function(){

                $(this).attr("data-open", "open");
                $(this).addClass("link_ex cbp-hsitem-open animated fadeIn");
            }, function(){

                $(this).attr("data-open", "");
                $(this).removeClass("cbp-hsitem-open animated fadeIn");
            });
        };
    };
    hover_m();
    $(window).resize(hover_m);
    $(window).resize(h_mm);

    var b = $(".boton_menu");
    var w = $(".menu_colap");
    var z = $("#cerrar_menucolapse");
    b.click(function() {

      if(w.hasClass('open')) {
        w.removeClass('open animated fadeIn');
      } else {
        w.addClass('open animated fadeIn');
      }

    });
    z.click(function() {

      if(w.hasClass('open')) {
        w.removeClass('open animated fadeIn');
      } else {
        w.addClass('open animated fadeIn');
      }

    });

    $('cbp-hssubmenu.link_ex.menu-vertical').parent().css('background','#ffffff');
});

$(document).ready(function(){
   $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
    });
    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
})
