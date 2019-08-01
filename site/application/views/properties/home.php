<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    
    <!-- GALERIA DE CATEGORIAS -->
    <section class="categoriesCards" style="margin: 4em 0;">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-left">
                <h2 style="margin-bottom:1em"> Propriedades Encontradas </h2>   
                </div>
            </div>
        </div>
        <div class="row">
            <aside class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-filter"></i> Filtros</h3>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <form action="#">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Bairro</label>
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">Bairro 1</option>
                                                <option value="Bairro 2">Bairro 2</option>
                                                <option value="Bairro 3">Bairro 5</option>
                                                <option value="Bairro 4">Bairro 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tipo do Imóvel</label>
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">Casa</option>
                                                <option value="Category 2">Apartamento</option>
                                                <option value="Category 3">Conj. Residencial</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Imovel para: </label>
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">Aluguel</option>
                                                <option value="Category 2">Venda</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-bottom: 1em;">
                                            <button type="submit" class="btn btn-block btn-primary"> <i class="fa fa-filter"></i> Filtrar</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-block btn-inverse">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            <style type="text/css">
                a .card-body p,  a .card-body span {
                    color: #67757c;
                }
                a .card-body ul li  {
                    color: #67757c;
                }
            </style>
            <div class="col-10 m-t-30">
                <div class="card-columns">
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <span>R$ 200.000,00<span></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/7.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/8.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url() ?>propertiesdetails/">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/9.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                                <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                                <hr>
                                <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                    <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                                </ul>
                                <hr>
                                <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </section>
    <!-- GALERIA DE CATEGORIAS -->

    <!-- GALERIA DE CATEGORIAS -->
    <section class="categoriesCards" style="margin: 4em 0;">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-left">
                <h2 style="margin-bottom:1em"> Propriedades Semelhantes </h2>   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-t-30">
                <div class="card-columns" style="column-count:4;">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                            <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                            <hr>
                            <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                            </ul>
                            <hr>
                            <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                            <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                            <hr>
                            <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                            </ul>
                            <hr>
                            <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                            <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                            <hr>
                            <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                            </ul>
                            <hr>
                            <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/images/aptos/4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Casa Teresina para <strong>Venda</strong></h4>
                            <p class="card-text"><i class="fa fa-home"></i> Aldebaran Ville</p>
                            <hr>
                            <ul class="list-style-none" style="width: 100%;display: inline-flex;">
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center" ><i class="fa fa-bed"></i><br>Quartos<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-bed"></i><br>Suítes<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-car"></i><br>Vagas<br>1 </li>
                                <li class="small-item" style="width: 25%; float:left; list-style:none; margin: 0 10px; text-align:center"><i class="fa fa-arrows-alt"></i><br>Área<br>90m² </li>
                            </ul>
                            <hr>
                            <p class="card-text"><h2 class="label label-danger">Venda</h2> <strong>R$ 200.000,00</strong></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </section>
    <!-- GALERIA DE CATEGORIAS -->
    
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->