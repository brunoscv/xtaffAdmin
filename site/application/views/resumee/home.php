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
                <!-- Column -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="formulario">
                        <form action="<?php echo base_url('resumee/criar'); ?>" role="form" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="nome" class="form-control" placeholder="Nome" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="idade" class="form-control" placeholder="Idade" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="grau_instrucao" class="form-control" placeholder="Grau de Instrução" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" placeholder="E-mail"><br>
                                    </div>
                                </div>        			
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" name="telefone" placeholder="Telefone"><br> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" name="instagram" placeholder="Instagram"><br> 
                                    </div>
                                </div>        			
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" name="twitter" placeholder="Twitter"><br> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" name="facebook" placeholder="Facebook"><br> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" required="" name="hobby" placeholder="Hobbies"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" required="" name="estilo_musica" placeholder="Estilos de música preferidos"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox33" type="checkbox">
                                            <label for="checkbox33">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox44" type="checkbox">
                                            <label for="checkbox44">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox55" type="checkbox">
                                            <label for="checkbox55">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-lg-2 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox33" type="checkbox">
                                            <label for="checkbox33">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox44" type="checkbox">
                                            <label for="checkbox44">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox55" type="checkbox">
                                            <label for="checkbox55">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox55" type="checkbox">
                                            <label for="checkbox55">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group text-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox55" type="checkbox">
                                            <label for="checkbox55">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" required="" name="observacoes" placeholder="Observações"></textarea>
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
                            <h3 style="font-family: 'Roboto Slab', serif; color:#404040; font-weight:700; text-align: center">Telefones</h3>
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