<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- Start Page Content -->
    
    <a href="<?php echo base_url('user/all_user_list') ?>">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="fa fa-users fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->total; ?></h3>
                        <h5 class="text-muted m-b-0">Total User</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-success">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->active_user; ?></h3>
                        <h5 class="text-muted m-b-0">Active User</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-danger">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-times fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->inactive_user; ?></h3>
                        <h5 class="text-muted m-b-0">Inactive User</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-primary">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->admin; ?></h3>
                        <h5 class="text-muted m-b-0">Total Admin</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    </a>

    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <div class="card">
                <div class="card-body">
                    <a href="<?php echo base_url('dashboard/criar') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Novo Currículo</a>    
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Grau Escol.</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resumees as $resumee): ?>
                                    <tr>
                                        <td><?php echo $resumee['nome']; ?></td>
                                        <td><?php echo $resumee['idade']; ?></td>
                                        <td><?php echo $resumee['grau_instrucao']; ?></td>
                                        <td><?php echo $resumee['email']; ?></td>
                                        <td><?php echo $resumee['telefone']; ?></td>
                                        <td><?php echo ($resumee['status'] == 0 ? "<div class='label label-table label-danger'>Inativo</div>"  : "<div class='label label-table label-success'>Ativo</div>") ?></td>
                                        <td class="text-nowrap">
                                                <a href="<?php echo base_url('admin/user/update/'.$resumee['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                                <a id="delete" data-toggle="modal" data-target="#confirm_delete_<?php echo $resumee['id'];?>" href="#"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
</div>
<?php foreach ($resumees as $resumee): ?>
    <div class="modal fade" id="confirm_delete_<?php echo $resumee['id'];?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-body">
                        Are you sure want to delete? <br> <hr>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a href="<?php echo base_url('admin/user/delete/'.$resumee['id']) ?>" class="btn btn-danger"> Delete</a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->