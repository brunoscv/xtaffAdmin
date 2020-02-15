<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Ver Curriculos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- Start Page Content -->

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
                <div class="card-header">
                    <a href="<?php echo base_url('dashboard/') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> Listar Curriculos </a>    
                </div>
                <div class="card-body">
                    <?php foreach ($resumees as $resumee): ?>
                    <div class="row-fluid">
                        <div class="span12">
                            <header id="informacoes-curriculo" class="clearfix">
                                <div class="bg"></div>
                                <div class="pull-left">
                                    <div class="wrap-texto pull-left">
                                        <p class="title"><?php echo strtoupper($resumee['name']); ?></p>
                                    </div>
                                </div>
                                <div class="wrap-corretor-responsavel">
                                    <div class="text text-right">
                                        <p><?php echo ( $resumee['phone'] ) ? $resumee['phone'] :  ' -- ';?></p>
                                        <p><?php echo ( $resumee['age'] ) ? $resumee['age'] :  ' -- ';?></p>
                                        <p><?php echo ( $resumee['email'] ) ? $resumee['email'] :  ' -- ';?></p>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                    <div id="vida-cliente-ficha">
                        <div class="bloco">
                            <i class="fa fa-user" style="width: 55px;height: 55px;line-height: 55px;position: absolute;top: 15%;left: 0; text-align:center; font-size: 30px;color: #4eb39c;"></i>
                            <div class="item clearfix">
                                <div>
                                    <p class="strong-title">NOME</p>
                                    <p><?php echo strtoupper($resumee['name']); ?></p>
                                </div>
                                <div>
                                    <p class="strong-title">TELEFONE</p>
                                    <p><?php echo ( $resumee['phone'] ) ? $resumee['phone'] :  ' -- ';?></p>
                                </div>
                                <div>
                                    <p class="strong-title">E-MAIL</p>
                                    <p><?php echo ( $resumee['email'] ) ? $resumee['email'] :  ' -- ';?></p>
                                </div>
                                <div>
                                    <p class="strong-title">IDADE</p>
                                    <p><?php echo ( $resumee['age'] ) ? $resumee['age'] :  ' -- ';?></p>
                                </div>
                                <div>
                                    <p class="strong-title">FORMAÇÃO</p>
                                    <p><?php echo ( $resumee['qualification'] ) ? $resumee['qualification'] :  ' -- ';?></p>
                                </div>
                                <div>
                                    <p class="strong-title">FACEBOOK</p>
                                    <p><?php echo ( $resumee['facebook'] ) ? $resumee['facebook'] :  ' -- ';?></p>
                                </div>
                                <div>
                                    <p class="strong-title">TWITTER</p>
                                    <p><?php echo ( $resumee['twitter'] ) ? $resumee['twitter'] :  ' -- ';?></p>
                                </div>
                                <div>
                                    <p class="strong-title">INSTAGRAM</p>
                                    <p><?php echo ( $resumee['instagram'] ) ? $resumee['instagram'] :  ' -- ';?></p>
                                </div>
                            </div>
                        </div>
                        <div class="bloco">
                            <i class="fa fa-map-marker" style="width: 55px;height: 55px;line-height: 55px;position: absolute;top: 15%;left: 0; text-align:center; font-size: 30px;color: #4eb39c;"></i>
                            <div class="item clearfix">
                                <div>
                                    <p class="strong-title">DIREÇÃO DE ARTE</p>
                                    <p><?php echo ( $resumee['art_direction'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">EDITORIAL</p>
                                    <p><?php echo ( $resumee['editorial'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">ATENDIMENTO</p>
                                    <p><?php echo ( $resumee['attendance'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">VENDA INGRESSOS</p>
                                    <p><?php echo ( $resumee['ticket_office'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">RECEPÇÃO</p>
                                    <p><?php echo ( $resumee['recepcionist'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">CAIXA</p>
                                    <p><?php echo ( $resumee['cashier'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">CAIXA VOLANTE</p>
                                    <p><?php echo ( $resumee['rounder_cashier'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                                <div>
                                    <p class="strong-title">ATENDIMENTO BAR</p>
                                    <p><?php echo ( $resumee['attendance_bar'] == 1 ) ? "<div class='label label-table label-success'>Sim</div>"  : "<div class='label label-table label-danger'>Não</div>";?></p>
                                </div>
                            </div>
                        </div>
                        <div class="bloco">
                        <i class="fa fa-book" style="width: 55px;height: 55px;line-height: 55px;position: absolute;top: 15%;left: 0; text-align:center; font-size: 30px;color: #4eb39c;"></i>
                            <div class="item clearfix">
                                <div class="row-fluid" style="float: none;">
                                    <div class="span3">
                                        <p class="strong-title">HOBBIES</p>
                                        <p><?php echo ( $resumee['hobby'] ) ? $resumee['hobby'] :  ' -- ';?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item clearfix">
                                <div class="row-fluid" style="float: none;">
                                    <div class="span3">
                                        <p class="strong-title">GOSTO MUSICAL</p>
                                        <p><?php echo ( $resumee['music_style'] ) ? $resumee['music_style'] :  ' -- ';?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item clearfix">
                                <div class="row-fluid" style="float: none;">
                                    <div class="span3">
                                        <p class="strong-title">OBSERVAÇÕES</p>
                                        <p><?php echo ( $resumee['notes'] ) ? $resumee['notes'] :  ' -- ';?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
</div>

<style type="text/css">
#informacoes-curriculo {
    position: relative;
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    margin-top: 20px;
}

#informacoes-curriculo .bg {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: -webkit-gradient(linear,left top,left bottom,from(rgba(53,168,142,.8)),to(rgba(78,179,156,.9)));
    background: -webkit-linear-gradient(top,rgba(53,168,142,.8),rgba(78,179,156,.9));
    background: -moz-linear-gradient(top,rgba(53,168,142,.8),rgba(78,179,156,.9));
    background: -ms-linear-gradient(top,rgba(53,168,142,.8),rgba(78,179,156,.9));
    background: -o-linear-gradient(top,rgba(53,168,142,.8),rgba(78,179,156,.9));
    z-index: 0;
}
.pull-left {
    float: left;
}

#informacoes-curriculo .wrap-texto {
    position: relative;
    padding: 30px 25px;
    overflow: hidden;
}
#informacoes-curriculo .wrap-texto p.title {
    font-weight: 500;
    font-size: 18px;
    color: #FFF;
    line-height: 21px;
    margin-bottom: 10px;
}

#informacoes-curriculo .wrap-corretor-responsavel {
    max-width: 300px;
    display: table;
    float: right;
    position: relative;
    z-index: 15;
    margin: 15px 25px;
}

#informacoes-curriculo .wrap-corretor-responsavel .text {
    display: table-cell;
    vertical-align: middle;
    margin-top: 16px;
}

#informacoes-curriculo .wrap-corretor-responsavel .text p {
    font-size: 14px;
    font-weight: 300;
    color: #FFF;
    margin-bottom: 0;
}

.bloco {
    position: relative;
    padding-left: 55px;
    margin-top: 10px;
}

.bloco .item {
    padding: 10px 0 20px;
    border-bottom: 1px dashed #DEDEDE;
}

.bloco .item>div {
    float: left;
    margin-left: 20px;
}
.bloco .item>div p:first-child {
    color: #33434B;
}

.block-icon {
    
}
.strong-title {
    font-weight: bold;
}

.card-body {
    font-size: 0.8em;
}
</style>