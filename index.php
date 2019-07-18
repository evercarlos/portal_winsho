<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>El WINSHO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property=""/>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css'/>
    <link href="css/appab5d.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
</head>
<body>
<header class="cabecera_principal animated">
    <div class="contenedor_header">
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
            <div class="cbp-hsinner">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" style="width: 35%" alt="">
                    </a>
                </div>
                <ul class="cbp-hsmenu menu_colap" id="playmen">
                    <li class="visible_tablet"><a href="#" id="cerrar_menucolapse"><i class="fas fa-times"
                                                                                      aria-hidden="true"></i></a></li>
                    <li><a href="./" id="btn_start">Inicio</a></li>
                    <li><a href="javascript:void(0)" class="btn_menu" id="btn_us">Nosotros</a></li>
                    <li><a href="javascript:void(0)" class="btn_menu" id="btn_customer">Clientes</a></li>
                    <li><a href="javascript:void(0)" class="btn_menu" id="btn_notice">Proyectos</a></li>
                    <li><a href="javascript:void(0)" class="btn_menu" id="btn_notice">Servicios</a></li>
                    <li><a href="javascript:void(0)" class="btn_menu" id="btn_notice">Noticias</a></li>
                    <li><a href="javascript:void(0)" class="btn_menu" id="btn_contact">Contáctanos</a></li>
                </ul>
            </div>
        </nav>
        <a href="javascript:;" class="boton_menu">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
    </div>
</header>

<!--//header-->
<!--/banner-->
<div id="load_module">
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item item3 active">
                    <div class="carousel-caption" style="width: 20px">
                        <h3>Banner</h3>

                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="carousel-caption" style="width: 20px">
                        <h3>Banner</h3>

                        <!-- <div class="bnr-button">
                             <button type="button" class="btn btn-primary play" data-toggle="modal"
                                     data-target="#exampleModal">
                                 <i class="fas fa-play"></i>
                             </button>
                         </div>-->

                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption" style="width: 20px">
                        <h3>Banner</h3>
                    </div>
                </div>
                <div class="carousel-item item4">
                    <div class="carousel-caption" style="width: 20px">
                        <h3>Banner</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--/model-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body video">
                    <iframe src="https://player.vimeo.com/video/13618190" width="640" height="360" frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--//model-->
    <!--//banner-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">NUESTROS SERVICIOS</h3>
            <div class="row inner-sec-wthree">
                <div class="col-lg-12 bt-bottom-info" data-aos="fade-right">
                    <div class="row">
                        <section class="noticia" data-aos="fade-up" data-aos-duration="1300">
                            <div class="container">
                                <div class="row">
                                    <!-- Consulta de Atenciones -->
                                    <div class="col-lg-4 col-md-6 text-center border rounded py-4">
                                        <a href="javascript:void(0)" id="b_customer" target="_blank"
                                           class="fa fa-4x fa-user btn_menu"></a>
                                        <h3>Ejecuciones Programadas</h3>
                                        <p class="text-muted">Via correo electronico o
                                            celular.</p>
                                    </div>

                                    <!-- YOU TUBE -->
                                    <div class="col-lg-4 col-md-6 text-center border rounded py-4">
                                        <a href="javascript:void(0)" id="b_customer"
                                           class="fa fa-4x fa-file-archive"></a>
                                        <!-- <p class="fa fa-4x fa-phone-square wow bounceIn text-primary"></p> -->
                                        <h3>Proyectos</h3>
                                        <p class="text-muted">Proyectos generales</p>
                                    </div>
                                    <!-- Consulta de Pagos -->
                                    <div class="col-lg-4 col-md-6 text-center border rounded py-4">
                                        <a href="javascript:void(0)" id="btn_fise" class="fa fa-4x fa-cogs"></a>
                                        <h3>Configuraciones</h3>
                                        <p class="text-muted">Cconfiguración total</p>
                                    </div>
                                    <!-- End consulta de Pagos -->
                                </div>
                                <div class="row">
                                    <div class="row inner-sec-wthree">
                                        <div class="col-lg-4 grid_info_main" data-aos="flip-left">
                                            <div class="grid_info">
                                                <div class="icon_info">
                            <span class="icon">
								<i class="fas fa-laptop"></i>
							</span>
                                                    <h5>Basic & Industrial Chemicals</h5>
                                                    <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien
                                                        amet.</p>
                                                </div>
                                            </div>
                                            <div class="grid_info second">
                                                <div class="icon_info">
                            <span class="icon">
								<i class="far fa-clone"></i>
							</span>
                                                    <h5>Construction & Engineering</h5>
                                                    <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien
                                                        amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 grid_info_main mid" data-aos="flip-down">
                                            <img src="images/ab.jpg" class="img-fluid" alt=" ">
                                        </div>
                                        <div class="col-lg-4 grid_info_main" data-aos="flip-right">
                                            <div class="grid_info">
                                                <div class="icon_info">
                            <span class="icon">
								<i class="fas fa-sitemap"></i>
							</span>
                                                    <h5>Passion</h5>
                                                    <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien
                                                        amet.</p>
                                                </div>
                                            </div>
                                            <div class="grid_info second">
                                                <div class="icon_info">
                            <span class="icon">
								<i class="fab fa-android"></i>
							</span>
                                                    <h5>Basic & Industrial Chemicals</h5>
                                                    <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien
                                                        amet.</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//services-->
    <!---728x90--->
    <section class="grids_sec_2">
        <div class="row style-grids_main">
            <div class="col-md-6 style-image-2">
            </div>
            <div class="col-md-6 grid_sec_info">
                <div class="style-grid-2-text_info" data-aos="fade-left">
                    <h3>
                        Turning big ideas into great products.</h3>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia
                        non
                        numquam eius modi tempora incidunt ut labore .Lorem ipsum dolor sit amet,vehicula vel sapien
                        et</p>
                    <div class="bnr-button">
                        <button type="button" class="btn btn-primary play hide" data-toggle="modal"
                                data-target="#exampleModal">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!---->
    <section class="grids_sec_2">
        <div class="row style-grids_main">
            <div class="col-md-6 style-image-2 second">
            </div>
            <div class="col-md-6 grid_sec_info">
                <div class="style-grid-2-text_info" data-aos="fade-right">
                    <h3>
                        Turning big ideas into great products.</h3>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia
                        non
                        numquam eius modi tempora incidunt ut labore .Lorem ipsum dolor sit amet,vehicula vel sapien
                        et</p>
                    <div class="bnr-button">
                        <button type="button" class="btn btn-primary play hide" data-toggle="modal"
                                data-target="#exampleModal">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--/Projects-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Nuestros Proyectos
            </h3>
            <div class="row inner-sec-wthree">

                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g1.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g2.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g3.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g4.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g5.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g6.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g7.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g7.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g8.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g8.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g9.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g9.jpg" alt=" " class="img-fluid"/>
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--//Projects-->
    <!--reviews_sec-->
    <section class="" id="">
        <div id="google-map-area">
            <div class="text-center">
                <h3 class="tittle">Nuestros Aliados</h3>
                <!--<h3>Nuestros Aliados</h3>-->
                <span class="round-border p-color-bg"></span>
            </div>
            <br>
            <div class=""><!-- container-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover ">

                        <tr class="active">
                            <th class="text-center">GORESAM</th>
                            <th class="text-center">GORESAM</th>
                            <th class="text-center">GORESAM</th>
                            <th class="text-center">GORESAM</th>
                            <th class="text-center">GORESAM</th>
                        </tr>
                        <tr>
                            <th class="text-center"><a href="http://www.minem.gob.pe/" class="tran3s"
                                                       target="_blank"><img
                                            src="images/minem.png"
                                            style="width: 230px;max-width: 230px; height: 95px"
                                            alt="Theme logo"></th>
                            <th class="text-center"><a href="http://www.minem.gob.pe/" class="tran3s"
                                                       target="_blank"><img
                                            src="images/minem.png"
                                            style="width: 230px;max-width: 230px; height: 95px"
                                            alt="Theme logo"></th>
                            <th class="text-center"><a href="http://www.minem.gob.pe/" class="tran3s"
                                                       target="_blank"><img
                                            src="images/minem.png"
                                            style="width: 230px;max-width: 230px; height: 95px"
                                            alt="Theme logo"></th>
                            <th class="text-center"><a href="http://www.minem.gob.pe/" class="tran3s"
                                                       target="_blank"><img
                                            src="images/minem.png"
                                            style="width: 230px;max-width: 230px; height: 95px"
                                            alt="Theme logo"></th>
                            <th class="text-center"><a href="http://www.minem.gob.pe/" class="tran3s"
                                                       target="_blank"><img
                                            src="images/minem.png"
                                            style="width: 230px;max-width: 230px; height: 95px"
                                            alt="Theme logo"></th>

                        </tr>
                    </table>

                </div>

            </div>
        </div>
    </section>
</div>
<!---->
<!--footer-->
<footer>
    <div class="container">
        <div class="row footer-top-w3layouts">
            <div class="col-lg-3 footer-grid-w3ls" data-aos="">
                <div class="footer-title">
                    <h2>Nosotros</h2>
                </div>
                <div class="footer-text">
                    <p>Somos una empresa dedicados a la venta de productos de primera necesidad.</p>

                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls" data-aos="">
                <div class="footer-title">
                    <h3>Contactenos</h3>
                </div>
                <div class="footer-office-hour">
                    <ul>
                        <li class="hd">Dirección :</li>
                        <li>Jr. Circunvalación Cumbaza 123</li>

                    </ul>
                    <ul>
                        <li class="hd">Celular: 917923421</li>
                        <li class="hd">Email:
                            <a href="mailto:info@example.com">info@example.com</a>
                        </li>
                        <li class="hd">Fax: 657890</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls" data-aos="">
                <div class="footer-title">
                    <h3>trabajos recientes</h3>
                </div>
                <div class="footer-list">
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g1.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g2.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
                            <img src="images/g3.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g4.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g9.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g5.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g6.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g7.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="javascript:void(0)">
                            <img src="images/g8.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls" data-aos="">
                <div class="footer-title">
                    <h3>Escribenos</h3>
                </div>
                <p>Envianos su consulta .</p>
                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email..." required="">
                    <button class="btn1">
                        <i class="far fa-envelope"></i>
                    </button>
                </form>
                <div class="clearfix"></div>
            </div>

        </div>

    </div>
</footer>
<!---->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- simpleLightbox -->
<script src="js/simpleLightbox.js"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();

</script>
<!-- //simpleLightbox -->
<!-- /js files -->
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all"/>
<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all"/>
<script src='js/aos.js'></script>
<script src="js/aosindex.js"></script>
<!-- //js files -->
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>

<!-- //flexSlider -->

<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();

</script>
<!-- //stats -->

<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<!-- /js -->
<script src="js/bootstrap.js"></script>
<script src="js/modernizr.custom.js"></script><!-- MENU-->
<script src="js/cbpHorizontalSlideOutMenu.min.js"></script><!-- MENU-->
<script src="js/admin.js"></script><!-- MENU-->

<script src="js/global6197.js"></script><!-- MENU-->

<!-- //js -->
</body>
</html>
