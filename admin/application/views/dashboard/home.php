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
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resumees as $resumee): ?>
                                    <tr>
                                        <td><?php echo $resumee['name']; ?></td>
                                        <td><?php echo $resumee['age']; ?></td>
                                        <td><?php echo $resumee['qualification_name']; ?></td>
                                        <td><?php echo $resumee['email']; ?></td>
                                        <td><?php echo $resumee['phone']; ?></td>
                                        <td><?php echo ($resumee['status'] == 0 ? "<div class='label label-table label-success'>Lido</div>"  : "<div class='label label-table label-danger'>Novo</div>") ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?php echo site_url().'dashboard/ver/' . $resumee['id']; ?>" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-eye text-primary m-r-10"></i> </a>
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