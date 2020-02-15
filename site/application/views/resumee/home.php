<div class="container-fluid">
    <section class="categoriesCards" style="margin: 0;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h1 style="font-family: 'Roboto Slab', serif; color:#404040; font-weight:700"> Preencha seus dados </h1>      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Content Error -->
                    <div class="form_error">
                        <?php $msg_error = $this->session->flashdata('msg_error'); ?>
                        <?php if (isset($msg_error)): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><i class="fa fa-ban"></i> Atenção!</strong> <?php echo $msg_error; ?>
                        </div>
                        <?php endif; ?>

                        <?php $msg_success = $this->session->flashdata('msg_success'); ?>
                        <?php if (isset($msg_success)): ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><i class="fa fa-check"></i> </strong> <?php echo $msg_success; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- Content Error -->
                    <div class="formulario">
                        <form id="form_resumee" action="<?php echo base_url('resumee/criar'); ?>" role="form" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('name', @$resumee['name']); ?>" name="name" class="form-control" placeholder="Nome">
                                        <small><?php echo form_error('name'); ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('age', @$resumee['age']); ?>" name="age" class="form-control" placeholder="Idade">
                                        <small><?php echo form_error('age'); ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <select name="qualification" class="form-control" id="qualification" aria-invalid="false">
                                            <option value="1">Ensino Fundamental</option>
                                            <option value="2">Ensino Médio Incompleto</option>
                                            <option value="3">Ensino Médio Completo</option>
                                            <option value="4">Ensino Superior Incompleto</option>
                                            <option value="5">Ensino Superior Completo</option>
                                        </select>
                                        <small><?php echo form_error('qualification'); ?></small>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('email', @$resumee['email']); ?>" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" placeholder="E-mail"><br>
                                        <small><?php echo form_error('email'); ?></small>
                                    </div>
                                </div>        			
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('phone', @$resumee['phone']); ?>" class="form-control" name="phone" placeholder="Telefone"><br> 
                                        <small><?php echo form_error('phone'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('instagram', @$resumee['instagram']); ?>" class="form-control" name="instagram" placeholder="Instagram"><br> 
                                        <small><?php echo form_error('instagram'); ?></small>
                                    </div>
                                </div>        			
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('twitter', @$resumee['twitter']); ?>" class="form-control" name="twitter" placeholder="Twitter"><br> 
                                        <small><?php echo form_error('twitter'); ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" value="<?php echo set_value('facebook', @$resumee['facebook']); ?>" class="form-control" name="facebook" placeholder="Facebook"><br> 
                                        <small><?php echo form_error('facebook'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="hobby" placeholder="Hobbies"><?php echo set_value('hobby', @$resumee['hobby']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="music_style" placeholder="Estilos de música preferidos"><?php echo set_value('music_style', @$resumee['music_style']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h5 class=""> Áreas de Interesse: </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="art_direction" type="checkbox" name="art_direction">
                                            <label for="art_direction">Direção de Arte</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="editorial" type="checkbox" name="editorial">
                                            <label for="editorial">Editorial</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="attendance" type="checkbox" name="attendance">
                                            <label for="attendance">Atendimento</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                        <input id="recepcionist" type="checkbox" name="recepcionist">
                                            <label for="recepcionist">Recepcionista</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                        <input id="ticket_office" type="checkbox" name="ticket_office">
                                            <label for="ticket_office">Venda de Ingressos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                        <input id="cashier" type="checkbox" name="cashier">
                                            <label for="cashier">Caixa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                        <input id="rounder_cashier" type="checkbox" name="rounder_cashier">
                                            <label for="rounder_cashier">Caixa Volante</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                        <input id="attendance_bar" type="checkbox" name="attendance_bar">
                                            <label for="attendance_bar">Atendente de Bar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="notes" placeholder="Observações"><?php echo set_value('notes', @$resumee['notes']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-actions">
                                        <button name="enviar" value="enviar" type="submit" class="btn" style="background-color:#35A88E; color: #fff ; margin: 0 auto; font-family: 'Lato', sans-serif; font-weight:700; line-height:1.6em; text-transform:uppercase"> <i class="fa fa-check"></i> Enviar</button>
                                        <button type="button" class="btn" style="background-color:#2F3D4A; color: #fff ; margin: 0 auto; font-family: 'Lato', sans-serif; font-weight:700; line-height:1.6em; text-transform:uppercase"> <i class="fa fa-check"></i> Cancelar</button>
                                    </div> 
                                </div>
                                                    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categoriesCards" style="margin: 4em 0;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h1 style="font-family: 'Roboto Slab', serif; color:#404040; font-weight:700"> Contato </h1>      
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-img pb-3 pt-3 text-center">
                            <i class="fa fa-map-marker fa-4x" style="color: #35A88E"></i>
                        </div>
                        <div class="card-body">
                            <h3 style="font-family: 'Roboto Slab', serif; color:#404040; font-weight:700; text-align: center">Localização</h3>
                            <p class="m-b-0 m-t-10" style="font-family: 'Lato', sans-serif; text-align: center"> Após sua ceia de Natal. Depois do Divino, vem o Sacrilégio.</p>
                            <div class="row text-center">
                                <a class="btn mt-4 text-center" href="#" style="background-color:#35A88E; color: #fff ; margin: 0 auto; font-family: 'Lato', sans-serif; font-weight:700; line-height:1.6em; text-transform:uppercase">Ver Informações</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-img pb-3 pt-3 text-center">
                            <i class="fa fa-envelope fa-4x" style="color: #35A88E"></i>
                        </div>
                        <div class="card-body">
                            <h3 style="font-family: 'Roboto Slab', serif; color:#404040; font-weight:700; text-align: center">Email</h3>
                            <p class="m-b-0 m-t-10" style="font-family: 'Lato', sans-serif; text-align: center">Metal / Rock Autoral, Solidariedade e Entretenimento. </p>
                            <div class="row text-center">
                                <a class="btn mt-4 text-center" href="#" style="background-color:#35A88E; color: #fff ; margin: 0 auto; font-family: 'Lato', sans-serif; font-weight:700; line-height:1.6em; text-transform:uppercase">Ver Informações</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-img pb-3 pt-3 text-center">
                            <i class="fa fa-phone fa-4x" style="color: #35A88E"></i>
                        </div>
                        <div class="card-body">
                            <h3 style="font-family: 'Roboto Slab', serif; color:#404040; font-weight:700; text-align: center">phones</h3>
                            <p class="m-b-0 m-t-10" style="font-family: 'Lato', sans-serif; text-align: center">Melhor bloco de Rua da Zona Leste de Teresina. Cerca de 8 mil pessoas em 2019.</p>
                            <div class="row text-center">
                                <a class="btn mt-4 text-center" href="#" style="background-color:#35A88E; color: #fff ; margin: 0 auto; font-family: 'Lato', sans-serif; font-weight:700; line-height:1.6em; text-transform:uppercase">Ver Informações</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/resumee/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/resumee/validate.js"></script>
<style type="text/css">
    .section-title h1 {
        margin-top: 0px;
    }
    .section-title h1::before {
        content: '';
        position: absolute;
        display: block;
        width: 120px;
        height: 1px;
        background: #ddd;
        bottom: 1px;
        left: calc(50% - 60px);
    }
    .section-title h1::after {
        content: '';
        position: absolute;
        display: block;
        width: 40px;
        height: 3px;
        background: #35A88E;
        bottom: 0;
        left: calc(50% - 20px);
    }

    .section-title-product h1 {
        margin-top: 0px;
    }
    .section-title-product h1::before {
        content: '';
        position: absolute;
        display: block;
        width: 120px;
        height: 1px;
        background: #ddd;
        bottom: 1px;
        left: calc(50% - 60px);
    }
    .section-title-product h1::after {
        content: '';
        position: absolute;
        display: block;
        width: 40px;
        height: 3px;
        background: #FFF;
        bottom: 0;
        left: calc(50% - 20px);
    }
    #section-colab {
        width:100%;
        margin: 4em 0; 
        padding: 6em; 
        background: linear-gradient(rgba(53, 168, 142, 0.88), rgba(53, 168, 142, 0.88)), url('assets/images/banner1.jpg') fixed no-repeat; 
        background-size: cover; 
    }
</style>