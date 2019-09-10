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
    <!-- chartist CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/chartist-plugin-tooltip-master/dist/
    chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- toast CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!--Form css plugins -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" rel="stylesheet" />
    <!--Form css plugins end -->

    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- summernotes CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="<?php echo base_url() ?>assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Cropper CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/cropper/cropper.min.css" rel="stylesheet">

    <!-- Footable CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Date picker plugins css -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
        <header class="home">
            <div class="container-fluid vcenter">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                    </div>
                </div>
            </div>
            <!-- <div class="overlay" style="background: rgba(0,0,0,0.4);"></div> -->
        </header>
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
    
    <!-- chartist chart -->
    <script src="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/echarts/echarts-all.js"></script>
    
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
    <script src='<?php echo base_url() ?>assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url() ?>assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/calendar/dist/cal-init.js"></script>
    
    <!-- sparkline chart -->
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard4.js"></script>

    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    
    <!-- toast notification CSS -->
    <script src="<?php echo base_url() ?>assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url() ?>assets/js/toastr.js"></script>

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&amp;sensor=true"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/jquery.gmaps.js"></script>

    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jvectormap.custom.js"></script>

    <!--Morris JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/morris-data.js"></script>
    
    <!-- Chart JS -->
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/chartjs.init.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Invoice print JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
    <!-- Start Table js -->
    
    <!-- This is data table js -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

    <!-- Editable datatable-->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
    </script>
    <!-- End Table js -->

    <!-- Start Forms js -->
    <script src="<?php echo base_url() ?>assets/js/validation.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>
    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script>

    <script src="<?php echo base_url() ?>assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script>
    jQuery(document).ready(function() {

        //summernone text editor
        jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
            });

        });

        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
    <!-- End form js -->

    <!-- auto hide message div-->
    <script type="text/javascript">
        $( document ).ready(function(){
           $('.delete_msg').delay(3000).slideUp();
        });
    </script>

    <!-- Style switcher -->    
    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>