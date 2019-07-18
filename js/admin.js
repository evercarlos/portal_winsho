jQuery(document).ready(function () {
    $(".btn_menu").click(function () {
        var id_string = $(this).attr('id');
        var code = id_string.split('_');
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
        $("#load_module").load("web/partils/" + code[1] + ".php");
    });
});
