<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/logo.png">
    <title>Seu Canto - Imóveis</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet">


    <!-- Footable CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
</head>

<body class="fix-header fix-sidebar card-no-border">
    
    <!-- Preloader - style you can find in spinners.css -->
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <div class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light"> 
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url() ?>assets/images/logo_dois.png" alt="homepage" class="dark-logo" style="width:10em;"/>
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url() ?>assets/images/logo_dois.png" alt="homepage" class="light-logo" style="width:10em;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url() ?>assets/images/logo_dois.png" alt="homepage" class="dark-logo" style="width:10em;" />
                         <!-- Light Logo text -->    
                         <!-- <img src="<?php echo base_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                        </span> 
                    </a> 
                </div>
                <!-- End Logo -->
                
                <div class="navbar-collapse navbar-right right">  
                    <!-- toggle and nav items -->
                    
                    <ul class="navbar-nav ml-auto mt-md-0 d-flex align-items-center">
                        <li class="nav-item mr-2"><a class="btn btn-outline-light" href=""><i class="fa fa-home"></i> A Seu Canto</a></li>
                        <li class="nav-item mr-2"><a class="btn btn-outline-light" href=""><i class="fa fa-bullhorn"></i> Anuncie</a></li>
                        <li class="nav-item mr-2"><a class="btn btn-outline-light" href=""><i class="fa fa-rocket"></i> Indique</a></li>
                        <li class="nav-item mr-2"><a class="btn  btn-outline-light" href=""><i class="fa fa-lock"></i> Entrar ou Registrar</a></li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                    </ul>
                </div>
            </nav>
        </div>
        
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- <header class="home">
            <div class="container-fluid vcenter">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                    </div>
                </div>
            </div> -->
            <!-- <div class="overlay" style="background: rgba(0,0,0,0.4);"></div> -->
        <!-- </header> -->
        <style type="text/css">
           
           .topbar {
               background:#F58023;
           }
           header.home {
               background: url('assets/images/maps.jpg') center center no-repeat;
               background-size: cover;
               max-height: 350px;
               position: relative;
               color: #fff;
           }

           header.home .container-fluid {
               height: 350px;
               position: relative;
               z-index: 20;
           }
           .vcenter {
               display: flex;
               align-items: center;
               justify-content: center;
           }
           .container-fluid {
               padding-right: 15px;
               padding-left: 15px;
               margin-right: auto;
               margin-left: auto;
           }
           header.home {
               color: #fff;
           }
           header.home h1 {
               font-size: 55px;
               font-weight: 500;
               color: #fff;
           }
           header.home h2 {
               font-size: 22px;
               font-weight: 300;
               margin-bottom: 40px;
               color: #fff;
           }
           
           header.home .overlay {
               width: 100%;
               height: 100%;
               top: 0;
               left: 0;
               background: rgba(0,0,0,.3);
               position: absolute;
               z-index: 19;
               object-fit: cover;
               object-position: center center;
           }
           footer {
               padding: 50px 0;
               background-color: #F58023;
               color: #fff;
           }
           footer.copyright {
               padding: 0;
               color: #fff;
               background-color: #c25e00;
               line-height: 60px;
           }
           .btn-group-vertical > .btn-group::after, .btn-group-vertical > .btn-group::before, .btn-toolbar::after, 
           .btn-toolbar::before, .clearfix::after, .clearfix::before, .container-fluid::after, .container-fluid::before, 
           .container::after, .container::before, .dl-horizontal dd::after, .dl-horizontal dd::before, .form-horizontal 
           .form-group::after, .form-horizontal .form-group::before, .modal-footer::after, .modal-footer::before, 
           .modal-header::after, .modal-header::before, .nav::after, .nav::before, .navbar-collapse::after, 
           .navbar-collapse::before, .navbar-header::after, .navbar-header::before, .navbar::after, .navbar::before, 
           .pager::after, .pager::before, .panel-body::after, .panel-body::before, .row::after, .row::before {
               display: table;
               content: " ";
           }
       </style>
        <!-- End Topbar header -->
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
        <!-- ==========================Dynamicaly Show Main Page Content============================ -->
            <?php echo $main_content; ?>
        <!-- ==========================Dynamicaly Show Main Page Content============================ -->
        </div>
        <!-- footer -->            
        <footer class="container-fluid" style="padding: 4em 0 3em 0; color: #fff">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 visible-lg visible-md">
                                <h4 style="color:#fff;">Menu</h4>
                                <ul class="site-map list-unstyled">
                                    <li><a style="color:#fff;" target="_top" href="#"><i class="fa fa-home"></i> A Seu Canto</a></li>
                                    <li><a style="color:#fff;" target="_blank" href="#"><i class="fa fa-bullhorn"></i> Anuncie</a></li>
                                    <li><a style="color:#fff;" target="_top" href="buscar"><i class="fa fa-rocket"></i> Indique</a></li>
                                    <li><a style="color:#fff;" target="_top" href="favoritos"><i class="fa fa-lock"></i> Entrar ou Registrar</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 visible-lg visible-md">
                                <h4 style="color:#fff;">Como funciona</h4>
                                <ul class="site-map list-unstyled">
                                    <li><a style="color:#fff;" target="_top" href="#"> Busque seu Imóvel </a></li>
                                    <li><a style="color:#fff;" target="_top" href="#"> Indique um Imóvel </a></li>
                                    <li><a style="color:#fff;" target="_top" href="#"> Marque uma Visita </a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4 style="color:#fff;">Redes Sociais</h4>
                                <ul class="social list-inline">
                                    <li><a style="color:#fff;" target="_top" href="" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                                    <li><a style="color:#fff;" target="_top" href="" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
                                    <li><a style="color:#fff;" target="_top" href="" rel="nofollow"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 visible-lg visible-md">
                                <h4 style="color:#fff;">Contatos</h4>
                                <ul class="site-map list-unstyled">
                                    <li><a style="color:#fff;" target="_top" href="#"><i class="fa fa-phone"></i> (86) 99999-9999</a></li>
                                    <li><a style="color:#fff;" target="_blank" href="#"><i class="fa fa-phone"></i> (86) 9999-9999</a></li>
                                    <li><a style="color:#fff;" target="_top" href="buscar"><i class="fa fa-map-marker"></i> Rua Álvaro Mendes, 1947</a></li>
                                    <li><a style="color:#fff;" target="_top" href="buscar"><i class="fa fa-home"></i> Teresina, Piauí</a></li>
                                    <li><a style="color:#fff;" target="_top" href="favoritos"><i class="fa fa-envelope"></i> Email@email.com.br</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->
        <footer class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p style="font-size:14px;"><?php echo "© Seu Canto " . date("Y") . ". Todos os direitos Reservados.";?> </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->    
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    
    <!-- This page plugins -->
    
   
    <!-- google maps api -->
    <!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&amp;sensor=true"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/jquery.gmaps.js"></script> -->

    <!-- Vector map JavaScript -->
    <!-- <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jvectormap.custom.js"></script> -->

    <!--Morris JavaScript -->
    <!-- <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/morris-data.js"></script> -->

    <!-- Start Forms js -->
    <script src="<?php echo base_url() ?>assets/js/validation.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>
    <!-- <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script> -->

    <!-- Style switcher -->    
    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>